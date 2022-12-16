<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use DB;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function __construct() {
        $this->Customer=new Customer();

    }
    public function SendNotification($noti_data)
    {
        $result = DB::table('notifications')->insert($noti_data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    public function GetUserById($user_id){
        $user_name=DB::table('users')->select('full_name')->where('id',$user_id)->first();
        return $user_name;
    }
    public function csv_export_data()
    {
        // $quary =$this->Customer->GetLeadsData();
        $quary = DB::table('module_selected_column')
        ->where('module_id', 8)
        ->where(function ($query){
            $query->where( 'company_id', 0)
            ->orWhere('company_id',session()->get('company_id'));
        })

        ->get();
        // dd($quary);
        // $data = json_decode(json_encode($quary), True);
        $i = 0;
        $data=[];
        foreach ($quary as $key => $value) {
            $data[]=$value->column_id.'_'.$value->col_name;
            // $data[]=(json_decode(json_encode( $key),true));

              }
            //   $data=implode(',',$data);
            //   print_r($data);
            //   die;
        // $dat1 = $data_array;



        // function cleanData(&$str)
        // {
        //     if ($str == 't') $str = 'TRUE';
        //     if ($str == 'f') $str = 'FALSE';
        //     if (preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str) || preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $str)) {
        //         $str = " $str";
        //     }
        //     if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
        // }

        // filename for download
        $filename = "pankaj" . date('Ymd') . ".csv";

        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Content-Type: text/csv");

        $out = fopen("php://output", 'w');
        // dd($dat1);

        $flag = false;
        // foreach ($dat1 as $row) {
        //     if (!$flag) {
        //         // display field/column names as first row
        //         fputcsv($out, array_keys($row), ',', '"');
        //         $flag = true;
        //     }
        //     array_walk($row, __NAMESPACE__ . '\cleanData');
        //     fputcsv($out, array_values($row), ',', '"');
        // }

        $pankaj ="";
        fputcsv($out, $data);
        foreach ($data as $row) {



                // fputcsv($out, $row);
                // fputcsv($out, array_values($p1), ',', '"');
                // $pankaj .=  $p .",";

        }
        // dd($pankaj);

        fclose($out);
    }
}
