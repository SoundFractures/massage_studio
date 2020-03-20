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

Route::middleware(['auth',])->group(function () {
    Route::get('/admin', 'RouteController@admin');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::get('/', 'RouteController@home')->name('RouteController.home');
Route::get('/omeni', 'RouteController@omeni')->name('RouteController.omeni');
Route::get('/ponudba', 'RouteController@ponudba')->name('RouteController.ponudba');
Route::get('/cenik', 'RouteController@cenik')->name('RouteController.cenik');
Route::get('/galerija', 'RouteController@galerija')->name('RouteController.galerija');
Route::get('/blog', 'RouteController@blog')->name('RouteController.blog');
Route::get('/povprasevanje', 'RouteController@povprasevanje')->name('RouteController.povprasevanje');

Route::get('/subscribers', 'RouteController@subscribers');
//test commmit for new pc
