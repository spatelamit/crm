<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    public function login(){
        if(session()->has('IsLoggedIn')){
            return redirect('/dashboard');
        }
        return view('login');
    }

    public function loginAction(Request $request)
    {
        $req = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);
        if($req == true){
        $data = User::where('Username', $request->username)->where('Password', $request->password)->first();
        }
        if($data){
            $user_id = $data->Id;
            Session::put('IsLoggedIn', true);
            Session::put('Id', $user_id);
            Session::put('Name', $data->Fullname);
            Session::put('Username', $data->Username);
            if($data->IsAdmin == 'Y'){
                Session::put('IsAdmin', 'Y');
            }

            return redirect('/dashboard')->with("Success", "Successfully Login!");
        }
        if(!Session::has('IsLoggedIn')){

            return redirect("/")->with('Login details are not valid');
        }

    }

    public function logout() {
        \Auth::logout(); // logout user
        Session::flush();
        // Redirect::back();
        return redirect(\URL::previous());
        // return redirect('/');
    }



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
