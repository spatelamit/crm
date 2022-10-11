<?php

use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\UserSettingcontroller;
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

Route::group(['middleware' => 'prevent-back-history'],function(){

	// Auth::routes();



});

Route::get('/User_dashboard',[usercontroller::class, 'User_dashboard']);
Route::get('/deals',[dashboardcontroller::class, 'deals']);
Route::get('/mailer',[dashboardcontroller::class, 'mailer']);
Route::get('/crm_setting',[dashboardcontroller::class, 'crm_setting']);

   Route::get('/login',[dashboardcontroller::class, 'login']);



   Route::get('/theme_settings',[dashboardcontroller::class, 'theme_settings']);
   Route::get('/sms_setting',[dashboardcontroller::class, 'sms_setting']);
	
	Route::get('/pipelines_stages',[dashboardcontroller::class, 'pipelines_stages']);
	Route::get('/modules',[dashboardcontroller::class, 'modules']);
	Route::get('/forms',[dashboardcontroller::class, 'forms']);
	Route::get('/email_setting',[dashboardcontroller::class, 'email_setting']);

	// User Setting//
Route::get('/roles',[UserSettingcontroller::class, 'roles_view']);
Route::get('/add-role',[UserSettingcontroller::class, 'add_role']);

	// end user setting//

