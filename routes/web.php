<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndivdualIndController;
use App\Http\Controllers\IndicatorController;
use App\Http\Controllers\IncoderController;
use App\Http\Controllers\SubcityController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubcityReviewController;
//use App\Http\Controllers\PhyscianController;  //comment
use App\Http\Controllers\OfficialsController;
use App\Http\Controllers\ChangePasswordController;


use App\Http\Controllers\SettingController; 
use App\Http\Controllers\settingControllerNoauth;
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

/***********Route info for the main index page **********************/
Route::resource('community',HomeController::class);
//Route::resource('community',HomeController::class);
/************End main index ****************************************/

Route::get("/", function (){
	return view("home");
})->name('/');


/****************Route info for individual risk calculator ***************/
Route::get("risk", function (){
	return view("risk");
})->name('risk');
/*************End Individual risk ***************************************/



/***************Route info for the comunity risk calculator***********************/
Route::get("comrisk", function (){
	return view("comrisk");
})->name('comrisk');
/**********************End Comynity risk *******************************************/



/************************************Route For the role Admin ***********************************/
Route::resource('/admin',adminController::class);
Route::get('admin.users', [adminController::class,'users'])->name('users');
Route::post('softdeladmin', [adminController::class,'softdeladmin'])->name('softdeladmin');
Route::post('restoreadmin', [adminController::class,'restoreadmin'])->name('restoreadmin');
Route::post('multipledeladmin', [adminController::class,'multipledeladmin'])->name('multipledeladmin');
/****************************************End Admin ***********************************************/



/************************************Route for the role expert ***************************/
Route::resource('expert',IndicatorController::class);
Route::post('softdel', [IndicatorController::class,'softdel'])->name('softdel');
/*Route::get('expert.indicator', [IndicatorController::class,'indicator'])->name('indicator');*/
Route::post('restore', [IndicatorController::class,'restore'])->name('restore');
Route::resource('subreview',SubcityReviewController::class);
/*************************End Expert *******************************************************/



/**************************************Route for the role Encoder ************************/
Route::resource('incoder',IncoderController::class);
Route::get('incoder/manage/subcity', [IncoderController::class,'manage_subcity'])->name('manage_subcity');
Route::get('incoder/manage/woreda', [IncoderController::class,'manage_woreda'])->name('manage_woreda');
Route::get('incoder/manage/ketena', [IncoderController::class,'manage_ketena'])->name('manage_ketena');
Route::resource('subcity',SubcityController::class);
/********************************************End Encoder **********************************/


/**************************************Route for the role physician******************************/
//Route::resource('/physcian',PhyscianController::class);
/****************************************end Physician *****************************************/


/******************************Route for settings *******************************************/
/******************************Route for settings *******************************************/
Route::resource('office',SettingController::class);
Route::get('office.form',[SettingController::class,'formdata'])->name('formdata');
Route::get('office.history',[SettingController::class,'historydata'])->name('historydata');
Route::resource('/setting', SettingController::class);

/********************End Setting*****************************************************************/
Route::get("settingrisk", function (){
	return view("settingRisk");
})->name('settingRisk');
/********************End Setting*****************************************************************/



/******************************Route for settings *******************************************/
/*Route::get('/office', function (){
	return view('office.home');
})*/;
/********************End Setting*****************************************************************/


/******************************Route for official *******************************************/
Route::resource('official',OfficialsController::class);

/********************End official ************************************************************/




Route::resource('/changepass',ChangePasswordController::class);

Route::post('changepass', [ChangePasswordController::class, 'store'])->name('changepass');

/************************Route for autorization *******************************/
Auth::routes();
/**********************************end Autroization ****************************/
