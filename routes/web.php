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

Route::get('/login',[UserController::class, 'login']);
Route::get('/',[UserController::class, 'login']);
Route::post('/login_action',[UserController::class, 'login_action']);
// Route::post('/login_action',[UserController::class, 'login_action']);
// Route::get('/logout',[UserController::class, 'logout']);

Route::group(['middleware' => 'UserAuthentication'], function(){

	// Auth::routes();
    
    Route::get('/logout',[UserController::class, 'logout']);
    Route::get('/user_dashboard',[UserController::class, 'user_dashboard']);


	//setting//
	Route::get('/roles',[UserSettingController::class, 'roles_view']);
	Route::get('/add-role',[UserSettingController::class, 'add_role']);
	Route::get('/rolestree',[UserSettingController::class, 'rolestree']);
	Route::post('/save-role',[UserSettingController::class, 'save_role']);
	// end user setting//

	Route::get('/deals',[UserSettingController::class, 'deals']);

	Route::get('/crm_settings',[UserSettingController::class, 'crm_settings']);
	Route::get('/theme_settings',[UserSettingController::class, 'theme_settings']);
	Route::get('/sms_settings',[UserSettingController::class, 'sms_settings']);
	Route::get('/email_settings',[UserSettingController::class, 'email_settings']);

	Route::get('/roles_settings',[UserSettingController::class, 'roles_settings']);
	Route::get('/pipelines_stages',[UserSettingController::class, 'pipelines_stages']);
	Route::get('/modules',[UserSettingController::class, 'modules']);
	Route::get('/forms',[UserSettingController::class, 'forms']);


	

});