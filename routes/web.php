<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CommunicationController;
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
    Route::post('/add-pipeline',[UserSettingController::class, 'add_pipeline']);
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
    Route::get('/edit-lead/{id}/{mod_id}',[CustomerController::class, 'edit_lead']);
    Route::post('/update-lead',[CustomerController::class, 'update_lead']);
    Route::post('/leads-filter',[CustomerController::class, 'leads_filter']);
    Route::get('/delete-lead/{id}',[CustomerController::class, 'delete_lead']);
    Route::get('/export_data1',[CustomerController::class,'export_data']);

    Route::post('/save-leads',[CustomerController::class, 'save_leads']);
     Route::get('/module-layout/{id}',[CustomerController::class, 'module_layout']);
     Route::post('/add-mod-fields',[CustomerController::class, 'add_mod_fields']);
    Route::get('/meetings1',[CustomerController::class, 'meetings']);

    Route::post('/save-task',[CustomerController::class, 'save_task']);
    Route::get('/teams',[CustomerController::class, 'teams']);
    Route::get('/deals',[CustomerController::class, 'deals']);
   Route::get('/get-lead-by-id/{id}',[CustomerController::class, 'get_lead_by_id']);
    Route::get('/single-profile/{id}/{module_id}',[CustomerController::class, 'single_profile']);
    Route::get('/convert-lead/{id}',[CustomerController::class, 'convert_lead']);
	Route::post('/save-convert-lead',[CustomerController::class, 'save_convert_lead']);
    Route::get('/accounts',[CustomerController::class, 'accounts']);
 	Route::get('/add-account',[CustomerController::class, 'add_account']);
 	 Route::post('/save-account',[CustomerController::class, 'save_account']);
		Route::get('/fetch-stages/{id}',[CustomerController::class, 'fetch_stages']);
		 Route::post('/save-deal',[CustomerController::class, 'save_deal']);
		 Route::get('/add-deal',[CustomerController::class, 'add_deal']);
    Route::get('/export_data_pankaj',[UserController::class,'export_data_pankaj']);

    Route::post('/save-managecol',[CustomerController::class, 'save_managecol']);
    Route::get('/view-data/{id}/{mod_id}',[CustomerController::class, 'view_data']);
     Route::get('/get-viewfilter-id/{id}',[CustomerController::class, 'get_viewfilter_id']);
     Route::get('/deals-pipeline',[CustomerController::class, 'deals_pipeline']);

      Route::get('/deal-pipe-ajax/{pid}',[CustomerController::class, 'deal_pipe_ajax']);
    Route::get('/update-deal-stage/{stageId}/{dealId}',[CustomerController::class, 'update_deal_stage']);
    Route::get('/deal-won-lost/{stageId}/{dealId}',[CustomerController::class, 'deal_won_lost']);
    Route::get('/get_filter_by_users/{id}',[CustomerController::class, 'get_filter_by_users']);

    // testing route for edit data 
 Route::get('/get_edit_data/{dataid}/{moduleid}',[CustomerController::class, 'get_edit_data']);

    Route::get('/GetTemplate/{sender_id}', [CustomerController::class, 'GetTemplate']);
    //activity controller
    //task
    Route::get('/tasks',[ActivityController::class, 'tasks']);
    Route::get('/edittask/{id}',[ActivityController::class, 'edittask']);
    Route::post('/taskupdate',[ActivityController::class, 'taskupdate']);
    Route::post('/addnots',[ActivityController::class, 'addnots']);
    Route::get('/notes',[ActivityController::class, 'notes']);
    Route::get('/add-task',[ActivityController::class, 'add_task']);
    Route::post('/task_add',[ActivityController::class, 'task_add']);

    //csv
    Route::post('/ImportCsv',[ActivityController::class, 'ImportCsv']);
    //meeting
    Route::get('/add-meetings', [ActivityController::class, 'add_meetings']);
    Route::post('/create-meeting', [ActivityController::class, 'create_meeting']);
    Route::get('/meetings',[ActivityController::class, 'meetings']);
    Route::get('/editmeeting/{id}',[ActivityController::class, 'editmeeting']);
    Route::post('/meeting_notes',[ActivityController::class,'meeting_notes']);
});


    Route::get('/sms-api',[CommunicationController::class, 'sms_api']);
    Route::get('/voice-api',[CommunicationController::class, 'voice_api']);
    Route::get('email-api',[CommunicationController::class,], 'email_api');


    //meeting notification

    Route::get('/meeting_notification',[ActivityController::class, 'meeting_notification']);
    Route::get('/task_notification',[ActivityController::class, 'task_notification']);
