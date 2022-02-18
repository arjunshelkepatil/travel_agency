<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;

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
//     return view('welcome');
// });

// Route::get('/',function(){
//     return view('agency.index');
// });

Route::get('/tour',function(){
    return view('agency.tour');
});

Route::get('/blog',function(){
    return view('agency.blog');
});

Route::get('/contact',function(){
    return view('agency.contact');
});

Route::get('/offer',function(){
    return view('agency.offer');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('/agency', BookingController::class);

// Route::get('/', [App\Http\Controllers\BookingController::class, 'index'])->name('agency.index');
// Route::post('store', [App\Http\Controllers\BookingController::class, 'store'])->name('agency.index');

// Route::post('store','BookingController@store')->name('agency.store');  

Route::resource('agency', BookingController::class);