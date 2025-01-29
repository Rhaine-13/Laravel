<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    //return 'Welcome to Laravel';
});

Route::get('/portfolio/{name}', function ($name) {
    return $name;  
});

Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
    return $firstname . " " . $lastname;  
});

Route::get('/test', function () {
    return "This is a test!";
})->name("testing");