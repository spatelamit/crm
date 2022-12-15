<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use Illuminate\Support\Collection;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\UserSetting;
use App\Models\Customer;
use App\Models\Activity;
use DB;

class CustomerController extends Controller

{
    public function __construct() {

        $this->Customer=new Customer();
          $this->Usersetting=new UserSetting();
        $this->Activity=new Activity();
    }

    public function paginate($items, $perPage = 8, $page = null, $options = []) {

        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);

    }

        
    public function leads(){
        $module_id='8';
        $user_id=session()->get('id');
         $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
          $data['selected_col']=$this->Customer->GetTableCol($module_id);
        $data['leads_datas']=$this->Customer->GetLeadsData();
         $data['field_option']=$this->Customer->GetOptionField();
         // dd( $data['field_option']);
        $view_filter=$this->Customer->GetViewfilterId($module_id);
         $data['filter_name']='';
        if($view_filter){
           $data['leads_data']=$this->Customer->ViewData($view_filter->filter_name,$module_id);
            
           $data['filter_name']=$view_filter->filter_name;
          
        }else{
              if( $data['leads_datas']){
                foreach ($data['leads_datas'] as $key => $value) {
                    $data['leads_data'][]=(json_decode(json_encode( $value),true));

                }
               
              }else{
                $data['leads_data']=null;
                 

             }
            // dd($data['leads_data']);
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
     

        $chiled_parent= $this->Usersetting->ChildNameByparentId();
         $data['user_filters']=$this->Customer->get_user_filter($user_id,$module_id);
        

      
       
       return view('customers.leads',compact('data','selcol','selcolname','chiled_parent'));
    }

      public function add_leads(){

       $module_id='8';
         $data['field_option']=$this->Customer->GetOptionField();
        $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
    // dd($data['selected_fields'][0]->module_id);
        return view('customers.add-leads',compact('data'));
    }


    public function save_leads(Request $req){
        // dd($req->all());

         $result=$this->Customer->SaveLeads($req);
          if($result){
              if($req->module_id=='8'){
                return redirect('leads')->with("success", "Successfully Added Leads!") ;
              }elseif($req->module_id=='9'){
                return redirect('deals')->with("success", "Successfully Added Deals!") ;
              }elseif($req->module_id=='10'){
                return redirect('accounts')->with("success", "Successfully Added Accounts!") ;

              }

        }else{
          if($req->module_id=='8'){
                return redirect('leads')->with("error", "Not Added Leads!") ;
              }elseif($req->module_id=='9'){
                return redirect('deals')->with("error", "Not Added Deals!") ;
              }elseif($req->module_id=='10'){
                return redirect('accounts')->with("error", "Not Added Accounts!") ;

              }
            

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

    public function edit_lead($id,$module_id){
      // $module_id=8;
       $data['pipeline']=$this->Customer->GetPipeline();
          $data['edit_lead_data']=$this->Customer->GetEditData($id);
           $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
            $data['field_option']=$this->Customer->GetOptionField();


         



           foreach ($data['edit_lead_data'] as $key => $edit_col) {
               $field1[]=$edit_col->column_id;

               }
               $selfield=$field1;
               $selfield1=implode(",",  $selfield);
               
             
          // dd( $data['edit_lead_data']);
          return view('customers.edit-lead',compact('data','selfield1'));



    }

    public function update_lead(Request $req){
      // dd($req->all());
          $result=$this->Customer->UpdateLead($req);
        if($result){
              if($req->module_id=='8'){
                return redirect('leads')->with("success", "Successfully Updated Leads!") ;
              }elseif($req->module_id=='9'){
                return redirect('deals')->with("success", "Successfully Updated Deals!") ;
              }elseif($req->module_id=='10'){
                return redirect('accounts')->with("success", "Successfully Updated Accounts!") ;

              }

        }else{
          if($req->module_id=='8'){
                return redirect('leads')->with("error", "Not Updated Leads!") ;
              }elseif($req->module_id=='9'){
                return redirect('deals')->with("error", "Not Updated Deals!") ;
              }elseif($req->module_id=='10'){
                return redirect('accounts')->with("error", "Not Updated Accounts!") ;

              }
            

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


    public function single_profile($data_id,$module_id){
          $data['lead_data']=$this->Customer->GetEditData($data_id);
         
          $data['tasks']=$this->Customer->GetTasks($data_id);
          $data['notes']= $this->Activity->GetNotes($module_id,$data_id);
          if($module_id=='10'){
                // $data['deal_data']=$this->Customer->DealDataById($data_id);
                 $data['deal_datas']=$this->Customer->GetDealData('9');
               
                  $Collection=collect($data['deal_datas'])->where('account_id',$data_id);
                  $data['deal_data']=$Collection->all();
                  $data['deal_sum']=$Collection->sum('amount');
                   $data['won_sum']=$Collection->where('won_lost_deal','won')->sum('amount');
                   $data['lost_sum']=$Collection->where('won_lost_deal','lost')->sum('amount');
                    // dd( $data['deal_sum']);
          }
          
         return view('customers.single_profile',compact('data','data_id','module_id'));

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
      $notes_update=DB::table('notes')
            ->where('related_to',$req->data_id)
            ->where('user_id',session()->get('id'))
            ->update(['module_id'=>'10']);
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
    public function deals_pipeline(){
             $module_id='9';
             $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
             $data['selected_col']=$this->Customer->GetTableCol($module_id);
             $data['deal_datas']=$this->Customer->GetDealData($module_id);
              $view_filter=$this->Customer->GetViewfilterId($module_id);
             $data['filter_name']='';
              if($view_filter){
                 $data['deal_data']=$this->Customer->ViewData($view_filter->filter_name,$module_id);
                 $data['filter_name']=$view_filter->filter_name;
                // dd( $data['leads_data']);
              }else{
                if( $data['deal_datas']){
                foreach ($data['deal_datas'] as $key => $value) {
                  $data['deal_data'][]=(json_decode(json_encode( $value),true));

                    }
                     
                }else{
                    $data['deal_data']=null;
                    $data_keys=null;

                }
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
        
         
        // dd($data['selected_col']);
        return view('customers.deals',compact('data','selcol','selcolname'));
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
             $data['field_option']=$this->Customer->GetOptionField();
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
                 $data['company_names']=[];
              }


        // dd($data['accounts_datas']);
            return view('customers.add-deal',compact('data'));
    }

    public function deals(){
      $module_id='9';
       $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
       $data['pipeline']=$this->Customer->GetPipeline();
         $data['field_option']=$this->Customer->GetOptionField();
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
                 $data['company_names']=[];
              }
       // dd( $data['pipeline']);
      return view('customers.deals-pipe',compact('data'));
    }


    public function deal_pipe_ajax($pid){
      $module_id='9';
       $data['PipelineGroup']=$this->Customer->PipelineStages($pid);
        $data['deal_datas']=$this->Customer->GetDealData($module_id);
      
        $arraypipe = array_column($data['PipelineGroup'],'id');
        
          $Collection=collect($data['deal_datas'])->whereIn('Pipepline',$arraypipe);
          $data['deal_data']=$Collection->all();
         // dd($data['deal_datas']);
          return view('customers.deals_pipe_ajax',compact('data'));
    }
    public function update_deal_stage($stageId,$dealId){
   
      $result=DB::table('module_data')
            ->where('data_id',$dealId)
            ->where('column_id','20')
            ->update(['value'=>$stageId]);

        if($result){
          return true;
        }else{
          return false;
        }
    }
    public function deal_won_lost($stageId,$dealId){
   
      $result=DB::table('module_data')
            ->updateOrInsert(['data_id'=>$dealId,'column_id'=>'29'],['value'=>$stageId,'module_id'=>'9' ,'user_id'=>session()->get('id')]);
           

        if($result){
          return true;
        }else{
          return false;
        }
    }

    public function accounts(){
         $module_id='10';
          $user_id=session()->get('id');
         $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
          $data['selected_col']=$this->Customer->GetTableCol($module_id);
        $data['sms_sender'] = $this->Customer->GetSender();
         $chiled_parent= $this->Usersetting->ChildNameByparentId();
          $data['field_option']=$this->Customer->GetOptionField();
        $view_filter=$this->Customer->GetViewfilterId($module_id);
         $data['filter_name']='';
        if($view_filter){
          $data['accounts_data']=$this->Customer->ViewData($view_filter->filter_name,$module_id);
           $data['filter_name']=$view_filter->filter_name;
          // dd( $data['leads_data']);
        }else{
            $data['accounts_datas']=$this->Customer->GetAccountData($module_id);
              if( $data['accounts_datas']){
              foreach ($data['accounts_datas'] as $key => $value) {
                $data['accounts_data'][]=(json_decode(json_encode( $value),true));

                  }
                    foreach ( $data['accounts_datas'][0] as $key => $value) {
                    $data_k[]=$key;
                  }
                  $data_keys=implode(",",  $data_k);
              }else{
                  $data['accounts_data']=[];
                   $data_keys=null;
              }
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
           $data['selected_col']=[];
        }

        $data['user_filters']=$this->Customer->get_user_filter($user_id,$module_id);
      
        // dd($data['accounts_data']  );
        return view('customers.accounts',compact('data','selcol','selcolname','chiled_parent'));
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
      // dd($req->all());
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
       
      // dd($data['leads_data']);
      return view('customers.lead_filter',compact('data'));

    }

     public function get_viewfilter_id($id){
     $view_filter=$this->Customer->GetViewfilterId($id);
     echo ($view_filter->filter_name);

    }

      public function get_filter_by_users($id){
         DB::statement("SET SQL_MODE=''");
        $query=$this->Customer->GetUserfilterId($id);
        $module_id=$query[0]->module_id;
        $filter_data=DB::select($query[0]->filter_query);
        $collection=collect($filter_data)->where('module_id',$module_id)->groupBy('data_id');
         $data['leads_data']=$this->col_row_convert($collection);
         $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
         $data['selected_col']=$this->Customer->GetTableCol($module_id);
        return view('customers.lead_filter',compact('data'));
     
      }

      public function col_row_convert($data){
       
        
        $result=[];
            foreach ($data as $key => $value) {
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

                $result[]= $data1;
            }
    
    
        return $result;

      }

       public function GetTemplate($sender_id){
         $user_id=session()->get('id');
        $data = DB::table('user_massage_dlt_details')->select('template','template_id')->where('sender_id', $sender_id)->where('user_id',$user_id)->get();


        $text = '<label for="template">Choose a Template</label>
                        <select name="template_id" id="template_ids" required>
                          <option value="" disabled selected>Select Sender</option>';

                  foreach ($data as $value) {
                    $text.= '
                    <option value="'.$value->template_id.'">'.$value->template.'</option>';
                  }
        $text = $text . '</select>';

        return $text;
                          
                        
      }
     public function get_edit_data($id,$module_id){
      // echo ($id.'-'.$module_id);
       $data['pipeline']=$this->Customer->GetPipeline();
          $data['edit_lead_data']=$this->Customer->GetEditData($id);
           $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
            $data['field_option']=$this->Customer->GetOptionField();
            foreach ($data['selected_fields'] as $key => $selected_field) {
                $sel_col_id[]=$selected_field->column_id;

                 }
                 $sel_col_ids=$sel_col_id;
                 $sel_col_ids=implode(",",  $sel_col_ids);


           foreach ($data['edit_lead_data'] as $key => $edit_col) {
               $field1[]=$edit_col->column_id;

               }
               $selfield=$field1;
               $selfield1=implode(",",  $selfield);
               
             
          // print_r(  $data['selected_fields']);
   return view('customers.edit-data',compact('data','selfield1','sel_col_ids'));



    }
}
