<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserSetting;
use App\Models\Activity;
use DB;
class Customer extends Model
{
    use HasFactory;
     public function __construct() {


          $this->Usersetting=new UserSetting();
          $this->Activity=new Activity();

    }

    public function GetModuleFields($module_id){

    	$result=DB::table('module_selected_column')
    	->select('module_selected_column.id','module_selected_column.module_id','module_selected_column.column_id','module_selected_column.type','module_selected_column.col_name','modules.modules_name')
    	->where('module_selected_column.module_id',$module_id)
    	->where(function ($query){
            $query->where('module_selected_column.company_id',session()->get('company_id'))
                    ->orWhere('module_selected_column.company_id','0');
        })
    	->join('modules','modules.module_id','=','module_selected_column.module_id')


    	->get();
    	if($result){
     		  return $result;
		   }else{
		       return false;
		   }
    }

    public function GetAllFields(){
    	$result=DB::table('module_columns')
    	->select('column_id','col_name','label','type','company_id')
    	->where('company_id','0')
    	->orWhere('company_id',session()->get('company_id'))
    	->get();
    	if($result){
     		  return $result;
		   }else{
		       return false;
		   }
    }
    public function AddModFields($req){
    	$moduleid=$req->module;
// dd($req->all());
    	$result=DB::table('module_selected_column')
    				->where('module_id',$moduleid)
    				->where('company_id',session()->get('company_id'))
    				->delete();
        if(isset($req->column_id)){
    	for ($i=0; $i <count($req->column_id) ; $i++) {
    		$data[]=array(
    			'module_id'=>$moduleid,
    			'company_id'=>session()->get('company_id'),
    			'column_id'=>$req->column_id[$i],
    			'type'=>$req->type[$i],
    			'col_name'=>$req->col_name[$i],

    		);

    	}
    	// dd($data);
    	$AddModFields=DB::table('module_selected_column')->insert($data);
    	if($AddModFields){
     		  return true;
		   }else{
		       return false;
		   }
        }else{
            return false;
        }

    }

    public function GetOptionField(){
        $result=DB::table('fields_option')
                ->where('company_id',session()->get('company_id'))
                ->Orwhere('column_id','0')
                ->get();
                return $result;
    }


    public function SaveLeads($req){


    	$module_id=$req->module_id;
    	$data_id=uniqid();
  		  for ($i=0; $i <count($req->column_id) ; $i++) {
    		$data[]=array(
    		'module_id'=>$module_id,
    		'column_id'=>$req->column_id[$i],
    		'value'=>$req->value[$i],
    		'user_id'=>session()->get('id'),
    		'data_id'=>$data_id,
    	);

	    }
	    $result=DB::table('module_data')->insert($data);

	    if($result){
	     		  return true;
			   }else{
			       return false;
			   }

	  }

	  public function GetLeadsData(){

         $chiled_parent= $this->Usersetting->ChildNameByparentId();
          if($chiled_parent!=false ){

              foreach ($chiled_parent as $key => $chiledid) {
             $chilesId[]=$chiledid->id;

         }
              $chilesIds=implode(",",  $chilesId);
          }else{
            $chilesIds=Null;
          }
// dd($chiled_parent  );
	  	$user_id=session()->get('id');
	  	$module_id='8';

	  	$que="call getModulesData2('".$chilesIds."',8)";
	  	$leads_data=DB::select($que);



	  	 if($leads_data){
	     		  return $leads_data;
			   }else{
			       return false;
			   }

	  }

