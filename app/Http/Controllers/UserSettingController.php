<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Usersetting;
use DB;


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
     public function update_role(Request $Request){
    	$result=$this->Usersetting->UpdateRole($Request);
    	if($result){
    		return redirect('roles');
    	}else{
    		return redirect('roles');
    	}


    }public function delete_role($id){
    	$data=array(
    		'status'=>'0',
    	);

    	$result=DB::table('users_roles')->where('id',$id)->update($data);
    	if($result){
    		return true;
    	}else{
    		return false;
    	}
    }

    public function user_account_setting()  {

    	$data['roles']=$this->Usersetting->GetRolesTree();

    	$data['users']=$this->Usersetting->GetUsers();
    	$data['recursiveroles']=$this->Usersetting->getRecursiveChildren(session()->get('role_id'),$data['roles']);
// echo "<pre>";
// print_r($data['recursiveroles']);
// die();

        return view('roles_setting.users_account_setting',compact('data'));
    }

    public function add_user(Request $req){
    	$result=$this->Usersetting->AddUser($req);
    	if($result){
    		return redirect('user_account_setting');

    	}else{
    		return redirect('user_account_setting');

    	}


    }
    public function update_user(Request	$req){
    	$result=$this->Usersetting->UpdateUser($req);
    	if($result){
    		return redirect('user_account_setting');

    	}else{
    		return redirect('user_account_setting');

    	}

    }
    public function delete_user($id){
    	$data=array(
    		'status'=>'0',
    	);

    	$result=DB::table('users')->where('id',$id)->update($data);
    	if($result){
    		return true;
    	}else{
    		return false;
    	}


    }





    public function sms_settings()
    {
    	$data['sms_data']=$this->Usersetting->GetSmsData();
        return view('roles_setting.sms_setting',compact('data'));
    }

    public function update_sms_details(Request $req){
		 $result=$this->Usersetting->UpdateSmsDetails($req);  
		 if($result){
    		return redirect('sms_settings')->with("success", "Successfully Updated SMS DLT details!")	;

    	}else{
    		return redirect('sms_settings')->with("error", 'Details not updated');

    	}	

    }
    public function add_sms_details(Request $req){
    	$result=$this->Usersetting->AddSmsDetails($req); 
    	if($result){
    		return redirect('sms_settings')->with("success", "Successfully Added SMS DLT details!")	;

    	}else{
    		return redirect('sms_settings')->with("error", 'SMS DLT Details Not Added');

    	}	 

    }
    public function delete_sms_details($id){

    	$result=DB::table('user_massage_dlt_details')->where('id',$id)->delete();

    	if($result){
    		return redirect('sms_settings')->with("success", "Successfully Deleted SMS DLT details!")	;
    	}else{
    		return redirect('sms_settings')->with("error", 'SMS DLT Details Not delete!');
    	}


    }

    public function email_settings()
    {
    	$data['email_data']=$this->Usersetting->GetEmailData();
        return view('roles_setting.email_setting',compact('data'));
    }

     public function update_email_details(Request $req){
		 $result=$this->Usersetting->UpdateEmailDetails($req);  
		 if($result){
    		return redirect('email_settings')->with("success", "Successfully Updated SMS DLT details!")	;

    	}else{
    		return redirect('email_settings')->with("error", 'Details not updated');

    	}	

    }
     public function add_email_details(Request $req){
    	$result=$this->Usersetting->AddEmailDetails($req); 
    	if($result){
    		return redirect('email_settings')->with("success", "Successfully Added Email details!")	;

    	}else{
    		return redirect('email_settings')->with("error", 'Email Details Not Added');

    	}	 

    }
    public function delete_email_details($id){

    	$result=DB::table('email_api_details')->where('id',$id)->delete();

    	if($result){
    		return redirect('email_settings')->with("success", "Successfully Deleted Email details!")	;
    	}else{
    		return redirect('email_settings')->with("error", 'Email Details Not delete!');
    	}


    }

   public function pipelines_stages(){

        $data['pipelines_group']=$this->Usersetting->GetPipelines();

        // dd($data);
     
        return view('roles_setting.pipelines_stages',compact('data'));
    }
    public function add_pipeline(Request $req){

        $result=$this->Usersetting->SavePipeline($req);

        if($result){
            return redirect('pipelines_stages')->with("success", "Successfully Added Pipeline!")   ;
        }else{
            return redirect('pipelines_stages')->with("error", 'Pipeline Not Added!');
        }
    }

    public function add_fields(){

        return view('roles_setting/add-columns');
    }
    public function save_fields(Request $req){
    //     echo "<pre>";
    // print_r($req->all());
       $result=$this->Usersetting->SaveFields($req);
        if($result){
            return redirect()->back()->with("success", "Successfully Added Fields!")   ;
        }else{
            return redirect()->back()->with("error", 'Fields Not Added!');
        }
        

    }

    public function module_layout(){
        
    }

}
