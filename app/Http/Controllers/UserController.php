<?php

namespace App\Http\Controllers;

use DB;
// use Database\Seeders\users;
use Illuminate\Http\Request;
use Validator;
use Session;

class UserController extends Controller
{

    public function __construct() {
        $this->middleware('UserAuthentication', ['except' => ['login','login_action'] ]);
    }
    public function home(){
        return view('homepage');
    }

    public function login(){
        echo session()->has('IsLoggedIn');

        if(session()->has('IsLoggedIn')==true){
            return redirect('/user_dashboard');
        }
        return view('login');
    }

    public function login_action(Request $request)
    {
        // dd($request);
        $req = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if($req == true){
        $data = DB::table('users')->where('username', $request->username)->orWhere('email',$request->username)->where('password', $request->password)->first();

        }

        if($data){
            $user_id = $data->id;
            Session::put('IsLoggedIn', true);
            Session::put('id', $user_id);
            Session::put('full_name', $data->full_name);
            Session::put('username', $data->username);
            Session::put('company_id', $data->company_id);
            Session::put('parent_id', $data->parent_id);
            Session::put('email_id', $data->email);
            Session::put('role_id', $data->role_id);
          
            // if($data->IsAdmin == 'Y'){
            //     Session::put('IsAdmin', 'Y');
            // }

            // return view('index');

            return redirect('/user_dashboard')->with("success", "Successfully Login!");
        }
        else{
            return redirect("/")->with("error", 'Login details are not valid');
        }

    }
    public function user_dashboard(){
        return view('user_dashboard');
    }


   public function logout() {
        // Auth::logout(); // logout user
        Session::flush();
        // Redirect::back();
        return redirect(\URL::previous());
        // return redirect('/');
    }


    





}