      public function GetAccountData($module_id){
        $chiled_parent= $this->Usersetting->ChildNameByparentId();
          if($chiled_parent!=false ){

              foreach ($chiled_parent as $key => $chiledid) {
             $chilesId[]=$chiledid->id;

         }
              $chilesIds=implode(",",  $chilesId);
          }else{
            $chilesIds=Null;
          }
// dd($chiled_parent  );
        $user_id=session()->get('id');


        $que="call getModulesData2('".$chilesIds."',$module_id)";
        $data=DB::select($que);


        // dd($data  );
         if($data){
                  return $data;
               }else{
                   return false;
               }

      }
      public function GetDealData($module_id){

         $chiled_parent= $this->Usersetting->ChildNameByparentId();
          if($chiled_parent!=false ){

              foreach ($chiled_parent as $key => $chiledid) {
             $chilesId[]=$chiledid->id;

         }
              $chilesIds=implode(",",  $chilesId);
          }else{
            $chilesIds=Null;
          }
// dd($chiled_parent  );
        $user_id=session()->get('id');

        $que="call getModulesData2('".$chilesIds."',$module_id)";
        $data=DB::select($que);




         if($data){
                  return $data;
               }else{
                   return false;
               }

      }
	  public function  GetEditData($id){
        // DB::enableQueryLog();
	  	$getdata=DB::table('module_data')
	  			->select('module_data.*','module_columns.col_name','module_columns.type','users.full_name as user')
	  			->where('module_data.data_id',$id)
                ->join('users','users.id','=','module_data.user_id')
	  			->join('module_columns','module_columns.column_id','=','module_data.column_id')

	  			->get();
                // dd(DB::getQueryLog());
	  	if($getdata){
	     		  return $getdata;
			   }else{
			       return false;
			   }
	  }

	  public function UpdateLead($req){
   DB::enableQueryLog();
	  	$data_id=$req->data_id;
	  	// dd($req->all());
	  	for ($i=0; $i <count($req->column_id) ; $i++) {


	  		$result[]=DB::table('module_data')
	  				// ->where('data_id',$data_id)
	  				// ->where('column_id',$req->column_id[$i])
	  				->updateOrInsert(['data_id'=>$data_id,'column_id'=>$req->column_id[$i]],['value'=>$req->value[$i],'module_id'=>$req->module_id ,'user_id'=>$req->user_id]);
	  	}
         dd(DB::getQueryLog());
	  	// echo "<pre>";
	  	// print_r($data);
	  		die();
	  	if($result){
	  		return true;
		  }else{
		  	return false;
		  }
	}

	public function DeleteLead($id){

		$result=DB::table('module_data')->where('data_id',$id)->update(['status'=>'0']);
		if($result){
	  		return true;
		  }else{
		  	return false;
		  }

	}
    //account
    public function SaveData($req){


        $module_id=$req->module_id;
        $data_id=uniqid();
          for ($i=0; $i <count($req->column_id) ; $i++) {
            $data[]=array(
            'module_id'=>$module_id,
            'column_id'=>$req->column_id[$i],
            'value'=>$req->value[$i],
            'user_id'=>session()->get('id'),
            'data_id'=>$data_id,
        );

        }
        $result=DB::table('module_data')->insert($data);

        if($result){
                  return true;
               }else{
                   return false;
               }

      }
      //pipeline
      public function GetPipeline(){
        $result=DB::table('pipeline_group')
        ->where('company_id',session()->get('company_id'))
        ->get();
        if($result){
                  return $result;
               }else{
                   return false;
               }

      }
       public function PipelineStages($pipeline_group_id){
        $result=DB::table('users_pipeline_stages')
        ->select('users_pipeline_stages.id','users_pipeline_stages.stage_name','users_pipeline_stages.stage_colour')
        ->join('pipeline_group','pipeline_group.id','=','users_pipeline_stages.pipeline_group_id')
        ->where('users_pipeline_stages.pipeline_group_id',$pipeline_group_id)
        ->where('users_pipeline_stages.status','1')
        ->get()->toArray();
        // dd($result);
        if(count($result) == 0){
                $result1=DB::table('pipeline_stages')
                ->where('status','1')
                ->get()->toArray();
                  return $result1;
        }else{
            return $result;
         }

      }
// save task
    public function SaveTask($req){
        $req['sender_id']=session()->get('id');

       unset($req['_token']);
       // dd($req->all());
        $result=DB::table('tasks')->insert($req->all());
        if($result){
            return true;
          }else{
            return false;
          }

    }

