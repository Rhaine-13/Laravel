<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    //return 'Welcome to Laravel';
});

Route::get('/portfolio/{name}', function ($name) {
    return $name;  
});

Route::get('/test', function () {
    return "The test";  
});