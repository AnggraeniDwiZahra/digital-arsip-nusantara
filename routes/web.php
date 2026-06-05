<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ConsultationController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::prefix('app')->name('app.')->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/riwayat', [DocumentController::class, 'history'])->name('documents.history');
    Route::get('/cari', [DocumentController::class, 'search'])->name('documents.search');
    
    Route::get('/log-akses', [LogController::class, 'index'])->name('logs');
    
    Route::get('/konsultasi', [ConsultationController::class, 'index'])->name('consultation');
});