    // get task by data id
     public function GetTasks($id){




        $result = DB::table('tasks')
            ->select('tasks.*', 'u1.username as sender_user', 'u2.username as  reciever_user')
            ->join('users as u1', 'u1.id', '=', 'tasks.sender_id')
            ->leftJoin('users as u2', 'u2.id', '=', 'tasks.reciever_id')
            ->where('related_to',$id)
            ->where(function ($query){
                $query->where('tasks.sender_id', session()->get('id'))
                 ->Orwhere('tasks.reciever_id', session()->get('id'));
        })->paginate('5');

        if($result){
            return $result;
          }else{
            return false;
          }

    }

    //export

    public function csv_export_data()
    {
        $quary = DB::table('module_selected_column')
        ->where('module_id', 8)
        ->where( 'company_id', 0)
        ->orWhere('company_id',session()->get('company_id'))
        ->get();
        // dd($quary);
        $data = json_decode(json_encode($quary), True);
        $i=0;
        foreach($quary as $key => $val){
            // $data_array[ $val->col_name]=$val->col_name;
            $data_array[]=array(
                'col_name'=>$val->col_name.'_'.$val->col_name,
            );
            $i++;
        }
        $dat1=$data_array;
        // dd($dat1);
        function cleanData(&$str)
        {
            if ($str == 't') $str = 'TRUE';
            if ($str == 'f') $str = 'FALSE';
            if (preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str) || preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$str)) {
                $str = " $str";
            }
            if (strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
        }

        // filename for download
        $filename = "example" . date('Ymd') . ".csv";

        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Content-Type: text/csv");

        $out = fopen("php://output", 'w');

        $flag = false;
        foreach ($dat1 as $row) {
            if (!$flag) {
                // display field/column names as first row
                fputcsv($out, array_keys($row), ',', '"');
                $flag = true;
            }
            array_walk($row, __NAMESPACE__ . '\cleanData');
            fputcsv($out, array_values($row), ',', '"');
        }

