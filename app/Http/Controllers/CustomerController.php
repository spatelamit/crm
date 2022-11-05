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
    }

    public function leads(){
        $module_id='8';
         $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
        $data['leads_datas']=$this->Customer->GetLeadsData();

        if( $data['leads_datas']){
        foreach ($data['leads_datas'] as $key => $value) {
          $data['leads_data'][]=(json_decode(json_encode( $value),true));

            }
        }else{
            $data['leads_data']=null;

        }
         // dd($data['leads_data']);
       // dd( $data['leads_data']);
       return view('customers.leads',compact('data'));
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
           // print_r($data['selected_fields']);
         return view('customers.deal-by-lead',compact('data'));

    }

     public function fetch_stages($id){
      $pipeline_group_id=$id;
       $data['PipelineGroup']=$this->Customer->PipelineStages($pipeline_group_id);
       // print_r($data['PipelineGroup']);
       dd($data['PipelineGroup']);
       foreach($data['PipelineGroup'] as $value){
        echo "<option value=".$value['id']." >"  .$value['deal_stage_name']."</option>";
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
       $data['lead_data']=$this->Customer->LeadFilter($req);
      // dd($req->all());
    }

    //
    public function deals()
    {
        return view('deals');
    }
    public function accounts(){
         $module_id='10';
         $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
        $data['accounts_datas']=$this->Customer->GetModuleData($module_id);

        if( $data['accounts_datas']){
        foreach ($data['accounts_datas'] as $key => $value) {
          $data['accounts_data'][]=(json_decode(json_encode( $value),true));

            }
        }else{
            $data['accounts_data']=null;

        }
        // dd($data['accounts_data']);
        return view('customers.accounts',compact('data'));
    }
    public function add_account(){

       $module_id='10';

        $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
    // dd($data['selected_fields']);
        return view('customers.add-account',compact('data'));
    }
    public function save_account(Request $req){
        // dd($req->all());

         $result=$this->Customer->SaveAccount($req);
          if($result){
            return redirect('accounts')->with("success", "Successfully Added Account!")   ;

        }else{
            return redirect('accounts')->with("error", 'Not Add Account');

        }

    }

    public function meetings()
    {
        return view('meetings');
    }

    public function tasks()
    {
        return view('tasks');
    }
    public function save_task(Request $req) {
      $result= $this->Customer->SaveTask($req);
      if($result){
            return redirect('leads')->with("success", "Successfully Task created !")   ;

        }else{
            return redirect('leads')->with("error", ' Taske not created');

        }
    }

    public function teams()
    {
        return view('teams');
    }

}
