<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usersetting;
use App\Models\Customer;

use DB;

class CustomerController extends Controller

{   
    public function __construct() {
        $this->Usersetting=new Usersetting();
        $this->Customer=new Customer();
    }

    public function leads(){
        $module_id='8';
        $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
    
        return view('customers.leads',compact('data'));
    }
      public function add_leads(){
      
       $module_id='8';
        $data['selected_fields']=$this->Customer->GetModuleFields($module_id);
    
        return view('customers.add-leads',compact('data'));
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
