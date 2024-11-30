<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\socialController;
use App\Http\Controllers\chatController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Middleware\AuthMiddleware;
use App\Livewire\Chat\Index;
use App\Livewire\Chat\Chat;
use App\Livewire\Users;

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function(){
    return view('home');
});
Route::get('/login',[loginController::class, 'index'])->name('login');
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

//Video call
Route::get('/meeting', [MeetingController::class, 'meetingUser'])->name('meetingUser');
Route::get('/createMeeting', [MeetingController::class, 'createMeeting'])->name('createMeeting');
Route::get('joinMeeting/{url?}', [MeetingController::class, 'joinMeeting'])->name('joinMeeting');
Route::post('/saveUserName', [MeetingController::class, 'saveUserName'])->name('saveUserName');
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "/clear-cache";
});

// Admin routes
Route::middleware([AuthMiddleware::class.':admin'])->group(function () {

//admin dashboard
Route::get('/admin/dashboard', function() {
    return view('dashboard.admin.admin');
});

//Add Event page
Route::get('/admin/dashboard/add-event', [AdminController::class, 'addEvent'])->name('addEvent');
//Add Event function
Route::post('/admin/dashboard/new-event', [EventController::class, 'newEvent'])->name('newEvent');
//Event list
Route::get('/admin/dashboard/event', [AdminController::class, 'event'])->name('Event');
//Add Event function
Route::get('/admin/dashboard/delete-event/{id}', [EventController::class, 'deleteEvent'])->name('deleteEvent');
});

// User routes
Route::middleware([AuthMiddleware::class.':user'])->group(function () {

//User dashboard
Route::get('/user/dashboard', function() {
    return view('dashboard.user.user');
})->name('dashboard');

});