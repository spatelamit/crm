<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usersetting;

class UserSettingcontroller extends Controller
{
    
    		public function roles_view ()

    		{
    			$Usersetting=new Usersetting();
    			$data['role_list']=$Usersetting->GetRoleslist();
    			

    			return view('roles_setting/roles_view',compact('data'));
    		
    		}
    		public function add_role ()

    		{
    			
    			

    			return view('roles_setting/add-role');
    		
    		}

     public function rolestree(){
     				$Usersetting=new Usersetting();
			    	$roles=$Usersetting->GetRolesTree();

			    	foreach ($roles as $key => &$value) {
			    		$output[$value['id']]=&$value;

			    	}
			    	foreach ($roles as $key => &$value) {
			    		if($value['reporting_to'] && isset($output[$value['reporting_to']])){
			    			$output[$value['reporting_to']]['nodes'][]=$value;
			    		}
			    	}
			    	foreach ($roles as $key => &$value) {
			    		if($value['reporting_to'] && isset($output[$value['reporting_to']])){
			    			unset($roles[$key]);
			    		}
			    	}
			    	$roles=array_filter($roles);
			    	$roles=array_values($roles);
			    	// echo "<pre>";
			    	// print_r($roles);
			    
			    	echo json_encode($roles);
    }
}
