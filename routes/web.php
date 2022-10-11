<?php

use App\Http\Controllers\UserSettingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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
Route::get('/login',[DashboardController::class, 'login']);
Route::get('/',[DashboardController::class, 'login']);
Route::group(['middleware' => 'prevent-back-history'],function(){

	// Auth::routes();



});

	Route::get('/user_dashboard',[UserController::class, 'user_dashboard']);
	



	Route::get('/deals',[UserSettingController::class, 'deals']);
	Route::get('/mailer',[UserSettingController::class, 'mailer']);
	Route::get('/crm_settings',[UserSettingController::class, 'crm_settings']);
   Route::get('/theme_settings',[UserSettingController::class, 'theme_settings']);
   Route::get('/sms_settings',[UserSettingController::class, 'sms_settings']);
	Route::get('/roles_setting',[UserSettingController::class, 'roles_settings']);
	Route::get('/pipelines_stages',[UserSettingController::class, 'pipelines_stages']);
	Route::get('/modules',[UserSettingController::class, 'modules']);
	Route::get('/forms',[UserSettingController::class, 'forms']);
	Route::get('/email_settings',[UserSettingController::class, 'email_settings']);
