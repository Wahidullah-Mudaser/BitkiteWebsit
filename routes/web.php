<?php

use Illuminate\Support\Facades\Artisan;
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
Route::get('/artisan/{c}',function($c){
    return Artisan::call($c);
});
Route::view('/','contents.website.dashboard');
Route::view('/pricing','contents.website.pricing');
Route::view('/services','contents.website.services');
Route::view('/aboutus','contents.website.aboutus');
Route::view('/contact','contents.website.contact');

