<?php

namespace App\Http\Admin;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Admin as Admin;

class Admin extends Admin
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
