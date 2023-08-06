<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\modulousuarios;
use App\Http\Controllers\postusuarios;
use App\Http\Controllers\todosusuarios;
use App\Http\Controllers\auth\LoginController;



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
    return view('auth.login');
});

Auth::routes();





Route::group(['middleware' => 'disable.example'], function () {
    Route::get('/register', 'RegisterController@index');
 
});

Route::resource('/usuarios', 'App\Http\Controllers\todosusuarios' )->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/post-usuarios', [App\Http\Controllers\postusuarios::class, 'obtenerpost'])->middleware('auth');






