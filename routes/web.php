<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
use App\Http\Controllers\socialController;
use App\Http\Controllers\chatController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AgeGroupController;
use App\Http\Controllers\WebsiteController;
use App\Http\Middleware\AuthMiddleware;
use App\Livewire\Chat\Index;
use App\Livewire\Chat\Chat;
use App\Livewire\Users;

Route::get('/home', function () {
    return view('index');
});
Route::get('/', function(){
    return view('home');
})->name('home');
Route::get('/login',[loginController::class, 'index'])->name('login');
Route::get('/signup',[signupController::class, 'index']);
Route::get('/signup-details',[signupController::class, 'signupDetails']);
Route::post('/saveRegistration', [signupController::class, 'saveRegistration']);
Route::post('/login', [loginController::class, 'loginPost'])->name('loginPost');

//social facebook login
Route::get('facebook/login', [socialController::class, 'provider'])->name('facebook.login');
Route::get('facebook/callback', [socialController::class, 'handleCallBack'])->name('facebook.callback');

//social linkedin login
Route::get('linkedin/login', [socialController::class, 'linkedinProvider'])->name('linkedin.login');
Route::get('linkedin/callback', [socialController::class, 'linkedinHandleCallBack'])->name('linkedin.callback');

//social linkedin login
Route::get('insta/login', [socialController::class, 'instaProvider'])->name('insta.login');
Route::get('insta/callback', [socialController::class, 'instaHandleCallBack'])->name('insta.callback');

//Event
Route::get('/event/{city?}', [WebsiteController::class, 'event']);

//Event Details
Route::get('/event/details/{id}', [WebsiteController::class, 'eventDetail']);

//about us page
Route::get('/aboutUs', function () {
    return view('aboutUs');
});

//Reset password page
Route::get('/resetPassword', function () {
    return view('resetPassword');
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
Route::get('/admin/dashboard', [AdminController::class, 'allUsers'])->name('allUsers');
//Pending user registration request
Route::get('/admin/dashboard/pending-request', [AdminController::class, 'pendingRequest'])->name('pendingRequest');
//Add Event page
Route::get('/admin/dashboard/add-event', [AdminController::class, 'addEvent'])->name('addEvent');
//Add Event function
Route::post('/admin/dashboard/new-event', [EventController::class, 'newEvent'])->name('newEvent');
//Event list
Route::get('/admin/dashboard/event', [AdminController::class, 'event'])->name('Event');
//Edit Event page
Route::get('/admin/dashboard/edit-event/{id}', [AdminController::class, 'editEvent'])->name('editEvent');
//Edit Event function
Route::post('/admin/dashboard/edit/event', [EventController::class, 'eventEdit'])->name('editCurrentEvent');
//Delete Event function
Route::get('/admin/dashboard/delete-event/{id}', [EventController::class, 'deleteEvent'])->name('deleteEvent');
//Location
Route::get('/admin/dashboard/location', [AdminController::class, 'location'])->name('location');
//Add Location Page
Route::get('/admin/dashboard/addLocation', [AdminController::class, 'addLocationPage'])->name('addLocation');
//new Location Page
Route::post('/admin/dashboard/newLocation', [LocationController::class, 'newLocation'])->name('newLocation');
//Edit location page
Route::get('/admin/dashboard/edit-location/{id}', [AdminController::class, 'editLocation'])->name('editLocation');
//Edit location function
Route::post('/admin/dashboard/edit/location', [LocationController::class, 'locationEdit'])->name('editCurrentlocation');
//Delete location function
Route::get('/admin/dashboard/delete-location/{id}', [LocationController::class, 'deleteLocation'])->name('deleteLocation');
//approve user
Route::get('/admin/dashboard/approveUser/{id}', [UserController::class, 'approveUser'])->name('approve-user');
//disapprove user
Route::get('/admin/dashboard/disapproveUser/{id}', [UserController::class, 'disapproveUser'])->name('disapprove-user');
//Age group
Route::get('/admin/dashboard/ageGroup', [AdminController::class, 'age_group'])->name('age_group');
//Edit age group page
Route::get('/admin/dashboard/editAgeGroup/{id}', [AdminController::class, 'editAgeGroup'])->name('edit_age_group');
//Edit Age group function
Route::post('/admin/dashboard/edit/ageGroup', [AgeGroupController::class, 'ageGroupEdit'])->name('editCurrentAgeGroup');

});

// User routes
Route::middleware([AuthMiddleware::class.':user'])->group(function () {

//User dashboard
Route::get('/user/dashboard', function() {
    return view('dashboard.user.user');
})->name('dashboard');

});