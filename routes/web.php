<?php

use App\Http\Controllers\UserSettingcontroller;
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
Route::get('/login',[dashboardController::class, 'login']);
Route::get('/',[dashboardController::class, 'login']);
Route::group(['middleware' => 'prevent-back-history'],function(){

	// Auth::routes();



});

	Route::get('/user_dashboard',[userController::class, 'user_dashboard']);
	



	Route::get('/deals',[UserSettingcontroller::class, 'deals']);
	Route::get('/mailer',[UserSettingcontroller::class, 'mailer']);
	Route::get('/crm_settings',[UserSettingcontroller::class, 'crm_settings']);
   Route::get('/theme_settings',[UserSettingcontroller::class, 'theme_settings']);
   Route::get('/sms_settings',[UserSettingcontroller::class, 'sms_settings']);
	Route::get('/roles_setting',[UserSettingcontroller::class, 'roles_settings']);
	Route::get('/pipelines_stages',[UserSettingcontroller::class, 'pipelines_stages']);
	Route::get('/modules',[UserSettingcontroller::class, 'modules']);
	Route::get('/forms',[UserSettingcontroller::class, 'forms']);
	Route::get('/email_settings',[UserSettingcontroller::class, 'email_settings']);
