<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpersController;

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
    return view('welcome');
});

// Route::get('get-session',[SessionController::class,'getSession']);
// Route::get('store-session',[SessionController::class,'storeSession']);
// Route::get('delete-session',[SessionController::class,'deleteSession']);



Route::get('check-helper',[HelpersController::class,'checkHelper']);
//Route::get('check-helper',[Controller::class,'HelperCheck']);