        fclose($out);
    }


    public function LeadFilter($req){

        $chiled_parent= $this->Usersetting->ChildNameByparentId();
                  if($chiled_parent!=false ){
                    $chilesId[]=session()->get('id');
                      foreach ($chiled_parent as $key => $chiledid) {
                     $chilesId[]=$chiledid->id;

                 }
                      $chilesIds=implode(",",  $chilesId);
                  }else{
                    $chilesIds=Null;
                  }
          $mod_id=$req->module_id;
              DB::statement("SET SQL_MODE=''");
        // DB::enableQueryLog();

        $query=DB::table('module_data')
                ->select('module_data.*','module_selected_column.col_name','users.full_name as users')
                ->where('module_data.module_id',$req->module_id)
                // ->Orwhere('module_data.user_id',session()->get('id'))

                ->join('module_selected_column','module_data.column_id','=','module_selected_column.column_id')
                ->join('users','users.id','=','module_data.user_id')
                ->groupBy('module_data.data_id','module_data.column_id');

             // $que="call getModulesData(".session()->get('id').",".$req->module_id.")";
             //     $leads_data=DB::select($que);
                // print_r( $leads_data);
                 $search=[];
                 $result=[];
    if (!empty($req->ftaticfilter) || $req->ftaticfilter !=""){

        if($req->activitiesopt==1){
            $query->Join('tasks','module_data.data_id','=','tasks.related_to');
             $query->Join('meetings','module_data.data_id','=','meetings.related_to');
            $query->Orwhere('tasks.status','2');
             $query->Orwhere('meetings.status','1');

        }
        elseif($req->activitiesopt==2){

            if($req->activitiesopt2==1){
            $query->Join('tasks','module_data.data_id','=','tasks.related_to');
             $query->Join('meetings','module_data.data_id','=','meetings.related_to');
             $query->where('tasks.due_date', '<', now());
              $query->Orwhere('meetings.end_date', '<', now());
            }

            elseif($req->activitiesopt2==2){
            $query->Join('tasks','module_data.data_id','=','tasks.related_to');

             $query->whereDate('tasks.due_date', '<', now());
            }
            elseif($req->activitiesopt2==3){
                $query->leftJoin('meetings','module_data.data_id','=','meetings.related_to');

             $query->whereDate('meetings.end_date', '<', now());
            }

          }
        elseif($req->activitiesopt==3){
            if($req->activitesdue==1){
                 $query->Join('tasks','module_data.data_id','=','tasks.related_to');
                 $query->Join('meetings','module_data.data_id','=','meetings.related_to');
                 $query->where('tasks.due_date', '=', date('Y-m-d'));
                 $query->Orwhere('meetings.end_date', '=', date('Y-m-d'));

            }
             elseif($req->activitesdue==2){
                 $query->Join('tasks','module_data.data_id','=','tasks.related_to');
                 $query->Join('meetings','module_data.data_id','=','meetings.related_to');
                 $query->where('tasks.due_date', '=', date("Y-m-d", strtotime("+1 day")));
                 $query->Orwhere('meetings.end_date', '=', date("Y-m-d", strtotime("+1 day")));

            }
            elseif($req->activitesdue==3){
                 $query->Join('tasks','module_data.data_id','=','tasks.related_to');
                 $query->Join('meetings','module_data.data_id','=','meetings.related_to');
                 $query->whereBetween('tasks.due_date', [ date('Y-m-d'),date("Y-m-d", strtotime("+7 day"))]);
                 $query->orwhereBetween('meetings.end_date',[ date('Y-m-d'),date("Y-m-d", strtotime("+7 day"))]);

            }

         }
         elseif($req->activitiesopt==4){
            if($req->withoutactivites==1){
                $query->Join('tasks','module_data.data_id','=','tasks.related_to','left outer');
                 $query->Join('meetings','module_data.data_id','=','meetings.related_to','left outer');
                 $query->where('tasks.related_to',null);
                  $query->Orwhere('meetings.related_to',null);
                $query->where('tasks.due_date', '!=', date('Y-m-d'));
                 $query->Orwhere('meetings.end_date', '!=', date('Y-m-d'));

            }if($req->withoutactivites==2){
                $query->Join('tasks','module_data.data_id','!=','tasks.related_to');
                 $query->Join('meetings','module_data.data_id','!=','meetings.related_to' );
                 // $query->where('tasks.related_to',null);
                 //  $query->Orwhere('meetings.related_to',null);
               $query->whereNotBetween('tasks.due_date', [ date('Y-m-d'),date("Y-m-d", strtotime("+7 day"))]);
                $query->whereNotBetween('meetings.end_date', [ date('Y-m-d'),date("Y-m-d", strtotime("+7 day"))]);


            }
         }

         // User wise filter
         if($req->userfilter=='is'){
            $query->whereIn('module_data.user_id',$req->usersid);

         }else{
            $query->whereIn('module_data.user_id',$chilesId);
         }
/////
         if($req->pinsearch=='is'){
           $pin_search=$req->pin_search;
            $query->whereIn('module_data.data_id',function($subq) use( $pin_search){
                            $subq->select('data_id')
                                    ->from('module_data')
                                    ->where('column_id','13')
                                    ->where('value',$pin_search);
                        });
         }elseif($req->pinsearch=='isnot'){
           $pin_search=$req->pin_search;
            $query->whereIn('module_data.data_id',function($subq) use($pin_search,$mod_id) {
                            $subq->select('data_id')
                                    ->from('module_data')
                                    ->where('module_id',$mod_id)
                                    ->where('column_id','13')
                                    ->where('value','<>' ,$pin_search);

                        });
         }
         elseif($req->pinsearch=='contain'){
           $pin_search=$req->pin_search;
            $query->whereIn('module_data.data_id',function($subq) use($pin_search,$mod_id) {
                            $subq->select('data_id')
                                    ->from('module_data')
                                    ->where('module_id',$mod_id)
                                    ->where('column_id','13')
                                    ->where('value' ,'LIKE','%'.$pin_search.'%');

                        });
         }
         ////// company search

         if($req->citysearch=='is'){
           $city_search=$req->city_search;
            $query->whereIn('module_data.data_id',function($subq) use( $city_search,$mod_id){
                            $subq->select('data_id')
                                    ->from('module_data')
                                    ->where('module_id',$mod_id)
                                    ->where('column_id','11')
                                    ->where('value',$city_search);
                        });
         }elseif($req->citysearch=='isnot'){
           $city_search=$req->city_search;
            $query->whereIn('module_data.data_id',function($subq) use($city_search,$mod_id) {
                            $subq->select('data_id')
                                    ->from('module_data')
                                    ->where('module_id',$mod_id)
                                    ->where('column_id','11')
                                    ->where('value','<>' ,$city_search);

                        });
         }
         elseif($req->citysearch=='contain'){
           $city_search=$req->city_search;
            $query->whereIn('module_data.data_id',function($subq) use($city_search,$mod_id) {
                            $subq->select('data_id')
                                    ->from('module_data')
                                    ->where('module_id',$mod_id)
                                    ->where('column_id','11')
                                    ->where('value' ,'LIKE','%'.$city_search.'%');

                        });
         }
         ///////
         //country search
         if($req->countrysearch=='is'){
           $country_search=$req->country_search;
            $query->whereIn('module_data.data_id',function($subq) use( $country_search,$mod_id){
                            $subq->select('data_id')
                                    ->from('module_data')
                                    ->where('module_id',$mod_id)
                                    ->where('column_id','12')
                                    ->where('value',$country_search);
                        });
         }elseif($req->countrysearch=='isnot'){
           $country_search=$req->country_search;
            $query->whereIn('module_data.data_id',function($subq) use($country_search,$mod_id) {
                            $subq->select('data_id')
                                    ->from('module_data')
                                    ->where('module_id',$mod_id)
                                    ->where('column_id','12')
                                    ->where('value','<>' ,$country_search);

                        });
         }
         elseif($req->countrysearch=='contain'){
           $country_search=$req->country_search;
            $query->whereIn('module_data.data_id',function($subq) use($country_search,$mod_id) {
                            $subq->select('data_id')
                                    ->from('module_data')
                                    ->where('module_id',$mod_id)
                                    ->where('column_id','12')
                                    ->where('value' ,'LIKE','%'.$country_search.'%');

                        });
         }
          //state search
          if($req->statesearch=='is'){
           $state_search=$req->state_search;
            $query->whereIn('module_data.data_id',function($subq) use( $state_search,$mod_id){
                            $subq->select('data_id')
                                    ->from('module_data')
                                    ->where('module_id',$mod_id)
                                    ->where('column_id','10')
                                    ->where('value',$state_search);
                        });
         }elseif($req->statesearch=='isnot'){
           $state_search=$req->state_search;
            $query->whereIn('module_data.data_id',function($subq) use($state_search,$mod_id) {
                            $subq->select('data_id')
                                    ->from('module_data')
                                    ->where('module_id',$mod_id)
                                    ->where('column_id','10')
                                    ->where('value','<>' ,$state_search);

                        });
         }
         elseif($req->statesearch=='contain'){
           $state_search=$req->state_search;
            $query->whereIn('module_data.data_id',function($subq) use($state_search,$mod_id) {
                            $subq->select('data_id')
                                    ->from('module_data')
                                    ->where('module_id',$mod_id)
                                    ->where('column_id','10')
                                    ->where('value' ,'LIKE','%'.$state_search.'%');

                        });
         }
         // date_range filter
        if($req->daterangeopt=='1'){

            $query->whereDate('module_data.created_at','=',date('Y-m-d'));
         }elseif($req->daterangeopt=='2'){

            $query->whereDate('module_data.created_at','=',date("Y-m-d", strtotime("-1 day")));
         }elseif ($req->daterangeopt=='3') {
             $previous_week = strtotime(" this week ");
             $start_week = strtotime("last sunday midnight",$previous_week);
             $end_week = strtotime("next saturday",$start_week);
             $start_week = date("Y-m-d",$start_week);
             $end_week = date("Y-m-d",$end_week);

             $query->whereBetween('module_data.created_at',[$start_week, $end_week]);

         }elseif ($req->daterangeopt=='4') {
             $previous_week = strtotime(" -1 week +1 day ");
             $start_week = strtotime("last sunday midnight",$previous_week);
             $end_week = strtotime("next saturday",$start_week);
             $start_week = date("Y-m-d",$start_week);
             $end_week = date("Y-m-d",$end_week);

             $query->whereBetween('module_data.created_at',[$start_week, $end_week]);

         }elseif ($req->daterangeopt=='5') {

             $query->whereMonth('module_data.created_at','=',date("m",strtotime(" this month")));

         }elseif ($req->daterangeopt=='6') {

             $query->whereMonth('module_data.created_at','=',date("m",strtotime(" -1 month")));

         }elseif ($req->daterangeopt=='7') {

           $query->whereDate('module_data.created_at', '>=', $req->startdate)
            ->whereDate('module_data.created_at', '<=', $req->enddate);

         }

         //

    }else{
         $query->whereIn('module_data.user_id',$chilesId);

    }
        $result=$query->get()->toArray();
         $que=$query->toSql();
         $builder=$query->getBindings();
          $query1 = str_replace(array('?'), array('\'%s\''), $que);
        $filter_query = vsprintf($query1, $builder);

         // print_r($view_query);
        if(isset($req->filtersave)){
             $store_filter_que=DB::table('user_filters')->insert(['user_id'=>session()->get('id'),'module_id'=>$mod_id,'filter_query'=>$filter_query,'filter_name'=>$req->filtersave]);
        }

        $result1=collect($result)->where('module_id',$req->module_id)->groupBy('data_id');
        // echo (count($result1));
        // print_r($result1);
        $opt=[];
        foreach ($result1 as $key => $value) {
                $data1=[];
            foreach ($value as $key2 => $value2) {
                    $data1['data_id']=$value2->data_id;
                     $data1['module_id']=$value2->module_id;
                    $data1['user_id']=$value2->user_id;
                    $data1['user']=$value2->users;
                    $data1['created_at']=$value2->created_at;
                     $data1[$value2->col_name]=$value2->value;

                }

            $opt[]= $data1;
        }
     
      // $fresult=array_merge($opt,$search);

     return $opt;


    }
    public function GetTableCol($module_id){
        $result=DB::table('module_table_col')
                ->select('module_table_col.column_id','module_columns.col_name')
                ->where('module_table_col.user_id',session()->get('id'))
                ->where('module_table_col.module_id',$module_id)

                ->join('module_columns','module_columns.column_id','=','module_table_col.column_id')
                ->orderBy('module_table_col.id')
                ->get()->toArray();
                 if($result){
                          return $result;
                       }else{
                           return false;
                       }

    }

    public function SaveManageCol($req){
          // dd($req->all());

        $module_id=$req->module_id;
             $resdel=DB::table('module_table_col')
                    ->where('module_id',$module_id)
                    ->where('user_id',session()->get('id'))
                    ->delete();

                  for ($i=0; $i <count($req->column_id) ; $i++) {
                    $data[]=array(
                    'module_id'=>$module_id,
                    'column_id'=>$req->column_id[$i],
                    'user_id'=>session()->get('id'),
                );

                }
                // dd($data);
                $result=DB::table('module_table_col')->insert($data);
                 if($result){
                          return true;
                       }else{
                           return false;
                       }

    }

    public function ViewData($id,$module_id){

        $chiled_parent= $this->Usersetting->ChildNameByparentId();
          if($chiled_parent!=false ){
            // $chilesId[]=session()->get('id');
              foreach ($chiled_parent as $key => $chiledid) {
             $chilesId[]=$chiledid->id;

         }
              $chilesIds=implode(",",  $chilesId);
          }else{
            $chilesIds=Null;
          }

              DB::statement("SET SQL_MODE=''");
        // DB::enableQueryLog();

        $query=DB::table('module_data')
                ->select('module_data.*','module_selected_column.col_name','users.full_name as users')
                ->where('module_data.module_id',$module_id)
                // ->Orwhere('module_data.user_id',session()->get('id'))

                ->join('module_selected_column','module_data.column_id','=','module_selected_column.column_id')
                ->join('users','users.id','=','module_data.user_id')
                ->groupBy('module_data.data_id','module_data.column_id');


                 $search=[];

                 if (!empty($id) || $id !="" ){

                     // User wise filter
                     if($id=='all_leads'){
                        $query->whereIn('module_data.user_id',$chilesId);

                     }elseif($id=='my_leads'){
                        $query->where('module_data.user_id',session()->get('id'));
                     }elseif($id=='today'){
                        $query->whereDate('module_data.created_at','=',date('Y-m-d'));
                        $query->whereIn('module_data.user_id',$chilesId);
                     }elseif($id=='last_week'){

                        $query->whereIn('module_data.data_id',function($subq){
                            $subq->select('data_id')
                                    ->from('module_data')
                                    ->where('column_id','1')
                                    ->where('value','email@gmail.com');
                        });
                     }else{
                        $query->whereIn('module_data.user_id',$chilesId);
                     }

                }else{



                }
        // print_r(DB::getQueryLog());
                 // print_r($chilesId);
         $que=$query->toSql();
         $builder=$query->getBindings();
            $result=$query->get()->toArray();
            $query1 = str_replace(array('?'), array('\'%s\''), $que);
            $view_query = vsprintf($query1, $builder);

        $store_view_que=DB::table('user_table_view')->updateOrInsert(['user_id'=>session()->get('id'),'module_id'=>$module_id],['view_query'=>$view_query,'filter_name'=>$id]);

        $result1=collect($result)->where('module_id',$module_id)->groupBy('data_id');
        // echo ($view_query);
        // dd($result1);
        $opt=[];
        foreach ($result1 as $key => $value) {
            $data1=[];
            foreach ($value as $key2 => $value2) {
                    $data1['data_id']=$value2->data_id;
                    $data1['module_id']=$value2->module_id;
                    $data1['user_id']=$value2->user_id;
                    $data1['user']=$value2->users;
                    $data1['created_at']=$value2->created_at;
                    $data1['modified_at']=$value2->modified_date;
                     $data1[$value2->col_name]=$value2->value;
                      
                }
 
            $opt[]= $data1;

        }
<<<<<<< HEAD

=======
        // echo "<pre>";
        //              print_r($opt);
        // dd($opt);
>>>>>>> 19edaffcf5d0b38b6cd6e929ce72359da1b80ca3
      $fresult=$opt;
   // dd($fresult);
     return $fresult;


    }
    public function GetViewfilterId($id){
        $user_id=session()->get('id');
        $result=DB::table('user_table_view')->select('filter_name')->where('user_id',$user_id)->where('module_id',$id)->first();

        return $result;
    }

<<<<<<< HEAD

=======
    public function GetUserfilterId($id){

        $filter_data=DB::table('user_filters')->select('filter_query','module_id')->where('id',$id)->get()->toArray();
        return $filter_data;
    }
>>>>>>> 19edaffcf5d0b38b6cd6e929ce72359da1b80ca3



}
