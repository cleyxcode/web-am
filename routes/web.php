<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

// Frontend Routes
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/tata-kebaktian', [FrontendController::class, 'tataKebaktian'])->name('tata-kebaktian');
Route::get('/tata-kebaktian/{id}', [FrontendController::class, 'tataKebaktianDetail'])->name('tata-kebaktian.detail');
Route::get('/informasi-ketua', [FrontendController::class, 'informasiKetua'])->name('informasi-ketua');
Route::get('/pengurus-ranting', [FrontendController::class, 'pengurusRanting'])->name('pengurus-ranting');
Route::get('/tentang-angkatan-muda', [FrontendController::class, 'tentangAngkatanMuda'])->name('tentang');