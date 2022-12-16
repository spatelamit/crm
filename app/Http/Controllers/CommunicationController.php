<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CommunicationController extends Controller
{
    public function sms_api(Request $request)
    {

   $curl=curl_init();
        
        $message="verification code: {#var#}Request From IP: {#var#}Number: {#var#}SR Technology Services Pvt. Ltd..";
        
        $template_id = $request->template_id;  


        $user_id=session()->get('id');
        $data = DB::table('user_massage_dlt_details')->select('authKey','template','route')->where('template_id', $template_id)->where('user_id',$user_id)->first();

        $sender = $request->sender_id;
        $mobileNumber = $request->sms_numbers;
        $route = $data->route; 
        $authKey = $data->authKey;
        $message = $data->template;
        $coding="1"; 


        $postData = array(
            "campaign_name" => "testing",
            "auth_key" => $authKey,
            "receivers"  => $mobileNumber,
            "sender"  => $sender,
            "route"  => $route,
            "message" => [
                'msgdata' => $message,
                'Template_ID' => $template_id,
                'coding' => $coding
            ]
        );
        curl_setopt_array($curl, array(
            CURLOPT_URL  => 'http://sms.bulksmsserviceproviders.com/api/send/sms',
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_ENCODING  => '',
            CURLOPT_MAXREDIRS  => 10,
            CURLOPT_TIMEOUT  => 0,
            CURLOPT_FOLLOWLOCATION  => true,
            CURLOPT_HTTP_VERSION  => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => 'POST',
            CURLOPT_POSTFIELDS  => json_encode($postData),
            CURLOPT_HTTPHEADER  => array('Content-Type: application/json'),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        dd($response);

    }


    public function voice_api(Request $request)
    {
       $campaign_name = "test";
        $authKey = $request->authKey; //"caefb78922dc62e21fdb9bf87fe38b16";
        $receivers = $request->voice_numbers;
        $sender = $request->voice_sender;// "912271897314";
        $route = $request->route;
        $type = "text";
        $message = "Rajdhani : Order No 242388 for Train No 19055 / BL JODHPUR EXP at Ahmedabad Jn. Delivery 23:50:00 Amount 518 via Cash on Delivery ";

        $message = $request->voice_message;
        $duration = "30";
        $postData = [
            "campaign_name" => "test",
            "auth_key" => $authKey,
            "receivers" => $receivers,
            "sender" => $sender,
            "route" => $route,
            "message" => ['message' => $message,"duration" => $duration,'type' => $type]
        ];
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'http://sms.bulksmsserviceproviders.com/api/send/voice',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postData),
            CURLOPT_HTTPHEADER => ['Content-Type: application/json']
        ]);
        $response = curl_exec($curl);
        curl_close($curl);
        dd($response);
    }

    public function email_api(Request $request)
    {
       $curl = curl_init();
        $authKey = $request->authKey;// "caefb78922dc62e21fdb9bf87fe38b16"
        $receivers = $request->email_ids; //Receivers Email
        $sender = $request->sender_email;  //Sender Email
        $sender_name = $request->sender_name; //Email sender name
        $subject = $request->subject; //Email Subject
        $message = $request->email_message; //Email Content
      
        $postData = [
            "campaign_name" => "Email",
            "auth_key" => $authKey,
            "receivers" => $receivers,
            "sender"=> $sender,
            "message"  => [
                'message'=> $message,
                'sender_name' => $sender_name,
                "subject" =>  $subject
            ]
        ];

        
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://sms.bulksmsserviceproviders.com/api/send/email',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postData),
            CURLOPT_HTTPHEADER => ['Content-Type:  application/json']
        ));
        $response =  curl_exec ($curl);
        curl_close($curl);
        dd($response);
    }
}
