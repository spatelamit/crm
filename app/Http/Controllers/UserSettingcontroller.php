<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Usersetting;



class UserSettingController extends Controller

{
<<<<<<< HEAD

=======
	public function __construct() {
        $Usersetting=new Usersetting();
    }
    
>>>>>>> 1109bafd8cecde85c9ca0785d851cc9b7fa466c4
    		public function roles_view ()

    		{
    			$Usersetting=new Usersetting();
    			$data['role_list']=$Usersetting->GetRoleslist();


    			return view('roles_setting/roles_view',compact('data'));

    		}
    		public function add_role ()
    		{
<<<<<<< HEAD

    			return view('roles_setting/add-role');

=======
    			$Usersetting=new Usersetting();
    			$data['allfeatures']=$Usersetting->GetFeatures();
    			
    			return view('roles_setting/add-role',compact('data'));
    		
>>>>>>> 1109bafd8cecde85c9ca0785d851cc9b7fa466c4
    		}

     public function rolestree(){
     				$Usersetting=new Usersetting();
			    	$roles=$Usersetting->GetRolesTree();

			    	foreach ($roles as $key => &$value) {
			    		$output[$value->id]=&$value;

			    	}
			    	foreach ($roles as $key => &$value) {
			    		if($value->reporting_to && isset($output[$value->reporting_to])){
			    			$output[$value->reporting_to]->nodes[]=$value;
			    		}
			    	}
			    	foreach ($roles as $key => &$value) {
			    		if($value->reporting_to && isset($output[$value->reporting_to])){
			    			unset($roles[$key]);
			    		}
			    	}
			    	$roles=array_filter($roles);
    				$roles=array_values($roles);

			    	echo json_encode($roles);
    }

    public function save_role(Request $Request){
    	echo "<pre>";
    	print_r($Request->all());

    }


    public function user_account_setting()
    {
        return view('roles_setting.users_account_setting');
    }

    public function sms_settings()
    {
        return view('roles_setting.sms_setting');
    }

    public function email_settings()
    {
        return view('roles_setting.email_setting');
    }
}
