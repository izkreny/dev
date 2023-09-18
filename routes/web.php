<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\PersonController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/add/{a}/{b}', [NumberController::class, 'add']);

/* Route for getting data via POST method
Route::post('/add', [NumberController::class, 'add']);

// Route for showing sum form
Route::get('/form', function ()
    {
        return view('sumForm');
    });
*/

// Form
Route::get('/form', [PersonController::class, 'form']);

// Store
Route::post('/store', [PersonController::class, 'store']);

// Show
Route::get('/show', [PersonController::class, 'show']);
