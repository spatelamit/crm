<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Arr;
use Storage;

class Activity extends Model
{
    use HasFactory;

    public function Add_Task($req)
    {
        // $req['sender_id']=session()->get('id');

        //    unset($req['_token']);
        //    dd($req->all());
        $user_model = new User();


        $data = array(
            'subject' => $req->subject,
            'description' => $req->description,
            'status' => $req->status,
            'sender_id' => session()->get('id'),
            'priority' => $req->priority,
            'end_date' => $req->end_date,
            'start_date' => $req->start_date,
            'reciever_id' => $req->reciever_id,
            'related_to' => $req->account,
            'reminder' => $req->reminder
        );

        // dd($data);

        // $result=DB::table('tasks')->insert($req->all());
        $result = DB::table('tasks')->insert($data);
        $reciever_name = $user_model->GetUserById($req->reciever_id);
        $noti_data = array(
            'type' => 'Task',
            'message' => 'Task Assign by ' . session()->get('full_name') . ' Assigned to' . $reciever_name,
            'link' => '',
            'icons' => '',
            'sender_id' => session()->get('id'),
            'reciever_id' => $req->reciever_id
        );


        $user_model->SendNotification($noti_data);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }


    public function import_csv($req)
    {
        // dd($req->importleads->getClientOriginalName());
        if (isset($req->importleads)) {
            // $fileName.'_'.time().'.'.$extension;

            $filename = $req->importleads->getClientOriginalName();
            // echo $filename;
            $path = storage_path('csv');
            $req->file('importleads')->move($path, $filename);
            // storage_path('app/public/docs/user_docs/'.$user->id);

            $file_path = ($path . '\\' . $filename);

            // dd($filename);
            // $data=load($path)->get();
            // if($data->count() > 0)

            // if ($req->file('importleads') > 0) {
            $file = fopen($file_path, "r");
            //    dd(fgetcsv($file));
            $header1 = fgetcsv($file, 0, ',');
            // dd($header1);
            $countheader = count($header1);
            if (in_array(null, $header1) || in_array('', array_map('trim', $header1))) {
                echo 'Found a empty value in your array!';
            }



            foreach ($header1 as $header) {
                // dd($header);
                $val = explode('_', $header);
                $col_id[] = $val[0];
            }
            // dd($col_id);
            while ($getData = fgetcsv($file, 10000, ",")) {
                $data_id = uniqid();
                if (empty($getData[0])) {
                    echo 'Found a empty value in your array!';
                }


                for ($i = 0; $i < count($col_id); $i++) {
                    if ($col_id[$i] == 3 && ($getData[$i] != '' && !empty($getData[$i]))) {
                        $data[] = array(
                            'module_id' => '8',
                            'column_id' => $col_id[$i],
                            'value' => $getData[$i],
                            'user_id' => session()->get('id'),
                            'data_id' => $data_id,
                        );
                        // dd($data);
                        $result = DB::table('module_data')->insert($data);

                        fclose($file);
                        if ($result) {
                            return "true";
                        }
                        return "false";
                    }
                }
            }
        }
    }

    public function GetNotes($module_id = null, $relatedId = null)
    {
        $user_id = session()->get('id');
        $result = DB::table('notes')
            ->select('notes.note_des', 'notes.creation_time', 'users.full_name')
            ->join('users', 'users.id', '=', 'notes.user_id')
            ->where('notes.module_id', $module_id)
            ->where('notes.related_to', $relatedId)
            // ->where('notes.user_id', $user_id)
            ->get();
        return $result;
    }


    public function notification()
    {
        $noti_data = array(
            'type' => 'Task',
            'message' => 'Task' . session()->get('full_name') . '',
            'link' => '',
            'icons' => '',
            'sender_id' => '',
            'reciever_id' => ''
        );

        $this->User->SendNotification($noti_data);

        return "true";
    }
}
