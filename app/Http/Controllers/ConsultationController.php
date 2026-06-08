<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Menampilkan halaman utama chat/konsultasi.
     */
    public function index()
    {
        // Mengembalikan tampilan dari resources/views/consultation/index.blade.php
        return view('consultation.index');
    }

    /**
     * Menangani pengiriman pesan chat baru (Metode POST).
     */
    public function store(Request $request)
    {
        // Untuk sementara, fungsi ini akan mengembalikan halaman ke chat sebelumnya (Mockup)
        return back()->with('success', 'Pesan berhasil terkirim.');
    }
}