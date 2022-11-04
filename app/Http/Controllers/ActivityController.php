<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function tasks()
    {
        return view('viewtask');
    }
}
