<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/***

// Basic / General route
Route::get('/', function () {
    //return "Welcome to my web page!";
    return view('welcome');
});

// Routes with parameters
Route::get('/post/{id}', function($id) {
    return "Show post with ID: " . $id;
});

// Routes with names
Route::get('/profile/', function() {
    // Some code for save, input...
})->name('profile');

// This don't belong here, but inside Controller
return redirect()->route('profile');

Route::get('/profile/', function() {
    return view('profile');
})->name('profile');

// Generate URL
$url = route('profile');

Route::get('/profile/{id}', function($id) {
    return "Profile page of user ID: " . $id;
})->name('user.profile');

// Generate followint URL: /profile/5
$urlForUser5 = route('user.profile', ['id' => 5]);

// Exercise #1
Route::get('/', function() {
    return "Welcome to my BLOG!";
});

// Exercise #2
Route::get('/post/{title}', function($title) {
    return "You are reading " . $title . " article.";
});

// Exercise #3
Route::get('/user/profile', function() {
    return "This is my user profile";
})->middleware('check.logged.user');

***/

Route::get('/users', [UsersController::class, 'index']);
Route::post('/users/create', [UsersController::class, 'create']);
Route::post('/users', [UsersController::class, 'store']);
Route::get('/users/{id}/edit', [UsersController::class, 'edit']);

// Route::post('/user/{id}/update', [UsersController::class, 'update']);
Route::put('/users/{id}', [UsersController::class, 'update']);
Route::delete('/users/{id}', [UsersController::class, 'destroy']);

