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
//Бұл жерде мен 'print_name'-нен келген сөзді шығарамын!!
Route::get('/fullname', function () {
    return view('print_my_name');
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
// Route::get('/student', "StudentController@index");
// Route::resource('/student2', "StudentController");

// Route::get('/user', function () {
//     return view("/user", ["name"=>"Maksat","age"=>"21"]);
// });
// Route::get('/user', function () {
//     return view("/user")->with("name", "Maks")->with("age",20)->with("date", "1998-02-01")->with("lname", "ASan");
// });
// Route::get('/user/{name}/{age}', function ($name, $age) {
//     return view("/user", compact('name', 'age'));
// });

// Route::get('/user/{number1}/{sign}/{number2}', 'CalculatorController@operation');
// Route::get('/posts/{id}',"ForexampleController@show");
// Route::resources(['posts'=>'ForexampleController@show'],
// ['student'=>'StudentController@index']);
//Route::resources('student','StudentController',['only'=>['index','show']]);
// Route::get('/contact', function(){
//     return view('Contact',['name'=>'John']);
// });
// Route::get('/user/{tell}',"UserController@reverse_number");
// Route::get('/details', 'UserController@display');
// Route::get('/forout/{id}', 'UserController@out');
// Route::get('/disname/{name}', 'UserController@displayname');
//Route::get('/details/{id}/{name}/{password}', 'UserController@display');





//Route::get('/studentinfo/{id}', 'StudentController@show');
// Route::get('/studentinfo', 'StudentController2@show');
