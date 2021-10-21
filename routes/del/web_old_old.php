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
use App\Http\Controllers\OfficialsController;
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

Route::resource('expert',IndicatorController::class);
Route::post('softdel', [IndicatorController::class,'softdel'])->name('softdel');
Route::get('expert.indicator', [IndicatorController::class,'indicator'])->name('indicator');


Route::post('restore', [IndicatorController::class,'restore'])->name('restore');
Route::get('subriview',[SubcityReviewController::class,'index'])->name('subreview');
Route::get('subreview.store',[SubcityReviewController::class,'store'])->name('subreview.store');

Route::resource('expert/indi',IndivdualIndController::class);


Route::resource('incoder',IncoderController::class);

Route::resource('subcity',SubcityController::class);

Route::resource('posts', PostController::class);


Route::resource('official', OfficialsController::class);



Route::get("risk", function (){
	return view("risk");
})->name('risk');


Route::get('/office', function (){
	return view('office.home');
});
Route::get('/physician', function (){
	return view('physician.home');
});
Route::resource('/admin',adminController::class);
Route::get('admin.users', [adminController::class,'users'])->name('users');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
