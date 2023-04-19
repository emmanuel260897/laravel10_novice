<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');

    //To redirect page
    //return redirect('test');
});

//To pass parameter in array form into the page
Route::get('/about-{username}-{lastname}', function($username,$lastname){
    return view('about',['username'=>$username],['lastname'=>$lastname]);
});

//To pass parameter into the page and echo it
//Route::get('/about/{username}', function($username){
//    echo $username;
//    return view('about');
//});

//Shorthand for route
//Route::view('about','about');
Route::view('contact','contact');
Route::view('test','test');
