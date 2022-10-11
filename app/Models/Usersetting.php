<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class UserSetting extends Model
{
    use HasFactory;

    public function GetRoleslist(){

    	$role_list=DB::table('users_roles as childs')
    				->select('childs.id','childs.role_name','childs.reporting_to','childs.role_des','parents.role_name as parentsName')
    				->join('users_roles as parents','childs.reporting_to','=','parents.id')
    				->get();
    	if($role_list){
    		return $role_list;
    	}else{
    		return false;
    	}
    }

     public function GetRolesTree(){
     	$data=DB::table('users_roles')
	    	->select('id','role_name','reporting_to')
	   	->where('company_id','1')
			->orderby("id",'desc')
	    	->get();
			if($data){ return $data; }else{ return false; }
	    }
}
