<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/company', function () {
    return view('company');
})->middleware(['auth', 'verified'])->name('company');

Route::get('/truck', function () {
     return view('truck');  
})->middleware(['auth', 'verified'])->name('truck');
Route::get('truck', [TruckController::class, 'create']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'create'])->name('profile.create');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/truck', [TruckController::class, 'create'])->name('truck.create');
    Route::post('/users', [TruckController::class, 'store'])->name('truck.store');
    Route::get('/users/{user}', [TruckController::class, 'show'])->name('truck.show');
    Route::get('/users/{user}/edit', [TruckController::class, 'edit'])->name('truck.edit');
    Route::put('/users/{user}', [TruckController::class, 'update'])->name('truck.update');
Route::delete('/users/{user}', [TruckController::class, 'destroy'])->name('truck.destroy');


});

require __DIR__.'/auth.php';
