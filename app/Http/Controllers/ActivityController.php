<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Customer;
use App\Models\User;
use Database\Seeders\users;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\type;

class ActivityController extends Controller
{
    public function __construct()
    {

        $this->Activity = new Activity();
        $this->Customer = new Customer();
        $this->User = new User();
    }
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

    public function add_task()
    {
        $data['accounts_datas'] = $this->Customer->GetDealData('10');
        if ($data['accounts_datas']) {
            foreach ($data['accounts_datas'] as $key => $value) {
                $data['accounts_data'][] = (json_decode(json_encode($value), true));
            }
            foreach ($data['accounts_data'] as $key1 => $value1) {
                $data['company_names'][] = array(
                    'id' => $value1['data_id'],
                    'text' => $value1['company_name'],
                    'name' => $value1['data_id'],
                );
            }
        } else {
            $data['accounts_data'] = null;
        }

        $data['meeting_user'] = DB::table('users')
            ->where('company_id', session()->get('company_id'))
            ->select('username', 'id', 'full_name')
            ->get();

        return view('tasks', compact('data'));
    }

    public function task_add(Request $req)
    {
        // dd($req);
        $result = $this->Activity->Add_Task($req);
        if ($result) {
            return redirect('tasks')->with("success", "Successfully Task created !");
        } else {
            return redirect('tasks')->with("error", ' Task not created');
        }
    }

    public function edittask($id)
    {
        $edit['task'] = DB::table('tasks')->find($id);
        // dd($edit);
        $user_id = session()->get('id');
        $edit['notes'] = DB::table('notes')

            ->join('users', 'users.id', '=', 'notes.user_id')
            ->select('notes.*', 'users.username')
            ->where('notes.module_id', 11)
            ->where('notes.related_to', $id)
            ->where('notes.user_id', $user_id)
            ->get();

        // dd($edit['notes']);

        return view('edittask', compact('edit'));
    }


    public function taskupdate(Request $req)
    {
        // dd($req);
        $data = array(
            'subject' => $req->subject,
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
            return redirect('tasks')->with("success", "Successfully Task updated !");
        } else {
            return redirect('tasks')->with("error", ' Task not updated');;
        }
    }


