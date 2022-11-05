<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function tasks()
    {
        $user_id=session()->get('id');

        $result=DB::table('tasks')
            ->where('reciever_id',$user_id)
            ->get();
              dd($result);

        return view('viewtask', compact('result'));
    }




}
