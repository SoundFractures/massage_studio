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

//Control Panel 
Route::middleware(['auth',])->group(function () {
    Route::get('/admin', 'AdminController@admin');
});
Route::get('/blogs', 'BlogController@index');
Route::get('/blogs/create', 'BlogController@create');
Route::get('/questions', 'QuestionController@index');
Route::get('/subscribers', 'AdminController@subscribers');
Route::get('/settings', 'AdminController@settings');




//Main Site 
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::get('/', 'RouteController@home')->name('RouteController.home');
Route::get('/about', 'RouteController@about')->name('RouteController.about');;
Route::get('/offer', 'RouteController@offer')->name('RouteController.offer');
Route::get('/pricelist', 'RouteController@pricelist')->name('RouteController.pricelist');
Route::get('/gallery', 'RouteController@gallery')->name('RouteController.gallery');
Route::get('/blog', 'RouteController@blog')->name('RouteController.blog');
Route::get('/contact', 'RouteController@contact')->name('RouteController.contact');

