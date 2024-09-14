<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;

Route::get('/', function () {
    return view('index');
});
Route::get('/login',[loginController::class, 'index']);
Route::get('/signup',[signupController::class, 'index']);