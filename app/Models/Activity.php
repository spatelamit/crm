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



        $data = array(
            'subject' => $req->subject,
            'description' => $req->description,
            'status' => $req->status,
            'sender_id' => session()->get('id'),
            'priority' => $req->priority,
            'due_date' => $req->due_date,

            'related_to' => $req->account
        );

        // dd($data);

        // $result=DB::table('tasks')->insert($req->all());
        $result = DB::table('tasks')->insert($data);

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
            //    print_r(fgetcsv($file));
            foreach (fgetcsv($file) as $header) {
                $val = explode('_', $header);
                $col_id[] = $val[0];
            }
            // print_r($col_id);
            while ($getData = fgetcsv($file, 10000, ",")) {
                $data_id = uniqid();
                for ($i = 0; $i < count($col_id); $i++) {
                    $data[] = array(
                        'module_id' => '8',
                        'column_id' => $col_id[$i],
                        'value' => $getData[$i],
                        'user_id' => session()->get('id'),
                        'data_id' => $data_id,
                    );
                }
                $result = DB::table('module_data')->insert($data);
            }

            fclose($file);
            if($result){
                return "true";
            }
            return "false";
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
}
