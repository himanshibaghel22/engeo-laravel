<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonnorController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AppSetting;
use App\Http\Controllers\AddSubscription;
use App\Http\Controllers\ViewSubscription;
use App\Http\Controllers\ManageSliderController;
use Facade\FlareClient\View;
use App\Http\Controllers\ManageNotificationController;

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


Route::get('/',[AdminController::class,'login_page']);
Route::post('login',[AdminController::class,'login']);
Route::get('logout',[AdminController::class,'logout']);
Route::get('admin/dashboard',[AdminController::class,'dashboard']);
Route::get('admin/donnors',[DonnorController::class,'donnor_page']);
Route::get('admin/subscription',[SubscriptionController::class,'subscription_page']);
Route::get('data',[DonnorController::class,'getData']);
Route::get('admin/app-setting/manage-services',[AppSetting::class,'manage_services']);
Route::get('admin/app-setting/manage-slider',[AppSetting::class,'manage_slider']);
Route::get('admin/app-setting/manage-notification',[AppSetting::class,'manage_notification']);
Route::post('SubmitData',[DonnorController::class,'SubmitData']);
Route::post('UpdateData',[DonnorController::class,'UpdateData']);
Route::get('admin/subscription/view-subscription',[ViewSubscription::class,'view_page']);
Route::get('admin/subscription/add-subscription',[AddSubscription::class,'view_page']);
Route::post('submitsubscription',[AddSubscription::class,'submitdata']);
Route::get('sub-data',[ViewSubscription::class,'getdata']);
Route::post('save_slider',[ManageSliderController::class,'save_slider']);
Route::get('getdataSlider',[ManageSliderController::class,'getdataSlider']);
Route::post('UpdateSlider',[ManageSliderController::class,'UpdateSlider']);
Route::post('StatusChange',[ManageSliderController::class,'UpdateStatus']);
Route::post('notification',[ManageNotificationController::class,'notification']);
Route::get('getData',[ManageNotificationController::class,'getData']);
Route::get('delete/{id}',[ManageSliderController::class,'delete']);