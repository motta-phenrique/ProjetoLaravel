<?php

use App\Http\Controllers\{
    UserController
};

use Illuminate\Support\Facades\Route;

Route::post('/register',[UserController::class, 'show'])-> name('register');

Route::get('/', function () {
    return view('welcome');
});
