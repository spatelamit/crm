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
}