    public function addnots(Request $req)
    {
        // dd($req->all());
        $data = array(
            'related_to' => $req->related_id,
            'user_id' => session()->get('id'),
            'note_des' => $req->note_des,
            'module_id' => $req->module_id
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


            ->paginate('10');
        // dd(DB::getQueryLog());
        //   dd($result);
        return view('meetings', compact('result'));
    }


    public function editmeeting($id)
    {
        $user_id = session()->get('id');
        $edit['meeting'] = DB::table('meetings')
            ->select('meetings.*', 'u1.username as sender_user', 'u2.username as  reciever_user')
            ->join('users as u1', 'u1.id', '=', 'meetings.sender_id')
            ->leftJoin('users as u2', 'u2.id', '=', 'meetings.reciever_id')
            ->where('meetings.sender_id', $user_id)
            ->Orwhere('meetings.reciever_id', $user_id)
            ->where('meetings.id', $id)
            ->first();
        // dd($edit['meeting']);
        // $user_id = session()->get('id');


        $edit['notes'] = DB::table('notes')
            ->select('notes.*', 'users.username')
            ->join('users', 'users.id', '=', 'notes.user_id')
            // ->join('meetings', 'meetings.id', '=', 'notes.related_to')
            ->where('notes.module_id', 12)
            ->where('notes.related_to', $id)
            ->where('notes.user_id', $user_id)
            ->get();

        return view('editmeetings', compact('edit'));
    }


    public function meeting_notes(Request $req)
    {
        $data = array(
            'related_to' => $req->meetingid,
            'user_id' => session()->get('id'),
            'note_des' => $req->note_des,
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


    public function ImportCsv(Request $req)
    {
        // dd($req);
        $result = $this->Activity->import_csv($req);

        if ($result) {
            return redirect()->back()->with("success", "Successfully UploadCSV!");
        } else {
            return "error";
        }
    }

    public function add_meetings()
    {
        $data['accounts_datas'] = $this->Customer->GetDealData('10');
        if ($data['accounts_datas']) {
            foreach ($data['accounts_datas'] as $key => $value) {
                $data['accounts_data'][] = (json_decode(json_encode($value), true));
            }
            foreach ($data['accounts_data'] as $key1 => $value1) {
                $data['company_names'][] = array(
                    'id' => $value1['data_id'],
                    'text' => $value1['company_name'],
                    'name' => $value1['data_id'],
                );
            }
        } else {
            $data['accounts_data'] = null;
        }

        $data['meeting_user'] = DB::table('users')
            ->where('company_id', session()->get('company_id'))
            ->select('username', 'id', 'full_name')
            ->get();

        return view('add_meetings', compact('data'));
    }

    public function create_meeting(Request $req)
    {
        // $req->validate([
        //     'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf|max:3048'
        //   ]);


        // dd($req);
        $file = $req->file('attachments');
        // dd($file);
        $filename = 'attachments' . time() . '.' . $req->attachments->extension();
        // dd($filename);
        // exit;
        $file->move("upload/", $filename);
        // dd($file);
        // exit;
        $data = array(
            'title' => $req->title,
            'description' => $req->description,
            'status' => $req->status,
            'sender_id' => session()->get('id'),
            'location' => $req->location,
            'start_date' => $req->start_date,
            'end_date' => $req->end_date,
            'reciever_id' => $req->reciever_id,
            'related_to' => $req->related_to,
            'attachments' => $filename,
            'meeting_url' => $req->meeting_url,
            'meeting_plateform' => $req->meeting_plateform



            // 'modify_date' => date('Y-m-d H:i:s')
        );
        // dd($data);
        $add_meeting = DB::table('meetings')->insert($data);
        $reciever_name = $this->User->GetUserById($req->reciever_id);
        $noti_data = array(
            'type' => 'Meeting',
            'message' => 'Meeting Assign by ' . session()->get('full_name') . ' Assigned to' . $reciever_name,
            'link' => '',
            'icons' => '',
            'sender_id' => session()->get('id'),
            'reciever_id' => $req->reciever_id
        );
        //  $notifi = new User();
        $this->User->SendNotification($noti_data);

        if ($add_meeting) {
            return redirect('meetings');
        } else {
            return "error";
        }
    }


    public function meeting_notification()
    {
        $user_id = session()->get('id');

        $notify = DB::table('meetings')->select('start_date', 'title')
            ->where('meetings.reciever_id', $user_id)
            ->Orwhere('meetings.sender_id', $user_id)
            ->whereDate('start_date', now())
            ->get();
        // print_r($notify);
        foreach ($notify as $meeting) {
            // echo $meeting->start_date;
            $date = $meeting->start_date;

            $hours = strtotime($date . '-1 hours');
            // dd($hours);
            $cur_date = date('Y-m-d H:i:s');
            $from = strtotime($cur_date . '- 1 hours -2 minutes');
            $to = strtotime($cur_date . '- 1 hours +15 minutes');

            // echo "</BR>";
            // echo (date('Y-m-d H:i:s',$from));

            // echo "</BR>";
            // echo (date('Y-m-d H:i:s',$to));
            // echo "</BR>";
            // echo($hours.'-'.$from.'-'. $to);
            if (($hours < $to) &&  ($hours > $from)) {
                echo ($hours . '-' . $from . '-' . $to);
                return back()->with("success", "meeting Title-" . $meeting->title . "  DateTime-" . $date);
            }
        }
    }


    public function task_notification()
    {
        $user_id = session()->get('id');

        $notify = DB::table('tasks')->select('start_date', 'subject', 'reminder')
            ->where('tasks.reciever_id', $user_id)
            ->Orwhere('tasks.sender_id', $user_id)
            ->whereDate('start_date', now())
            ->get();
        // print_r($notify);
        foreach ($notify as $meeting) {
            // echo $meeting->start_date;
            $date = $meeting->start_date;

            $hours = strtotime($date . '-1 hours');
            // dd($hours);
            $cur_date = date('Y-m-d H:i:s');
            // $from = strtotime($cur_date . '- 1 hours -2 minutes');
            // $to = strtotime($cur_date . '- 1 hours +15 minutes');



            // echo "</BR>";
            // echo (date('Y-m-d H:i:s',$from));

            if(isset($meeting->reminder) || $meeting->reminder != null){
                $reminder = strtotime($meeting->reminder);
                $from = strtotime($cur_date . ' -2 minutes');
                $to = strtotime($cur_date . ' +15 minutes');
                    if (($reminder < $to) &&  ($reminder > $from)) {
                        echo ($hours . '-' . $from . '-' . $to);
                        return back()->with("success", "Task Title-" . $meeting->subject . "  DateTime-" . $date);
                    }
          }
          else{

            $from = strtotime($cur_date . '-1 hours -2 minutes');
            $to = strtotime($cur_date . '-1 hours +15 minutes');
            if (($hours < $to) &&  ($hours > $from)) {

                echo ($hours . '-' . $from . '-' . $to);
                return back()->with("success", "Task Title-" . $meeting->subject . "  DateTime-" . $date);
            }

          }
        }
    }



    public function notify(Request $req)
    {
        $result = $this->Activity->notification($req);

        if ($result = true) {
            return redirect()->back()->with("success", "Successfully Task Done!");
        }
        return redirect()->back()->with("error", 'Details are not valid');
    }

    public function show_notification()
    {
        $user_id = session()->get('id');
        $show = DB::table('notifications')->select('message','type')
            ->where('notifications.reciever_id', $user_id)
            ->orWhere('notifications.sender_id', $user_id)
            ->get();
            // ->groupBy('type')
            // ->count();
            // dd($show);
        return view('user_notification', compact('show'));
    }

    public function notification_count()
    {
        $user_id = session()->get('id');
        // dd($user_id);
        $query = DB::table('notifications')
                //  ->select( DB::raw('count(*) as total'))
                 ->where(function ($subq) use($user_id){
                    $subq->where('notifications.reciever_id', $user_id)
                    ->orWhere('notifications.sender_id', $user_id);
            })->where('read_status',1)

                 ->get()->count();




        //  $query =  DB::select( DB::raw("SELECT 'type', count(*) as counts FROM notifications  group by 'type' "));

        //  dd($query);
        // return view('header')->with('query', $query);
        return $query;
    }
}
