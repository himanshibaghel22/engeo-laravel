<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonnorController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AppSetting;
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



Route::get('admin/dashboard',[AdminController::class,'dashboard']);
Route::get('admin/donnors',[DonnorController::class,'donnor_page']);
Route::get('admin/subscription',[SubscriptionController::class,'subscription_page']);
Route::get('data',[DonnorController::class,'getData']);
Route::get('admin/app-setting/manage-services',[AppSetting::class,'manage_services']);
Route::get('admin/app-setting/manage-slider',[AppSetting::class,'manage_slider']);
Route::get('admin/app-setting/manage-notification',[AppSetting::class,'manage_notification']);
Route::post('SubmitData',[DonnorController::class,'SubmitData']);
Route::post('UpdateData',[DonnorController::class,'UpdateData']);
