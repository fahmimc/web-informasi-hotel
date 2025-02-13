<?php

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
    return redirect('/home');
});
Auth::routes();

Route::resource('home', \App\Http\Controllers\HomeController::class);
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);

Route::get('search','App\Http\Controllers\HomeController@search');


