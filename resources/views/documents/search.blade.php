@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">
    
    <div class="mb-4">
        <h4 class="fw-bold text-dark mb-1" style="font-size: 28px; opacity: 0.8;">Cari Dokumen</h4>
        <p class="text-muted small mb-0">Temukan dokumen yang telah digitalisasi dengan cepat dan mudah</p>
    </div>

<form action="{{ route('app.documents.search') }}" method="GET">
    <div class="card border-0 shadow-sm p-3 bg-white mb-4" style="border-radius: 12px;">
        <div class="row g-3 align-items-center">
            <div class="col-12 col-md-6">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0 text-muted" style="border-radius: 8px 0 0 8px;">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" name="keyword" class="form-control border-start-0" 
                           placeholder="Cari ID atau Nama..." 
                           style="font-size: 14px; border-radius: 0 8px 8px 0;" 
                           value="{{ request('keyword') }}">
                </div>
            </div>

            <div class="col-6 col-md-3">
                <select name="status" class="form-select" style="font-size: 14px; border-radius: 8px;" onchange="this.form.submit()">
                    <option value="">Semua Status</option>
                    <option value="Completed" {{ request('status') == 'Completed' ? 'selected' : '' }}>Completed</option>
                    <option value="Processing" {{ request('status') == 'Processing' ? 'selected' : '' }}>Processing</option>
                    <option value="Pick Up" {{ request('status') == 'Pick Up' ? 'selected' : '' }}>Pick Up</option>
                </select>
            </div>
        </div>
    </div>
</form>

    <div class="mb-3 px-1">
        <p class="text-muted small">Menampilkan <span class="fw-bold text-dark">{{ $documents->count() }}</span> dokumen</p>
    </div>

    <div class="d-flex flex-column gap-3">
        @forelse($documents as $doc)
            <div class="card border-0 shadow-sm rounded-4 p-4 bg-white hover-shadow transition-all">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                    
                    <div class="d-flex align-items-center gap-3">
                        <div class="rounded-3 bg-light d-flex align-items-center justify-content-center text-secondary border" style="width: 48px; height: 48px; flex-shrink: 0; background-color: #f8f9fa;">
                            <i class="fa-solid fa-file-lines fs-4 opacity-50"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1" style="font-size: 16px;">{{ $doc['nama'] }}</h5>
                            <div class="d-flex gap-3 text-muted align-items-center flex-wrap" style="font-size: 13px;">
                                <span class="fw-medium text-secondary">{{ $doc['id'] }}</span>
                                <span>•</span>
                                <span>No: RM/2030/0032</span>
                            </div>
                            
                            <div class="d-flex gap-3 align-items-center text-muted mt-2 flex-wrap" style="font-size: 12px;">
                                <div class="d-flex align-items-center gap-1">
                                    <i class="fa-solid fa-calendar-days opacity-60"></i>
                                    <span>{{ $doc['tanggal'] }}</span>
                                </div>
                                <span class="badge {{ $doc['status'] == 'Completed' ? 'bg-success text-white' : ($doc['status'] == 'Processing' ? 'bg-primary text-white' : 'bg-info text-dark') }} px-3 py-1 rounded-pill fw-semibold" style="font-size: 11px;">
                                    {{ $doc['status'] }}
                                </span>
                                <div class="d-flex align-items-center gap-1">
                                    <span>Banjarmasin</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a href="{{ route('app.documents.show', $doc['id']) }}" class="btn btn-sm text-white px-4 py-2 d-flex align-items-center gap-2 rounded-3 shadow-sm" style="background-color: #0B2545; font-size: 13px; font-weight: 500; text-decoration: none;">
                            <i class="fa-regular fa-eye"></i> Preview
                        </a>
                    </div>

                </div>
            </div>
        @empty
            <div class="card border-0 shadow-sm rounded-4 p-5 text-center bg-white">
                <div class="py-4">
                    <i class="fa-solid fa-box-open text-muted mb-3" style="font-size: 50px; opacity: 0.3;"></i>
                    <h5 class="fw-bold text-secondary">Arsip Tidak Ditemukan</h5>
                    <p class="text-muted small mb-0">Tidak ada dokumen dengan nama atau ID "<span class="text-danger fw-medium">{{ $keyword }}</span>".</p>
                </div>
            </div>
        @endforelse
    </div>

</div>

<style>
    .hover-shadow:hover {
        transform: translateY(-2px);
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.05)!important;
    }
    .transition-all {
        transition: all 0.2s ease-in-out;
    }
</style>
@endsection