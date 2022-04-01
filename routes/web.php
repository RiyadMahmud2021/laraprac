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

Route::get('/1', function () { // by me // Route:request_method('/route_name', function_for_view (){}
    return view('welcome');
});


Route::get('/', function () { // by me // Route:request_method('/route_name', function_for_view (){}
    return '<h1>Hi, I am learning Laravel Routing</h1>';
});

Route::get('/home', function () { // by me // Route:request_method('/route_name', function_for_view (){}
    return view('home');
});

Route::get('/about', function () { // by me // Route:request_method('/route_name', function_for_view (){}
    return view('about');
});

Route::get('/contact', function () { // by me // Route:request_method('/route_name', function_for_view (){}
    return view('contact');
});

