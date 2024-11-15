<?php


use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/new-genre', [ThemeController::class, 'create'])->name('book.create');
Route::post('/new-genre', [ThemeController::class, 'store'])->name('book.store');

Route::get('/new-book', [LibraryController::class, 'creater'])->name('booker.create');
Route::post('/new-book', [LibraryController::class, 'storer'])->name('booker.store');

Route::post('/books', [LibraryController::class, 'created'])->name('bookering.store');

require __DIR__.'/auth.php';
