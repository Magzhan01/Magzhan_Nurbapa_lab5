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
    return view('welcome');
});
Route::get('/fullname', function () {
    return view('print_name');
});
Route::get('/redirect', function () {
    return redirect("/fullname") ;
});
Route::get('/fullname_write/{firstname}/{lastname}', function($firstname,$lastname){
    return 'My fullname is '.$firstname.' '.$lastname;
});
Route::get('/fullname_default/{firstname?}/{lastname?}', function($firstname = "Magzhan",$lastname = "Nurbapa" ){
    return 'My fullname is '.$firstname.' '.$lastname;
});