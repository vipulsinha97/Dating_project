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

//Event
Route::get('/event', function() {
    return view('event');
});

//Event Details
Route::get('/event/details', function() {
    return view('eventDetails');
});

//admin dashboard
Route::get('/admin/dashboard', function() {
    return view('dashboard.admin.admin');
});

//User dashboard
Route::get('/user/dashboard', function() {
    return view('dashboard.user.user');
});

//Privacy policy
Route::get('/privacy-policy', function() {
    return view('privacyPolicyPage');
});