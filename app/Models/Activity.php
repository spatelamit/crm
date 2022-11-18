<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

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
        if(isset($_POST["Import"])){

            $filename=$_FILES["file"]["tmp_name"];
             if($_FILES["file"]["size"] > 0)
             {
                $file = fopen($filename, "r");
                  while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
                   {
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
}
