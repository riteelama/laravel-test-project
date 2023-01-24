<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return redirect('about');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::view("contact","/contact");

Route::view("about","/about");

Route::view("register","/register");

Route::get('/user/{name}',function($name){
    echo $name;
    return view('user', ['name'=>$name]);
});

// Route::get("user/{id}",[UserController::class,'show']);

// Route::view('users',"/users");

// Route::view('about-with-header',"/about-with-header");

// Route::get('/users/{name}',function($name) {
//     return view('users',['name'=>$name]);
// });

Route::get("users/{name}",[UserController::class,"showName"]);