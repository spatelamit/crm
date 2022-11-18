<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunicationController extends Controller
{
    public function sms_api(Request $request)
    {

    $curl=curl_init();
    $campaign_name="testing"; //My First Campaign
    $authKey="caefb78922dc62e21fdb9bf87fe38b16";  //Valid Authentication Key
    $mobileNumber="9827792978"; //Receivers
    $sender="SRTSIN"; //Sender Approved from Dlt
    $message="verification code: {#var#}Request From IP: {#var#}Number: {#var#}SR Technology Services Pvt. Ltd..";  //Content Approved from Dlt
    $route="TR";  //TR for tranactional,PR for promotional
    $template_id="1107161518772416122"; //Template Id Approved from Dlt
    //$scheduleTime=""; //if required fill parameter in given formate 07-05-2022 12:00:00 dd-mm-yyyy hh:mm:ss
    $coding="1"; //If english $coding = "1" otherwise if required other language $coding = "2"
    $postData = array(
    "campaign_name" => $campaign_name,
    "auth_key" => $authKey,
    "receivers"  => $mobileNumber,
    "sender"  => $sender,
    "route"  => $route,
    "message" => ['msgdata' => $message,'Template_ID' => $template_id,'coding' => $coding,],
    //"scheduleTime" => $scheduleTime,
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
    CURLOPT_HTTPHEADER  => array(
      'Content-Type: application/json'
    ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    echo $response;

    }


    public function voice_api()
    {
        $campaign_name = "test";
        $authKey = "caefb78922dc62e21fdb9bf87fe38b16";
        $receivers = "9827792978";
        $sender = "912271897314";
        $route = "TR";
        $type = "text";
        $message = "Rajdhani : Order No 242388 for Train No 19055 / BL JODHPUR EXP at Ahmedabad Jn. Delivery 23:50:00 Amount 518 via Cash on Delivery ";
        $duration = "24";
        $scheduleTime = "";

        $postData = array(
          "campaign_name" => $campaign_name,
          "auth_key" => $authKey,
          "receivers" => $receivers,
          "sender" => $sender,
          "route" => $route,
          "message" => array('message' => $message,"duration" => $duration,'type' => $type),
          "scheduleTime" => $scheduleTime,
        );

        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'http://sms.bulksmsserviceproviders.com/api/send/voice',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => json_encode($postData),
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    public function email_api()
    {
        $curl = curl_init();
      $campaign_name ="Email";//My First Campaign
      $authKey ="caefb78922dc62e21fdb9bf87fe38b16";  //Valid Authentication Key
      $receivers =""; //Receivers Email
      $sender ="";  //Sender Email
      $sender_name =""; //Email sender name
      $subject =""; //Email Subject
      $message ="";//Email Content
      $scheduleTime ="";
      //if required fill parameter in given formate 07-05-2022 12:00:00 dd-mm-yyyy hh:mm:ss
      $postData = array(
      "campaign_name" => $campaign_name,
      "auth_key" => $authKey,
      "receivers" => $receivers,
      "sender"=> $sender,
      "scheduleTime" => $scheduleTime,
      "message"  => ['message'=> $message, 'sender_name' =>  $sender_name, "subject" =>  $subject  ],
     );
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
     CURLOPT_HTTPHEADER => array(
     'Content-Type:  application/json'
     ),
     ));
     $response =  curl_exec ($curl);
      curl_close($curl);
      echo $response;
    }
}
