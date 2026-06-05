@extends('layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="mb-4">
        <h4 class="fw-bold mb-1 text-dark">Dashboard</h4>
        <p class="text-muted small">Selamat datang kembali! Berikut adalah ringkasan aktivitas arsip Anda</p>
    </div>

    <div class="row g-3 mb-4">
        <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm p-4 h-100 bg-white" style="border-radius: 12px;">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <h6 class="text-muted fw-semibold mb-0" style="font-size: 14px;">Total Dokumen</h6>
                    <span class="text-secondary"><i class="fa-solid fa-file-lines fs-5"></i></span>
                </div>
                <h2 class="fw-bold mb-2 text-dark">{{ $stats['total_dokumen'] }}</h2>
                <span class="text-success small fw-medium">
                    <i class="fa-solid fa-arrow-trend-up me-1"></i> {{ $stats['tren_bulan_lalu'] }} dari bulan lalu
                </span>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm p-4 h-100 bg-white" style="border-radius: 12px;">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <h6 class="text-muted fw-semibold mb-0" style="font-size: 14px;">Progress Proyek</h6>
                    <span class="text-secondary"><i class="fa-solid fa-folder-closed fs-5"></i></span>
                </div>
                <h2 class="fw-bold mb-3 text-dark">{{ $stats['progress_proyek'] }}%</h2>
                <div class="progress" style="height: 6px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $stats['progress_proyek'] }}%" aria-valuenow="{{ $stats['progress_proyek'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted mt-2 d-block" style="font-size: 11px;">Sesuai jadwal penyelesaian</small>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card border-0 shadow-sm p-4 h-100 bg-white" style="border-radius: 12px;">
                <div class="d-flex justify-content-between align-items-start mb-3">
                    <h6 class="text-muted fw-semibold mb-0" style="font-size: 14px;">Penyimpanan Database</h6>
                    <span class="text-secondary"><i class="fa-solid fa-database fs-5"></i></span>
                </div>
                <h2 class="fw-bold mb-2 text-dark">{{ $stats['penyimpanan_terpakai'] }} GB</h2>
                <div class="d-flex align-items-center justify-content-between mt-3">
                    <div class="progress flex-grow-1 me-3" style="height: 6px;">
                        <div class="progress-bar bg-dark" role="progressbar" style="width: {{ $stats['persen_penyimpanan'] }}%" aria-valuenow="{{ $stats['persen_penyimpanan'] }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small class="text-muted" style="font-size: 11px; white-space: nowrap;">{{ $stats['persen_penyimpanan'] }}% dari {{ $stats['penyimpanan_maksimal'] }} GB</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-12">
            <div class="card border-0 shadow-sm p-4 bg-white mb-4" style="border-radius: 12px;">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="fw-bold mb-0 text-dark" style="font-size: 15px;">Digitalisasi Arsip Keseluruhan</h6>
                    <span class="fw-bold text-primary">{{ $stats['progress_proyek'] }}%</span>
                </div>
                <div class="progress mb-3" style="height: 10px; border-radius: 5px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $stats['progress_proyek'] }}%"></div>
                </div>
                <div class="d-flex justify-content-between text-muted" style="font-size: 12px;">
                    <span>{{ $stats['dokumen_selesai'] }} dokumen selesai</span>
                    <span>{{ $stats['dokumen_tersisa'] }} tersisa</span>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card border-0 shadow-sm p-4 bg-white" style="border-radius: 12px;">
                <h6 class="fw-bold mb-4 text-dark" style="font-size: 15px;">Aktivitas Dokumen Terkini</h6>
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0" style="font-size: 13px;">
                        <thead class="table-light text-muted">
                            <tr>
                                <th class="py-3">ID Proyek</th>
                                <th class="py-3">Nama Dokumen</th>
                                <th class="py-3">Tanggal</th>
                                <th class="py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($documents as $doc)
                            <tr>
                                <td class="fw-bold py-3 text-secondary">{{ $doc['id'] }}</td>
                                <td class="fw-semibold text-dark">{{ $doc['nama'] }}</td>
                                <td class="text-muted">{{ $doc['tanggal'] }}</td>
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection