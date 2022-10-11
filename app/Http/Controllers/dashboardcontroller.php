<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function deals(){

        // dd("pankaj");
        return view('deals');

    }

    public function mailer(){

        // dd("pankaj");
        return view('mailer');

    }

    public function crm_setting(){
        return view('crm_setting');
    }

}
