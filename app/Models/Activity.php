<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    public function Add_Task($req){
        $req['sender_id']=session()->get('id');

       unset($req['_token']);
       dd($req->all());

    $data = array('subject' => $req->subject,
    'description' => $req->description,
    'status' => $req->status,
    'sender_id'=>session()->get('id'),
    'priority' => $req->priority,
    'due_date' => $req->due_date,
    'related_to' => $req->account,
    'modify_date' => date('Y-m-d H:i:s')
        // $result=DB::table('tasks')->insert($req->all());
        $result = DB::table('tasks')->insert($data);

        if($result){
            return true;
          }else{
            return false;
          }

    }
}
