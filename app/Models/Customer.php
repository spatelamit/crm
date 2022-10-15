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
    	->select('id','module_id','column_id','type','col_name')
    	->where('module_id')
    	->where('company_id',session()->get('company_id'))
    	->orWhere('company_id','0')
    	->get();
    	if($result){
     		  return $result;
		   }else{
		       return false;
		   }
    }
}
