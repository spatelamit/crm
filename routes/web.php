<?php

use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

   Route::get('/User_dashboard',[usercontroller::class, 'User_dashboard']);
   Route::get('/deals',[dashboardcontroller::class, 'deals']);
   Route::get('/mailer',[dashboardcontroller::class, 'mailer']);
   Route::get('/crm_setting',[dashboardcontroller::class, 'crm_setting']);
   Route::get('/login',[dashboardcontroller::class, 'login']);
