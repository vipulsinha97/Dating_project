<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\socialController;
use App\Http\Controllers\chatController;
use App\Livewire\Chat\Index;
use App\Livewire\Chat\Chat;
use App\Livewire\Users;

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function(){
    return view('home');
});
Route::get('/login',[loginController::class, 'index']);
Route::get('/signup',[signupController::class, 'index']);
Route::get('/signup-details',[signupController::class, 'signupDetails']);
Route::post('/saveRegistration', [signupController::class, 'saveRegistration']);
Route::post('/login', [loginController::class, 'loginPost'])->name('loginPost');

//social login
Route::get('facebook/login', [socialController::class, 'provider']);
Route::get('facebook/callback', [socialController::class, 'handleCallBack']);

//Event
Route::get('/event', function() {
    return view('event');
});

//Event Details
Route::get('/event/details', function() {
    return view('eventDetails');
});

//Add Event 
Route::get('/admin/dashboard/add-event', function() {
    return view('dashboard.admin.addEvent');
});

//admin dashboard
Route::get('/admin/dashboard', function() {
    return view('dashboard.admin.admin');
});

//User dashboard
Route::get('/user/dashboard', function() {
    return view('dashboard.user.user');
})->name('dashboard');

//Privacy policy
Route::get('/privacy-policy', function() {
    return view('privacyPolicyPage');
});

Route::get('/chat',Index::class)->name('chat.index');
Route::get('/chat/{query}',Chat::class)->name('chat');

Route::get('/users',Users::class)->name('users');


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/logout', [loginController::class, 'logout'])->name('logout');