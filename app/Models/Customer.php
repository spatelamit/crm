<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Customer extends Model
{
    use HasFactory;

    public function GetModuleFields($module_id){

    	$result=DB::table('module_selected_column')
    	->select('module_selected_column.id','module_selected_column.module_id','module_selected_column.column_id','module_selected_column.type','module_selected_column.col_name','modules.modules_name')
    	->where('module_selected_column.module_id',$module_id)
    	->where('module_selected_column.company_id',session()->get('company_id'))
    	->orWhere('module_selected_column.company_id','0')
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

    	$result=DB::table('module_selected_column')
    				->where('module_id',$moduleid)
    				->where('company_id',session()->get('company_id'))
    				->delete();
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
	  	$user_id=session()->get('id');
	  	$module_id='8';
	  	$que="call getModulesData(".$user_id.",8,10)";
	  	$leads_data=DB::select($que);


        // dd($leads_data  );
	  	 if($leads_data){
	     		  return $leads_data;
			   }else{
			       return false;
			   }

	  }
	  public function GetEditData($id){

	  	$getdata=DB::table('module_data')
	  			->select('module_data.*','module_columns.col_name','module_columns.type')
	  			->where('module_data.data_id',$id)
	  			->join('module_columns','module_columns.column_id','=','module_data.column_id')
	  			->get();
	  	if($getdata){
	     		  return $getdata;
			   }else{
			       return false;
			   }
	  }

	  public function UpdateLead($req){

	  	$data_id=$req->data_id;
	  	// dd($req->all());
	  	for ($i=0; $i <count($req->column_id) ; $i++) {
	  		$data=array(
	  			'value'=>$req->value[$i],

	  		);


	  		$result[]=DB::table('module_data')
	  				->where('data_id',$data_id)
	  				->where('column_id',$req->column_id[$i])
	  				->update($data);
	  	}
	  	// echo "<pre>";
	  	// print_r($data);
	  	// 	die();
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
      
        
      $result=DB::table('tasks')
            ->where('related_to',$id)
            ->where('sender_id',session()->get('id'))
            ->get();
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
                'col_name'=>$val->col_name,
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
          // DB::statement("SET SQL_MODE=''");
        // DB::enableQueryLog();
        $query=DB::table('module_data')
                ->select('module_data.*')
                ->where('module_data.module_id','8')
                ->where('module_data.user_id',session()->get('id'));
                // ->groupBy('data_id');
                 $query->where('value',$req->comapny_Nsearch);
             $que="call getModulesData(".session()->get('id').",8,10)";
                 $leads_data=DB::select($que);
     if (!empty($req->ftaticfilter) || $req->ftaticfilter !=""){
        if($req->activitiesopt==1){
            $query->leftJoin('tasks','module_data.data_id','=','tasks.related_to');
            $query->where('tasks.status','2');

        }
        elseif($req->activitiesopt==2){

            if($req->activitiesopt2==1){
            $query->leftJoin('tasks','module_data.data_id','=','tasks.related_to');
             $query->leftJoin('meetings','module_data.data_id','=','meetings.related_to');
             $query->where('tasks.due_date', '<', now());
              $query->Orwhere('meetings.end_date', '<', now());
            }

            elseif($req->activitiesopt2==2){
            $query->leftJoin('tasks','module_data.data_id','=','tasks.related_to');
         
             $query->whereDate('tasks.due_date', '<', now());
            }
            elseif($req->activitiesopt2==3){
                $query->leftJoin('meetings','module_data.data_id','=','meetings.related_to');
            
             $query->whereDate('meetings.end_date', '<', now());
            }

          }
        elseif($req->activitiesopt==3){
            if($req->activitesdue==1){
                 $query->leftJoin('tasks','module_data.data_id','=','tasks.related_to');
                 $query->leftJoin('meetings','module_data.data_id','=','meetings.related_to');
                 $query->where('tasks.due_date', '=', date('Y-m-d'));
                 $query->Orwhere('meetings.end_date', '=', date('Y-m-d'));

            }
             elseif($req->activitesdue==2){
                 $query->leftJoin('tasks','module_data.data_id','=','tasks.related_to');
                 $query->leftJoin('meetings','module_data.data_id','=','meetings.related_to');
                 $query->where('tasks.due_date', '=', date("Y-m-d", strtotime("+1 day")));
                 $query->Orwhere('meetings.end_date', '=', date("Y-m-d", strtotime("+1 day")));

            }
            elseif($req->activitesdue==3){
                 $query->leftJoin('tasks','module_data.data_id','=','tasks.related_to');
                 $query->leftJoin('meetings','module_data.data_id','=','meetings.related_to');
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
                $query->leftJoin('tasks','module_data.data_id','!=','tasks.related_to');
                 $query->leftJoin('meetings','module_data.data_id','!=','meetings.related_to' );
                 // $query->where('tasks.related_to',null);
                 //  $query->Orwhere('meetings.related_to',null);
               $query->whereNotBetween('tasks.due_date', [ date('Y-m-d'),date("Y-m-d", strtotime("+7 day"))]);
                $query->whereNotBetween('meetings.end_date', [ date('Y-m-d'),date("Y-m-d", strtotime("+7 day"))]);
                

            }
         }

         if ($req->companysearch=='is') {
            // $query->where('column_id','15');
             
                 $search=collect($leads_data)->where('company_name', $req->comapny_Nsearch);
                 dd($search);

             // $query->groupBy('data_id');
         }
          elseif ($req->companysearch=='isnot') {
            // $query->where('column_id','15');
            
                 
                 $search=collect($leads_data)->where('company_name','<>', $req->comapny_Nsearch);
                 dd($search);

             // $query->groupBy('data_id');
         }
         elseif ($req->companysearch=='contain') {
            // $query->where('column_id','15');
            
                 $search=collect($leads_data)->where('company_name','LIKE', '%'.$req->comapny_Nsearch.'%');
                 dd($search);

             // $query->groupBy('data_id');
         }
    }
        $result=$query->get();


     


        dd($result);
        // dd(DB::getQueryLog($result));

    }



}
