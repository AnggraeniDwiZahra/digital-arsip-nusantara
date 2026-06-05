@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-3">
    <div class="mb-4">
        <h4 class="fw-bold mb-1 text-dark">Riwayat Digitalisasi</h4>
        <p class="text-muted small mb-0">Lacak dan kelola semua progres proyek digitalisasi arsip Anda</p>
    </div>

    <form action="/riwayat" method="GET">
        <div class="card border-0 shadow-sm p-3 bg-white mb-4" style="border-radius: 12px;">
            <div class="row g-3 align-items-center">
                <div class="col-12 col-md-6">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0 text-muted" style="border-radius: 8px 0 0 8px;">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <input type="text" name="search" class="form-control border-start-0" placeholder="Cari ID Proyek atau Nama..." style="font-size: 14px; border-radius: 0 8px 8px 0;" value="{{ request('search') }}">
                    </div>
                </div>
                
                <div class="col-6 col-md-3">
                    <select name="status" class="form-select" style="font-size: 14px; border-radius: 8px;" onchange="this.form.submit()">
                        <option value="Semua Status" {{ request('status') == 'Semua Status' ? 'selected' : '' }}>Semua Status</option>
                        <option value="Completed" {{ request('status') == 'Completed' ? 'selected' : '' }}>Completed</option>
                        <option value="Processing" {{ request('status') == 'Processing' ? 'selected' : '' }}>Processing</option>
                        <option value="Pick Up" {{ request('status') == 'Pick Up' ? 'selected' : '' }}>Pick Up</option>
                    </select>
                </div>

                <div class="col-6 col-md-3">
                    <select name="lokasi" class="form-select" style="font-size: 14px; border-radius: 8px;" onchange="this.form.submit()">
                        <option value="Semua Lokasi" {{ request('lokasi') == 'Semua Lokasi' ? 'selected' : '' }}>Semua Lokasi</option>
                        <option value="Gedung A" {{ request('lokasi') == 'Gedung A' ? 'selected' : '' }}>Gedung A</option>
                        <option value="Gedung B" {{ request('lokasi') == 'Gedung B' ? 'selected' : '' }}>Gedung B</option>
                        <option value="Gedung C" {{ request('lokasi') == 'Gedung C' ? 'selected' : '' }}>Gedung C</option>
                        <option value="Ruang Arsip Utama" {{ request('lokasi') == 'Ruang Arsip Utama' ? 'selected' : '' }}>Ruang Arsip Utama</option>
                    </select>
                </div>
            </div>
        </div>
    </form>

    <div class="card border-0 shadow-sm p-4 bg-white" style="border-radius: 12px;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0" style="font-size: 13px;">
                <thead class="table-light text-muted">
                    <tr>
                        <th class="py-3">ID Proyek</th>
                        <th class="py-3">Nama Dokumen</th>
                        <th class="py-3">Tanggal Mulai</th>
                        <th class="py-3">Lokasi Fisik</th>
                        <th class="py-3">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($documents as $doc)
                    <tr>
                        <td class="fw-bold py-3 text-secondary">{{ $doc['id'] }}</td>
                        <td>
                            <div class="fw-semibold text-dark">{{ $doc['nama'] }}</div>
                            <small class="text-muted" style="font-size: 11px;">Kategori: {{ $doc['kategori'] }}</small>
                        </td>
                        <td class="text-muted">{{ $doc['tanggal'] }}</td>
                        <td><span class="badge bg-light text-dark px-2 py-1">{{ $doc['lokasi'] }}</span></td>
                        <td>
                            @if($doc['status'] == 'Completed')
                                <span class="badge bg-success-subtle text-success border border-success-subtle px-2.5 py-1.5" style="border-radius: 20px;">Completed</span>
                            @elseif($doc['status'] == 'Processing')
                                <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2.5 py-1.5" style="border-radius: 20px;">Processing</span>
                            @else
                                <span class="badge bg-warning-subtle text-warning border border-warning-subtle px-2.5 py-1.5" style="border-radius: 20px;">Pick Up</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-5 fs-6">
                            <i class="fa-solid fa-folder-open d-block mb-2 text-secondary opacity-50 fs-2"></i>
                            Ups, data arsip tidak ditemukan dengan filter tersebut.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top">
            <small class="text-muted">Menampilkan {{ count($documents) }} data arsip</small>
            <nav>
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection