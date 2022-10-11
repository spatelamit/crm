<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function user_dashboard(){

        // dd("pankaj");
        return view('index');

    }
}
