<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardController extends Controller
{




    public function deals(){

        // dd("pankaj");
        return view('deals');

    }

    public function mailer(){

        // dd("pankaj");
        return view('roles_setting.email_setting');

    }

    public function crm_setting(){
        return view('roles_setting.crm_setting');
    }

    public function roles_setting(){
        return view('roles_setting.roles_setting');
    }

    public function sms_setting(){
        return view('roles_setting.sms_setting');
    }

}
