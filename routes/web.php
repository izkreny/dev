<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


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

Route::group(['middleware' => 'auth'], function () {
    // Ovdje definirajte rute koje su dostupne samo prijavljenim korisnicima
    Route::get('/page1', function() {
        return view('page1');
    })->name('page1');
    Route::get('/page2', function() {
        return view('page2');
    })->name('page2');
    Route::get('/page3', function() {
        return view('page3');
    })->name('page3');
    Route::get('/page4', function() {
        return view('page4');
    })->name('page4');
    Route::get('/home', function() {
        return view('home');
    })->name('home');   
});

Route::get('/', function() {
    return "<a href='/login'>LOGIN</a> or <a href='/register'>REGISTER</a>";
});

Route::get('/register', [UserController::class, 'showRegistration'])->name('register');
Route::post('/register', [UserController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout'])->name('logout');
