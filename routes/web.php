<?php

use App\Http\Controllers\CustomerController;
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
    Route::get('/home',[UserController::class, 'home']);
    Route::get('/user_profile',[UserController::class, 'user_profile']);


	//setting//
	Route::get('/roles',[UserSettingController::class, 'roles_view']);
	Route::get('/add-role',[UserSettingController::class, 'add_role']);
	Route::get('/rolestree',[UserSettingController::class, 'rolestree']);
	Route::post('/save-role',[UserSettingController::class, 'save_role']);
	Route::get('/edit-role/{id}',[UserSettingController::class, 'edit_role']);
	Route::post('/update-role',[UserSettingController::class, 'update_role']);
	Route::get('/delete-role/{id}',[UserSettingController::class, 'delete_role']);
	Route::post('/update-user',[UserSettingController::class, 'update_user']);
	Route::post('/add-user',[UserSettingController::class, 'add_user']);
	Route::get('/delete-user/{id}',[UserSettingController::class, 'delete_user']);
	Route::post('/update-sms-details',[UserSettingController::class, 'update_sms_details']);
	Route::post('/add-sms-details',[UserSettingController::class, 'add_sms_details']);
	Route::get('/delete-sms-details/{id}',[UserSettingController::class, 'delete_sms_details']);
	Route::post('/add-email-details',[UserSettingController::class, 'add_email_details']);
	Route::post('/update-email-details',[UserSettingController::class, 'update_email_details']);
	Route::get('/delete-email-details/{id}',[UserSettingController::class, 'delete_email_details']);
	Route::get('/delete-email-details/{id}',[UserSettingController::class, 'delete_email_details']);

	Route::get('/add-fields',[UserSettingController::class, 'add_fields']);
	Route::post('/save-fields',[UserSettingController::class, 'save_fields']);
	// end user setting//



	Route::get('/crm_settings',[UserSettingController::class, 'crm_settings']);
	Route::get('/theme_settings',[UserSettingController::class, 'theme_settings']);
	Route::get('/sms_settings',[UserSettingController::class, 'sms_settings']);
	Route::get('/email_settings',[UserSettingController::class, 'email_settings']);

	Route::get('/roles_settings',[UserSettingController::class, 'roles_settings']);
	Route::get('/pipelines_stages',[UserSettingController::class, 'pipelines_stages']);
	Route::get('/modules',[UserSettingController::class, 'modules']);
	Route::get('/forms',[UserSettingController::class, 'forms']);
	Route::get('/user_account_setting',[UserSettingController::class, 'user_account_setting']);





    //customer
     Route::get('/leads',[CustomerController::class, 'leads']);
    Route::get('/add-leads',[CustomerController::class, 'add_leads']);
    Route::get('/edit-lead/{id}',[CustomerController::class, 'edit_lead']);
    Route::post('/update-lead',[CustomerController::class, 'update_lead']);
    Route::get('/delete-lead/{id}',[CustomerController::class, 'delete_lead']);
    Route::get('/export_data',[CustomerController::class,'export_data']);

    Route::post('/save-leads',[CustomerController::class, 'save_leads']);
     Route::get('/module-layout/{id}',[CustomerController::class, 'module_layout']);
     Route::post('/add-mod-fields',[CustomerController::class, 'add_mod_fields']);
    Route::get('/meetings',[CustomerController::class, 'meetings']);
    Route::get('/tasks',[CustomerController::class, 'tasks']);
    Route::get('/teams',[CustomerController::class, 'teams']);
    Route::get('/deals',[CustomerController::class, 'deals']);
   Route::get('/get-lead-by-id',[CustomerController::class, 'get_lead_by_id']);



});
