<?php

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
    return view('page2');
});

Route::get('/about', function () {
    return view('about');
});

       
        Route::get('/login2', function () {
            return view('/login2');
        });

        Route::get('/admin', function () {
            return view('admin');
        });
        
        Route::get('/index', function () {
            return view('index');
        });
        
            