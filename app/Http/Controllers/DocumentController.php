<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Data Dummy Arsip (Disatukan dalam fungsi privat agar bisa dipakai bersama)
     */
    private function getDummyData()
    {
        return collect([
            ['id' => 'PRJ-2030-032', 'nama' => 'Rekam Medis Pasien Rawat Inap 2021', 'kategori' => 'Medis', 'tanggal' => '19 April 2030', 'lokasi' => 'Gedung A - Rak 4', 'status' => 'Completed'],
            ['id' => 'PRJ-2030-033', 'nama' => 'Hasil Pemeriksaan Radiologi & MRI', 'kategori' => 'Medis', 'tanggal' => '19 April 2030', 'lokasi' => 'Gedung A - Rak 2', 'status' => 'Processing'],
            ['id' => 'PRJ-2030-034', 'nama' => 'Arsip Surat Izin Praktik Dokter (SIP)', 'kategori' => 'Legalitas', 'tanggal' => '18 April 2030', 'lokasi' => 'Gedung B - Lemari 1', 'status' => 'Pick Up'],
            ['id' => 'PRJ-2030-035', 'nama' => 'Data Inventaris Alkes Ruang IGD', 'kategori' => 'Logistik', 'tanggal' => '15 April 2030', 'lokasi' => 'Gedung C - Box 12', 'status' => 'Completed'],
        ]);
    }

    /**
     * Halaman Riwayat Digitalisasi (Fungsi Asli Kalian)
     */
    public function history(Request $request)
    {
        $allData = $this->getDummyData();

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

    /**
     * TAMBAHKAN INI: Fungsi untuk Menangkap Search dari Navbar Atas
     */
public function search(Request $request)
{
    $keyword = $request->query('keyword');
    $status = $request->query('status');
    $sort = $request->query('sort', 'newest'); // default newest

    $documents = collect($this->getDummyData());

    // 1. Filter Keyword
    if ($keyword) {
        $documents = $documents->filter(function ($item) use ($keyword) {
            return str_contains(strtolower($item['nama']), strtolower($keyword)) || 
                   str_contains(strtolower($item['id']), strtolower($keyword));
        });
    }

    // 2. Filter Status
    if ($status) {
        $documents = $documents->filter(fn($item) => $item['status'] === $status);
    }

    // 3. Sorting (asumsi $item['tanggal'] dalam format date)
    if ($sort === 'oldest') {
        $documents = $documents->sortBy('tanggal');
    } else {
        $documents = $documents->sortByDesc('tanggal');
    }

    return view('documents.search', [
        'documents' => $documents,
        'keyword' => $keyword
    ]);
}

    public function show($id)
    {
        // 1. Ambil semua data dummy kita
        $allData = $this->getDummyData();

        // 2. Cari data yang ID-nya pas cocok dengan yang diklik user
        $document = $allData->firstWhere('id', $id);

        // 3. Kalau ID ngawur atau data tidak ketemu, lempar balik ke halaman cari
        if (!$document) {
            return redirect()->route('app.documents.search')->with('error', 'Dokumen tidak ditemukan.');
        }

        // 4. Kirim data dokumen tersebut ke view preview
        return view('documents.show', [
            'doc' => $document
        ]);
    }
}