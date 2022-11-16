<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSetting;
use App\Models\Customer;

use DB;

class CustomerController extends Controller

{
    public function __construct() {

        $this->Customer=new Customer();
          $this->Usersetting=new UserSetting();
       
    }

    public function leads(){
        $module_id='8';
         $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
          $data['selected_col']=$this->Customer->GetTableCol($module_id);
        $data['leads_datas']=$this->Customer->GetLeadsData();

        if( $data['leads_datas']){
            foreach ($data['leads_datas'] as $key => $value) {
                $data['leads_data'][]=(json_decode(json_encode( $value),true));

            }
            foreach (  $data['leads_data'][0] as $key => $value) {
              $data_k[]=$key;
            }
            $data_keys=implode(",",  $data_k);
        }else{
            $data['leads_data']=null;
              $data_keys=null;

        }

        
      //table view columns
          if($data['selected_col']!=false ){
          foreach ($data['selected_col'] as $key => $selected_col) {
          $field1[]=$selected_col->column_id;
          $field2[]=$selected_col->col_name;
         }
           $selcol=$field1;
           $selcolname=implode(",",  $field2);
           $selcol=implode(",",  $selcol);

        }else{
          $selcol= null;
           $selcolname=null;
        }

        //end table view columns
      //

      $chiled_parent= $this->Usersetting->ChildNameByparentId();
          if($chiled_parent!=false ){
              foreach ($chiled_parent as $key => $chiledid) {
             $chilesId[]=$chiledid->id;
           
         }
              $chilesIds=implode(",",  $chilesId);
          }else{
            $chilesIds=Null;
          }

       // dd($data['leads_data']); 
       // echo ( session()->get('id'));
      
       return view('customers.leads',compact('data','selcol','data_keys','selcolname','chiled_parent'));
    }

      public function add_leads(){

       $module_id='8';

        $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
    // dd($data['selected_fields'][0]->module_id);
        return view('customers.add-leads',compact('data'));
    }

    public function save_leads(Request $req){
        // dd($req->all());

         $result=$this->Customer->SaveLeads($req);
          if($result){
            return redirect('leads')->with("success", "Successfully Added Leads!")   ;

        }else{
            return redirect('leads')->with("error", 'Not Add leads');

        }

    }

    public function export_data(Request $request){

        $result = $this->Customer->csv_export_data($request);
        if($result){
            return true;
        }else{
            return false;
        }

    }

    public function module_layout($module_id){

         $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
         $data['all_fields']=$this->Customer->GetAllFields();
         $data['mid']=$module_id;
         // dd($data['selected_fields']);
         // print_r($data['selected_fields']);
         // die();
        return view('customers.module-layout',compact('data'));


    }

    public function add_mod_fields(Request $req){
        $result=$this->Customer->AddModFields($req);
       if($result){
            return redirect()->back()->with("success", "Successfully Updates Fileds!")   ;

        }else{
            return redirect()->back()->with("error", 'Not updated');

        }

    }

    public function edit_lead($id){
      $module_id=8;
          $data['edit_lead_data']=$this->Customer->GetEditData($id);
           $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
          // dd( $data);
          return view('customers.edit-lead',compact('data'));



    }

    public function update_lead(Request $req){
          $result=$this->Customer->UpdateLead($req);
       if($result){
            return redirect('leads')->with("success", "Successfully Updates Fileds!")   ;

        }else{
            return redirect('leads')->with("error", 'Not updated');

        }
    }

    public function delete_lead($id){
        $result=$this->Customer->DeleteLead($id);
        if($result){
            return redirect('leads')->with("success", "Successfully Delete Fileds!")   ;

        }else{
            return redirect('leads')->with("error", 'Not Delete');

        }

    }

    public function get_lead_by_id($id){
        $module_id='9';
          $data['lead_data']=$this->Customer->GetEditData($id);
           $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
           $data['pipeline']=$this->Customer->GetPipeline();

         return view('customers.deal-by-lead',compact('data'));

    }

     public function fetch_stages($id){

      $pipeline_group_id=$id;
       $data['PipelineGroup']=$this->Customer->PipelineStages($pipeline_group_id);
       // print_r($data['PipelineGroup']);
       // print_r($data['PipelineGroup']);

       foreach($data['PipelineGroup'] as $value){
        // print_r($value);
        echo "<option value=".$value->id." >"  .$value->stage_name."</option>";
       }

    }


    public function lead_profile($id){
          $data['lead_data']=$this->Customer->GetEditData($id);
          $data['sale_owner']=DB::table('users')->select('full_name')->where('id', $data['lead_data'][0]->user_id)->first();
          $data['tasks']=$this->Customer->GetTasks($id);
          // echo "<pre>";
          // print_r($data['tasks']);
          // die();
         return view('customers.lead_profile',compact('data'));

    }

     public function convert_lead($id){
          $data['lead_data']=$this->Customer->GetEditData($id);
          $data['sale_owner']=DB::table('users')->select('full_name')->where('id', $data['lead_data'][0]->user_id)->first();
            // echo "<pre>";
            // print_r($data['lead_data']);
            // die();
         return view('customers.convert-lead',compact('data'));

    }

    public function save_convert_lead(Request $req){
      // dd($req->data_id);
      $result=DB::table('module_data')->where('data_id',$req->data_id)->update(['module_id'=>'10']);
       if($result){
            return redirect('leads')->with("success", "Successfully Convert Lead !")   ;

        }else{
            return redirect('leads')->with("error", ' Convert Lead failed');

        }


    }

