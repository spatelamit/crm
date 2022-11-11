<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function tasks()
    {
        $user_id = session()->get('id');
        DB::enableQueryLog();
        $result = DB::table('tasks')
            ->select('tasks.*', 'u1.username as sender_user', 'u2.username as  reciever_user')
            ->join('users as u1', 'u1.id', '=', 'tasks.sender_id')
            ->leftJoin('users as u2', 'u2.id', '=', 'tasks.reciever_id')
            ->where('tasks.sender_id', $user_id)
            ->Orwhere('tasks.reciever_id', $user_id)
            // ->Orwhere('tasks.reciever_id', null)


            ->paginate('5');
            // dd(DB::getQueryLog());
        //   dd($result);
        return view('viewtask', compact('result'));
    }

    public function edittask($id)
    {
        $edit['task'] = DB::table('tasks')->find($id);
        // dd($edit);
        $user_id = session()->get('id');
        $edit['notes']= DB::table('notes')

        ->join('users', 'users.id', '=', 'notes.user_id')
        ->select('notes.*', 'users.username')
        ->where('notes.user_id', $user_id)
        ->get();

        // dd($edit['notes']);

        return view('edittask', compact('edit'));
    }


    public function taskupdate(Request $req)
    {
        // dd($req);
        $data = array('subject' => $req->subject,
            'description' => $req->description,
            'status' => $req->status,
            // 'user_id'=>session()->get('id'),
            'priority' => $req->priority,
            'due_date' => $req->due_date,
            'modify_date' => date('Y-m-d H:i:s')
        );
        $updatetask = DB::table('tasks')->where('id', $req->id)->update($data);

        // $data  = array('pe_id' => $req->pe_id, 'sender' => $req->sender, 'description' => $req->description, 'status' => $req->status, 'updated_at' => date('Y-m-d H:i:s'));

        if ($updatetask) {
            return redirect('tasks');
        } else {
            return "task not updated";
        }
    }


    public function addnots(Request $req)
    {
        $data = array(
            'related_to' =>$req->taskid,
            'user_id'=>session()->get('id'),
            'note_des'=> $req->note_des,
            'module_id' => $req->moduleid
        );
        // dd($data);

        $addnots = DB::table('notes')->insert($data);


        if ($addnots) {
            return redirect()->back();
        } else {
            return "error";
        }

    }



    public function meetings()
    {
        $user_id = session()->get('id');
        DB::enableQueryLog();
        $result = DB::table('meetings')
            ->select('meetings.*', 'u1.username as sender_user', 'u2.username as  reciever_user')
            ->join('users as u1', 'u1.id', '=', 'meetings.sender_id')
            ->leftJoin('users as u2', 'u2.id', '=', 'meetings.reciever_id')
            ->where('meetings.sender_id', $user_id)
            ->Orwhere('meetings.reciever_id', $user_id)
            // ->Orwhere('tasks.reciever_id', null)


            ->paginate('5');
            // dd(DB::getQueryLog());
        //   dd($result);
        return view('meetings', compact('result'));
    }


    public function editmeeting($id)
    {
        $edit['meeting'] = DB::table('meetings')->find($id);
        // dd($edit['meeting']);
        $user_id = session()->get('id');
        $edit['notes']= DB::table('notes')

        ->join('users', 'users.id', '=', 'notes.user_id')
        ->select('notes.*', 'users.username')
        ->where('notes.user_id', $user_id)
        ->get();

        return view('editmeetings', compact('edit'));

    }




}
