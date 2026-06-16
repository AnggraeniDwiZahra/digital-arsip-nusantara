@extends('layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="mb-4">
        <h4 class="fw-bold mb-1 text-dark">Dashboard</h4>
        <p class="text-muted small">Selamat datang kembali! Berikut adalah ringkasan aktivitas arsip Anda</p>
    </div>

    <div class="row g-3 mb-4">

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