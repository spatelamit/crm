<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class UserSetting extends Model
{
    use HasFactory;
    //roles start

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
      ->where('status','1')
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
public function GetAllUsers(){

    $result=DB::table('users')
    ->select('users.*','users_roles.role_name')
    ->where('users.company_id',session()->get('company_id'))
    ->where('users.status','1')
 
    ->join('users_roles','users_roles.id','=','users.role_id')
    ->get();
    if($result){
        return $result;
    }else{
        return false;
    }

}
public function getRecursiveChildren($roles_id,$roles):array
{       

    $chiled = [];
    foreach ($roles as $role) {
        if ($role->reporting_to == $roles_id) {
            $chiled[] = $role->id;
            array_push($chiled,...$this->getRecursiveChildren($role->id,$roles));

        }
                            // else{
                            //     $chiled[]=$roles_id;
                            // }

    }
                         // print_r($chiled);
                         //        die();
    return $chiled;
}
public function getReChiByPar($user_id,$users)
{       

    $chiled []=session()->get('id');
    foreach ($users as $user) {
        if ($user->parent_id == $user_id) {
            $chiled[] = $user->id;
            array_push($chiled,...$this->getReChiByPar($user->id,$users));

        }
                          

    }
                         // print_r($chiled);
                         //        die();
    return $chiled;
}
public function  ChildNameByparentId(){
    $user_id=session()->get('id');
    $all_users=$this->GetAllUsers();
  
  
       $RecursiveChildrenUsers=$this->getReChiByPar($user_id,$all_users);

        $chileusers=implode(',', $RecursiveChildrenUsers);

        if($RecursiveChildrenUsers){
                        $result=DB::table('users')
                            ->select('id','full_name','email','role_id','parent_id')
                            ->whereIn('id',$RecursiveChildrenUsers)
                              ->get()->toArray();

                if($result){
                    return $result;
                }else{
                    return false;
                }
        }else{
            return false;
        }
}

public function UpdateUser($req){

    $data=array(
        'full_name'=>$req->full_name,
        'email'=>$req->email,
        'contact'=>$req->contact,
        'dob'=> $req->dob,
        'role_id'=>$req->user_type
    );

    $result=DB::table('users')->where('id',$req->user_id)->update($data);
    if($result){
       return true;
   }else{
       return false;
   }
}

public function AddUser($req){



    $email_verify=DB::table('users')->where('email',$req->email)->first();
    if($email_verify===null){
        $data=array(
            'full_name'=>$req->full_name,
            'company_id'=>session()->get('company_id'),
            'parent_id'=>session()->get('id'),
            'email'=>$req->email,
            'username'=>$req->username,
            'contact'=>$req->contact,
            'dob'=> $req->dob,
            'role_id'=>$req->role_id,
            'password'=>$req->password,
        );

        $result=DB::table('users')->insert($data);
        if($result){
           return true;
       }else{
           return false;
       }

   }
   else{
    return false;

}

}

public function GetSmsData(){
    $result=DB::table('user_massage_dlt_details')
    ->where('user_id',session()->get('id'))
    ->get();
    if($result){
        return $result;
    }else{
        return false;
    }

}

public function UpdateSmsDetails($req){

    $data=array(
        'template'=>$req->template,
        'sender_id'=>$req->sender_id,
        'pe_id'=>$req->pe_id,
        'template_id'=>$req->template_id,

    );

    $result=DB::table('user_massage_dlt_details')->where('id',$req->sms_id)->update($data);
    if($result){
        return true;
    }else{
        return false;
    }
}

public function AddSmsDetails($req){

    $data=array(
        'template'=>$req->template,
        'sender_id'=>$req->sender_id,
        'pe_id'=>$req->pe_id,
        'template_id'=>$req->template_id,
        'user_id'=>session()->get('id'),
        'authKey'=>$req->authKey,

    );

    $result=DB::table('user_massage_dlt_details')->insert($data);
    if($result){
        return true;
    }else{
        return false;
    }
}

public function GetEmailData(){
    $result=DB::table('email_api_details')
    ->where('user_id',session()->get('id'))
    ->get();
    if($result){
        return $result;
    }else{
        return false;
    }

}

public function AddEmailDetails($req){

    $data=array(
        'email_id'=>$req->email_id,
        'api_key'=>$req->auth_Key, 
        'user_id'=>session()->get('id'),

    );
                // dd($data);

    $result=DB::table('email_api_details')->insert($data);
    if($result){
        return true;
    }else{
        return false;
    }
}

public function UpdateEmailDetails($req){

    $data=array(
     'email_id'=>$req->email_id,
     'api_key'=>$req->auth_Key, 
 );

    $result=DB::table('email_api_details')->where('id',$req->eid)->update($data);
    if($result){
        return true;
    }else{
        return false;
    }
}

//pipelines//
    public function GetPipelines(){
        
        DB::statement("SET SQL_MODE=''");
        $result=DB::table('pipeline_group')
            ->select('pipeline_group.id','pipeline_group.pipeline_name','users_pipeline_stages.id as upid','users_pipeline_stages.stage_name','users_pipeline_stages.stage_colour','users_pipeline_stages.stage_slug','users_pipeline_stages.pipeline_group_id')
            ->where('pipeline_group.company_id',session()->get('company_id'))
            ->join('users_pipeline_stages','users_pipeline_stages.pipeline_group_id','=','pipeline_group.id')
            ->groupBy('users_pipeline_stages.pipeline_group_id')
            ->get();
                if($result){
                         return $result;
                 }else{
                        return false;
                  }
    }
    
    public function SavePipeline($req){
        // dd($req->all());
        $pipeline_name=$req->pipeline_stage_name;
        $stage_name=$req->stage_name;
        $stage_colour=$req->stage_colour;

        $pipeline_group=array(
            'pipeline_name'=>$pipeline_name,
            'company_id'=>session()->get('company_id'),
        );
        $pipeline_group_id=DB::table('pipeline_group')->insertGetId($pipeline_group);
        for ($i=0; $i <count($req->stage_name) ; $i++) { 

            $data[]=array(
                'pipeline_group_id'=>$pipeline_group_id,
                'user_id'=>session()->get('id'),
                'stage_name'=>$stage_name[$i],
                'stage_colour'=>$stage_colour[$i],
                'stage_slug'=> str_replace(" ","_",strtolower($stage_name[$i])),
            );
        }
        $result=DB::table('users_pipeline_stages')->insert($data);
        if($result){
              return $result;
         }else{
           return false;
         }



    }
    public function SaveFields($req){

        for ($i=0; $i <count($req->label) ; $i++) { 
            if($req->type[$i]=='select'){
                     $data1=array(
                    'label'=>$req->label[$i],
                    'type'=>$req->type[$i],
                    'col_name'=>(str_replace(" ","_",strtolower($req->label[$i]))),
                    'company_id'=>session()->get('company_id'),
                    );  
                         $insert_id=DB::table('module_columns')->insertGetId($data1);
                        for ($j=0; $j <count($req->optionNames) ; $j++) { 
                            $optn_data[]=array(
                                'column_id'=>$insert_id,
                                'option_name'=>$req->optionNames[$j],
                                'company_id'=>session()->get('company_id'),
                            );
                        }
                        // echo $insert_id;
                        // dd($optn_data);
                          $result1=DB::table('fields_option')->insert($optn_data);
             }else{
             $data=array(
            'label'=>$req->label[$i],
            'type'=>$req->type[$i],
            'col_name'=>(str_replace(" ","_",strtolower($req->label[$i]))),
            'company_id'=>session()->get('company_id'),
            );
              $result=DB::table('module_columns')->insert($data);
        }
        }

     

            if($result){
              return true;
             }else{
               return false;
             }



    }
}
 
