<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\GuestController::class, 'home']);
Route::get('Tentang-Kami', [App\Http\Controllers\GuestController::class, 'TentangKami']);
Route::get('Produk',[App\Http\Controllers\ProdukController::class, 'Produk']);
Route::get('Paket_Tour',[App\Http\Controllers\ProdukController::class, 'PaketTour']);
Route::get('FAQ',[App\Http\Controllers\GuestController::class, 'faq']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
