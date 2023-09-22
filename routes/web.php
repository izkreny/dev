<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;

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

// Automatic route creation if we use conventional method names in Controllers
Route::resource('members', MemberController::class);
Route::resource('books', BookController::class);
Route::resource('borrows', BorrowController::class);

Route::get('/books/{book}/confirm-delete', [BookController::class, 'confirmDelete'])->name('books.confirm-delete');