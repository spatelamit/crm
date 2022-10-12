<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Usersetting;



class UserSettingController extends Controller

{


	public function __construct() {
        $this->Usersetting=new Usersetting();
    }
    



    		public function roles_view ()

    		{
    			$Usersetting=new Usersetting();
    			$data['role_list']=$Usersetting->GetRoleslist();


    			return view('roles_setting/roles_view',compact('data'));

    		}
    		public function add_role ()
    		{


    			return view('roles_setting/add-role');


    			$Usersetting=new Usersetting();
    			$data['allfeatures']=$Usersetting->GetFeatures();

    			return view('roles_setting/add-role',compact('data'));


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
    	$result=$this->Usersetting->SaveRole($Request);
    	if($result){
    		return redirect('roles');
    	}else{
    		return redirect('roles');
    	}


    }
    public function edit_role($id){
    	$data['role_data']=$this->Usersetting->GetRoleById($id);
    	$data['allfeatures']=$this->Usersetting->GetFeatures();
    	// echo "<pre>";
    	// print_r($data);
    	return view('roles_setting/edit-role',compact('data'));
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
    public function pipelines_stages()
    {
        return view('roles_setting.pipelines_stages');
    }
}
