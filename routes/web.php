<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\SettingController;

// Halaman Utama / Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Rute Login (Mengarahkan ke halaman login)
Route::get('/login', function () {
    return view('auth.login'); 
})->name('login');

Route::post('/login', function () {
    return redirect()->route('app.dashboard');
});

// Grup Rute Aplikasi (Diakses setelah pengguna login)
Route::prefix('app')->name('app.')->group(function () {
    
    // Halaman Dashboard 
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Halaman Riwayat Digitalisasi 
    Route::get('/riwayat', [DocumentController::class, 'history'])->name('documents.history');
    
    // Halaman Cari Dokumen 
    Route::get('/cari', [DocumentController::class, 'search'])->name('documents.search');
    
    // TAMBAHAN: Halaman Detail Preview Dokumen (Dinamis di dalam grup app)
    // URL di browser akan menjadi: digital-arsip-nusantara.test/app/document/PRJ-2030-032
    // Nama rute internalnya menjadi: app.documents.show
    Route::get('/document/{id}', [DocumentController::class, 'show'])->name('documents.show');
    
    // Halaman Log Akses 
    Route::get('/log-akses', [LogController::class, 'index'])->name('logs');
    
    // Halaman Konsultasi / Chat 
    Route::get('/konsultasi', [ConsultationController::class, 'index'])->name('consultation');
    
    // Rute untuk memproses pengiriman pesan chat
    Route::post('/konsultasi/kirim', [ConsultationController::class, 'store'])->name('consultation.store');
    
    // Halaman Pengaturan 
    Route::get('/pengaturan', [SettingController::class, 'index'])->name('settings');

});