<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;




Route::get('/', function () {
    return view('home');
});

// Route::post('/register',function(){
//     return 'Registeration complete';

// });

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);

//blog controller

Route::post('/create-post', [PostController::class, 'createPost']);
