<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
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

}