    //lead filter
    public function leads_filter(Request $req){
      // dd($req->all());
       $data['leads_data']=$this->Customer->LeadFilter($req);
        $data['selected_fields']=$this->Customer->GetModuleFields($req->module_id);
         $data['selected_col']=$this->Customer->GetTableCol($req->module_id);
      return view('customers.lead_filter',compact('data'));
    }

    //
    public function deals(){
             $module_id='9';
             $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
             $data['selected_col']=$this->Customer->GetTableCol($module_id);
             $data['deal_datas']=$this->Customer->GetDealData($module_id);

        if( $data['deal_datas']){
        foreach ($data['deal_datas'] as $key => $value) {
          $data['deal_data'][]=(json_decode(json_encode( $value),true));

            }
             foreach (  $data['deal_datas'][0] as $key => $value) {
              $data_k[]=$key;
            }
            $data_keys=implode(",",  $data_k);
        }else{
            $data['deal_data']=null;
            $data_keys=null;

        }
          
       if($data['selected_col']!=false ){
          foreach ($data['selected_col'] as $key => $selected_col) {
          $field1[]=$selected_col->column_id;
          $field2[]=$selected_col->col_name;
         }
           $selcol=$field1;
           $selcolname=implode(",",  $field2);
           $selcol=implode(",",  $selcol);

        }else{
          $selcol= null;
           $selcolname=null;
        }
        
         
        // dd($data['deal_data']);s
        return view('customers.deals',compact('data','selcol','data_keys','selcolname'));
    }

     public function save_deal(Request $req){
      // dd($req->all());
     $result=$this->Customer->SaveData($req);
            if($result){
              return redirect('deals')->with("success", "Successfully Added Deal!")   ;

             }else{
              return redirect('deals')->with("error", 'Not Add Deal');

             }
    }

     public function add_deal(){

           $module_id='9';

            $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
            $data['pipeline']=$this->Customer->GetPipeline();
            $data['accounts_datas']=$this->Customer->GetDealData('10');

            if( $data['accounts_datas']){
               foreach ($data['accounts_datas'] as $key => $value) {
               $data['accounts_data'][]=(json_decode(json_encode( $value),true));

             }
             foreach ($data['accounts_data'] as $key1 => $value1) {
                $data['company_names'][]=array(
                  'id'=>$value1['company_name'],
                  'text'=>$value1['company_name'],
                  'name'=>$value1['data_id'],
                );
             }
             }else{
                $data['accounts_data']=null;

              }


        // dd($data['company_names']);
            return view('customers.add-deal',compact('data'));
    }

    public function accounts(){
         $module_id='10';
         $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
          $data['selected_col']=$this->Customer->GetTableCol($module_id);
        $data['accounts_datas']=$this->Customer->GetAccountData($module_id);
         $chiled_parent= $this->Usersetting->ChildNameByparentId();
        if( $data['accounts_datas']){
        foreach ($data['accounts_datas'] as $key => $value) {
          $data['accounts_data'][]=(json_decode(json_encode( $value),true));

            }
              foreach ( $data['accounts_datas'][0] as $key => $value) {
              $data_k[]=$key;
            }
            $data_keys=implode(",",  $data_k);
        }else{
            $data['accounts_data']=null;
             $data_keys=null;
        }
        //table view columns
         if($data['selected_col']!=false ){
          foreach ($data['selected_col'] as $key => $selected_col) {
          $field1[]=$selected_col->column_id;
          $field2[]=$selected_col->col_name;
         }
           $selcol=$field1;
           $selcolname=implode(",",  $field2);
           $selcol=implode(",",  $selcol);

        }else{
          $selcol= null;
           $selcolname=null;
           $data['selected_col']=null;
        }

        //end table view columns
      
        // dd(  $data['chiledUsers']);
        return view('customers.accounts',compact('data','selcol','data_keys','selcolname','chiled_parent'));
    }


    public function add_account(){

           $module_id='10';

            $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
        // dd($data['selected_fields']);
            return view('customers.add-account',compact('data'));
    }

    public function save_account(Request $req){
        // dd($req->all());

           $result=$this->Customer->SaveData($req);
            if($result){
              return redirect('accounts')->with("success", "Successfully Added Account!")   ;

             }else{
              return redirect('accounts')->with("error", 'Not Add Account');

             }

    }



   
   
    public function save_task(Request $req) {
      $result= $this->Customer->SaveTask($req);
      if($result){
            return redirect('leads')->with("success", "Successfully Task created !")   ;

        }else{
            return redirect('leads')->with("error", ' Taske not created');

        }
    }

   
    public function save_managecol(Request $req){
    
        $result= $this->Customer->SaveManageCol($req);
        if($req->module_id=='8'){
          $red='leads';
        }elseif($req->module_id=='9'){
          $red='deals';
        }elseif($req->module_id=='10'){
          $red='accounts';
        }
        if($result){
            return redirect($red)->with("success", "Successfully Columns  Updated !")   ;

        }else{
            return redirect($red)->with("error", ' Columns not Updated');

        }
    }

    public function view_data($id,$module_id){
     
      $data['leads_data']=$this->Customer->ViewData($id,$module_id);
        $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
         $data['selected_col']=$this->Customer->GetTableCol($module_id);
        
      return view('customers.lead_filter',compact('data'));

    }

}
