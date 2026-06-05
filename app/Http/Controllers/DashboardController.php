<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $documents = collect([
            ['id' => 'PRJ-2030-032', 'nama' => 'Rekam Medis Pasien Rawat Inap 2021', 'tanggal' => '19 April 2030', 'status' => 'Completed'],
            ['id' => 'PRJ-2030-033', 'nama' => 'Hasil Pemeriksaan Radiologi & MRI', 'tanggal' => '19 April 2030', 'status' => 'Processing'],
            ['id' => 'PRJ-2030-034', 'nama' => 'Arsip Surat Izin Praktik Dokter (SIP)', 'tanggal' => '18 April 2030', 'status' => 'Pick Up'],
        ]);

        $stats = [
            'total_dokumen' => '2,847',
            'tren_bulan_lalu' => '+12.5%',
            'progress_proyek' => 85,
            'penyimpanan_terpakai' => 478,
            'penyimpanan_maksimal' => 750,
            'dokumen_selesai' => '2,421',
            'dokumen_tersisa' => 426,
            'persen_penyimpanan' => 65
        ];

        return view('dashboard', compact('documents', 'stats'));
    }
}