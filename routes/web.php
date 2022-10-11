<?php


<<<<<<< HEAD

use App\Http\Controllers\UserSettingcontroller;
=======
use App\Http\Controllers\UserSettingController;
>>>>>>> 4d7d0144cd7bcc2e7e00727486027a0d05294dfb
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
<<<<<<< HEAD
	



  
	// User Setting//
	Route::get('/roles',[UserSettingController::class, 'roles_view']);
	Route::get('/add-role',[UserSettingController::class, 'add_role']);

=======
	Route::get('/roles',[UserSettingController::class, 'roles_view']);
	Route::get('/add-role',[UserSettingController::class, 'add_role']);
>>>>>>> 4d7d0144cd7bcc2e7e00727486027a0d05294dfb
	// end user setting//

	Route::get('/deals',[UserSettingController::class, 'deals']);
<<<<<<< HEAD
	// Route::get('/mailer',[UserSettingController::class, 'mailer']);
	
   Route::get('/theme_settings',[UserSettingController::class, 'theme_settings']);
   Route::get('/sms_settings',[UserSettingController::class, 'sms_settings']);
	
	Route::get('/email_settings',[UserSettingController::class, 'email_settings']);
	Route::get('/pipelines_stages',[UserSettingController::class, 'pipelines_stages']);
	Route::get('/modules',[UserSettingController::class, 'modules']);
	Route::get('/forms',[UserSettingController::class, 'forms']);
=======
	
	Route::get('/crm_settings',[UserSettingController::class, 'crm_settings']);
	Route::get('/theme_settings',[UserSettingController::class, 'theme_settings']);
	Route::get('/sms_settings',[UserSettingController::class, 'sms_settings']);
	Route::get('/email_settings',[UserSettingController::class, 'email_settings']);
	
	Route::get('/roles_settings',[UserSettingController::class, 'roles_settings']);
	Route::get('/pipelines_stages',[UserSettingController::class, 'pipelines_stages']);
	Route::get('/modules',[UserSettingController::class, 'modules']);
	Route::get('/forms',[UserSettingController::class, 'forms']);
	
>>>>>>> 4d7d0144cd7bcc2e7e00727486027a0d05294dfb

