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
          $data['edit_lead_data']=$this->Customer->GetEditData($id);
          // dd( $data['edit_lead_data']);
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
    public function deals()
    {
        return view('deals');
    }

    public function meetings()
    {
        return view('meetings');
    }

    public function tasks()
    {
        return view('tasks');
    }

    public function teams()
    {
        return view('teams');
    }

}
