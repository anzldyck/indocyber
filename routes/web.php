<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('books', [BooksController::class, 'index'])->name('books');
    Route::get('books/create', [BooksController::class, 'create'])->name('books.create');
    Route::post('books', [BooksController::class, 'store'])->name('books.store');
    Route::get('books/edit/{id}', [BooksController::class, 'edit'])->name('books.edit');
    Route::put('books/{id}', [BooksController::class, 'update'])->name('books.update');
    Route::delete('books/{id}', [BooksController::class, 'destroy'])->name('books.destroy');
});
require __DIR__.'/auth.php';
