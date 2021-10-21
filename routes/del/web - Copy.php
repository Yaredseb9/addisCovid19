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

// Route::get('/', function () {
//     return view('home');
// });

Route::resource('/',HomeController::class);

//Route::resource('expert',IndicatorController::class);
//Route::resource('expert/indi',IndivdualIndController::class);
Route::resource('expert',SubcityReviewController::class);


/*Route::get("expert/review", function (){
  return view("expert.subcityReview");
});*/

Route::resource('incoder',IncoderController::class);

Route::resource('subcity',SubcityController::class);

//Route::resource('posts', PostController::class);

// Route::get('/trial', function (){
// 	return view('expert.trial');
// });
Route::get('risk', function (){
	return view('clalrisk');
});
Route::get('/office', function (){
	return view('office.home');
});
Route::get('/physician', function (){
	return view('physician.home');
});
Route::resource('/admin',adminController::class);

//Route::put('/admin/users', 'adminController@users');
//Route::get('/admin/users', [adminController::class, 'users']);

//Route::view('/admin/users', [adminController::class, 'users']);
/*Route::get('/admin/home', function(){
	return view('admin.home');
});*/
// Route::get('/admin', function () {
//     return view('admin.home');
// });
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/risk", function (){
  return view("risk");
});
Route::get("/riskDesh", function (){
  return view("riskDesh");
});
Route::post('softdel', [IndicatorController::class,'softdel'])->name('softdel');
