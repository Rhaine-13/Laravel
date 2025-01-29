<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
    //return 'Welcome to Laravel';
});

Route::post("/formSubmitted", function (Request $request) {
    
    $request->validate([
        'fullname' => 'required|min:3|max:30',
        'email' => 'required|min:3|max:30|email',
    ]);

    $Fullname = $request->input("fullname");
    $Email = $request->input("email");
    
    /*return "Your name is {$request->input("fullname")}, and your email is $Email";*/
    return "Your name is $Fullname, and your email is $Email";
});
/*
Route::get('/portfolio/{name}', function ($name) {
    return $name;  
}); */

Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
    return $firstname . " " . $lastname;  
});

Route::get('/test', function () {
    return "This is a test!";
})->name("testing");

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::prefix("portfolio")->group(function () {
    Route::get('/company', function () {
        return view('company');
    });
    Route::get('/me', function () {
        return view('me');
    });
});

