<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Storage;

class Activity extends Model
{
    use HasFactory;

    public function Add_Task($req){
        // $req['sender_id']=session()->get('id');

    //    unset($req['_token']);
    //    dd($req->all());



    $data = array('subject' => $req->subject,
    'description' => $req->description,
    'status' => $req->status,
    'sender_id'=>session()->get('id'),
    'priority' => $req->priority,
    'due_date' => $req->due_date,

    'related_to' => $req->account);

    // dd($data);

        // $result=DB::table('tasks')->insert($req->all());
        $result = DB::table('tasks')->insert($data);

        if($result){
            return true;
          }else{
            return false;
          }

    }


    public function import_csv($req)
    {
        // dd($req->importleads->getClientOriginalName());
        if(isset($req->importleads)){
            // $fileName.'_'.time().'.'.$extension;
            if($req->file('importleads'))
            $filename=$req->importleads->getClientOriginalName();
            echo $filename;
           $path = $req->file($filename)->store('csv');

           echo $path ;
            // dd($filename);
             if($req->file('importleads') > 0)
             {
                $file = fopen($filename, "r");
                // print_r(fgetcsv($file));
                // die;
                  while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
                   {
                    dd($getData);
                     $sql = "INSERT into employeeinfo (emp_id,firstname,lastname,email,reg_date)
                           values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')";
                           $result = mysqli_query($con, $sql);
                if(!isset($result))
                {
                  echo "<script type=\"text/javascript\">
                      alert(\"Invalid File:Please Upload CSV File.\");
                      window.location = \"index.php\"
                      </script>";
                }
                else {
                    echo "<script type=\"text/javascript\">
                    alert(\"CSV File has been successfully Imported.\");
                    window.location = \"index.php\"
                  </script>";
                }
                   }

                   fclose($file);
             }
          }
    }

    public function GetNotes($module_id = null,$relatedId=null){
      $user_id = session()->get('id');
       $result= DB::table('notes')
        ->select('notes.note_des','notes.creation_time', 'users.full_name')
        ->join('users', 'users.id', '=', 'notes.user_id')
        ->where('notes.module_id',$module_id )
        ->where('notes.related_to',$relatedId )
        // ->where('notes.user_id', $user_id)
        ->get();
        return $result;
    }
}
