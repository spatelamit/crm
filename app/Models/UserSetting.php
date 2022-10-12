<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class UserSetting extends Model
{
    use HasFactory;
    //roles start//

    public function GetRoleslist(){

    	$role_list=DB::table('users_roles as childs')
    				->select('childs.id','childs.role_name','childs.reporting_to','childs.role_des','parents.role_name as parentsName')
    				->join('users_roles as parents','childs.reporting_to','=','parents.id')
                    ->where('childs.company_id',session()->get('company_id'))
                    ->where('childs.status','1')
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
	   	->where('company_id',session()->get('company_id'))
			->orderby("id",'desc')
	    	->get()
            ->toArray();
			if($data){ return $data; }else{ return false; }
	    }

        public function GetFeatures(){
            $features=DB::table('module_features_list')
            ->select('id','features_name','module_id')
            ->orderby('id','ASC')
            ->get()
            ->toArray();
            if($features){
                return $features;
            }else{
                return false;
            }
        }

        public function SaveRole($req){
            
            $data_arr=array(
                'role_name'=>$req->role_name,
                'reporting_to'=>$req->reporting_to,
                'company_id'=>session()->get('company_id'),
                'role_des'=>$req->role_des,
                'features_permission'=>$req->features_permission,
            );
            $result=DB::table('users_roles')->insert($data_arr);
            if ($result) {
                return true;
            }else{
                return falsel;
            }
        }
        public function GetRoleById($id){
            $role_list=DB::table('users_roles as childs')
                    ->select('childs.id','childs.role_name','childs.features_permission','childs.reporting_to','childs.role_des','parents.role_name as parentsName')
                    ->join('users_roles as parents','childs.reporting_to','=','parents.id')
                    ->where('childs.company_id',session()->get('company_id'))
                      ->where('childs.id',$id)
                    ->get();
                if($role_list){
                     return $role_list;
                 }else{
                     return false;
                     }

        }
        public function UpdateRole($req){
            // echo "<pre>";
            // print_r($req->all());
            $data_arr=array(
                'role_name'=>$req->role_name,
                'reporting_to'=>$req->reporting_to,
                
                'role_des'=>$req->role_des,
                'features_permission'=>$req->features_permission,
            );
            
            $result=DB::table('users_roles')->where('id',$req->role_id)->update($data_arr);
            if ($result) {
                return true;
            }else{
                return false;
            }
        }
        // roles end//

        public function GetUsers(){

            $result=DB::table('users')
                    ->select('users.*','users_roles.role_name')
                    ->where('users.company_id',session()->get('company_id'))
                    ->where('users.status','1')
                    ->where('users.parent_id',session()->get('id'))
                    ->join('users_roles','users_roles.id','=','users.role_id')
                    ->get();
            if($result){
                return $result;
            }else{
                return false;
            }

        }

}
