<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;

Route::get('/', function () {
    return view('index');
});
Route::get('/login',[loginController::class, 'index']);
Route::get('/signup',[signupController::class, 'index']);
Route::get('/signup-details',[signupController::class, 'signupDetails']);
Route::post('/saveRegistration', [signupController::class, 'saveRegistration']);

Route::post('/login', [loginController::class, 'loginPost'])->name('loginPost');
