<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function history(Request $request)
    {
        $allData = collect([
            ['id' => 'PRJ-2030-032', 'nama' => 'Rekam Medis Pasien Rawat Inap 2021', 'kategori' => 'Medis', 'tanggal' => '19 April 2030', 'lokasi' => 'Gedung A - Rak 4', 'status' => 'Completed'],
            ['id' => 'PRJ-2030-033', 'nama' => 'Hasil Pemeriksaan Radiologi & MRI', 'kategori' => 'Medis', 'tanggal' => '19 April 2030', 'lokasi' => 'Gedung A - Rak 2', 'status' => 'Processing'],
            ['id' => 'PRJ-2030-034', 'nama' => 'Arsip Surat Izin Praktik Dokter (SIP)', 'kategori' => 'Legalitas', 'tanggal' => '18 April 2030', 'lokasi' => 'Gedung B - Lemari 1', 'status' => 'Pick Up'],
            ['id' => 'PRJ-2030-035', 'nama' => 'Data Inventaris Alkes Ruang IGD', 'kategori' => 'Logistik', 'tanggal' => '15 April 2030', 'lokasi' => 'Gedung C - Box 12', 'status' => 'Completed'],
        ]);

        $search = $request->query('search');
        $status = $request->query('status');
        $lokasi = $request->query('lokasi');

        $filteredData = $allData;

        if ($search) {
            $filteredData = $filteredData->filter(function ($item) use ($search) {
                return str_contains(strtolower($item['nama']), strtolower($search)) || 
                       str_contains(strtolower($item['id']), strtolower($search));
            });
        }

        if ($status && $status !== 'Semua Status') {
            $filteredData = $filteredData->where('status', $status);
        }

        if ($lokasi && $lokasi !== 'Semua Lokasi') {
            $filteredData = $filteredData->filter(function ($item) use ($lokasi) {
                return str_contains($item['lokasi'], $lokasi);
            });
        }

        return view('documents.history', [
            'documents' => $filteredData
        ]);
    }
}