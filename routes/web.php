<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InmovillaController;

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


// Vistas Públicas
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contacto', [ContactoController::class, 'index'])->name('home');

Route::get('/inmovilla', [InmovillaController::class, 'index'])->name('inmovilla.index');



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
