@extends('layouts.app')

@section('content')
<div class="container-fluid px-4 py-4">

    <div class="mb-4">
        <div class="d-flex align-items-center gap-3 mb-3">
            <a href="{{ route('app.documents.search') }}" class="btn btn-white border shadow-sm rounded-3 px-3 py-2 text-dark fw-medium">
                <i class="fa-solid fa-arrow-left me-2"></i> Kembali
            </a>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 small fw-medium">
                    <li class="breadcrumb-item text-muted">Cari Dokumen</li>
                    <li class="breadcrumb-item active text-dark" aria-current="page">{{ $doc['nama'] }}</li>
                </ol>
            </nav>
        </div>
        <h4 class="fw-bold text-dark mb-1" style="font-size: 26px;">Preview Dokumen</h4>
        <p class="text-muted small">Lihat detail lengkap dan pratinjau dokumen yang telah didigitalisasi</p>
    </div>

    <div class="row g-4">
        
        <div class="col-lg-8">
            <div class="card border-0 shadow-sm rounded-4 mb-4 p-4">
                <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="fa-solid fa-file-lines text-primary fs-4"></i>
                            <h5 class="fw-bold text-dark mb-0">{{ $doc['nama'] }}</h5>
                        </div>
                        <div class="d-flex align-items-center gap-3 text-muted" style="font-size: 13px;">
                            <span class="fw-bold">{{ $doc['id'] }}</span>
                            <span>•</span>
                            <span>No: RM/2030/0032</span>
                            <span>•</span>
                            <span class="badge {{ $doc['status'] == 'Completed' ? 'bg-success' : 'bg-warning' }} rounded-pill px-3">
                                {{ $doc['status'] }}
                            </span>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-dark rounded-3 px-3 py-2 btn-sm fw-bold" onclick="alert('Mulai mengunduh dokumen: {{ $doc['id'] }}.pdf')">
                                <i class="fa-solid fa-download me-1"></i> Download
                            </a>
                        </div>    
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 p-5 bg-white border">
                <div class="d-flex justify-content-between align-items-center border-bottom pb-4 mb-4">
                    <div>
                        <small class="text-muted fw-bold tracking-wider d-block mb-1">REKAM MEDIS DIGITAL</small>
                        <h4 class="fw-extrabold text-primary mb-0" style="letter-spacing: -0.5px;">RS MITRA JAYA</h4>
                    </div>
                    <div class="text-end">
                        <small class="text-muted d-block">Halaman 1 dari 5</small>
                        <small class="fw-bold text-dark">{{ $doc['id'] }}</small>
                    </div>
                </div>

                <div class="row g-4 text-sm mb-4">
                    <div class="col-md-6">
                        <label class="text-muted small d-block mb-1">Nama Pasien / Berkas</label>
                        <span class="fw-bold text-dark d-block">{{ $doc['nama'] }}</span>
                    </div>
                    <div class="col-md-6">
                        <label class="text-muted small d-block mb-1">No. Rekam Medis</label>
                        <span class="fw-bold text-dark d-block">RM-2021-00456</span>
                    </div>
                    <div class="col-md-6">
                        <label class="text-muted small d-block mb-1">Tanggal Efektif</label>
                        <span class="fw-bold text-dark d-block">{{ $doc['tanggal'] }}</span>
                    </div>
                    <div class="col-md-6">
                        <label class="text-muted small d-block mb-1">Kategori Dokumen</label>
                        <span class="fw-bold text-dark d-block">{{ $doc['kategori'] }}</span>
                    </div>
                </div>

                <hr class="text-muted opacity-25 mb-4">

                <div class="mb-4">
                    <label class="text-muted small d-block mb-2 font-semibold text-uppercase">Diagnosis / Keterangan</label>
                    <div class="p-3 rounded-3 bg-light border-start border-primary border-4">
                        <p class="mb-0 fw-bold text-dark small">
                            Dokumen ini telah divalidasi oleh sistem Digital-Arsip Nusantara dengan kategori [{{ $doc['kategori'] }}].
                        </p>
                    </div>
                </div>

                <div class="row g-4">
                    <div class="col-md-6">
                        <label class="text-muted small d-block mb-1">Lokasi Rak Fisik</label>
                        <span class="fw-bold text-dark d-block">{{ $doc['lokasi'] }}</span>
                    </div>
                    <div class="col-md-6">
                        <label class="text-muted small d-block mb-1">Petugas Verifikator</label>
                        <span class="fw-bold text-dark d-block">Admin User / Kurator 1</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden sticky-top" style="top: 20px;">
                <div class="card-header bg-primary text-white py-3 border-0" style="background-color: #0B2545 !important;">
                    <h6 class="mb-0 fw-bold text-center">Metadata Dokumen</h6>
                </div>
                <div class="card-body p-4">
                    <ul class="list-unstyled mb-0 d-flex flex-column gap-4">
                        <li class="d-flex align-items-start gap-3">
                            <div class="text-primary fs-5 mt-1"><i class="fa-solid fa-calendar-check"></i></div>
                            <div>
                                <small class="text-muted d-block">Tanggal Upload</small>
                                <span class="fw-bold text-dark">{{ $doc['tanggal'] }}</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="text-primary fs-5 mt-1"><i class="fa-solid fa-tags"></i></div>
                            <div>
                                <small class="text-muted d-block">Klasifikasi</small>
                                <span class="fw-bold text-dark">{{ $doc['kategori'] }}</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="text-primary fs-5 mt-1"><i class="fa-solid fa-map-location-dot"></i></div>
                            <div>
                                <small class="text-muted d-block">Penyimpanan Fisik</small>
                                <span class="fw-bold text-dark">{{ $doc['lokasi'] }}</span>
                            </div>
                        </li>
                        <li class="d-flex align-items-start gap-3">
                            <div class="text-primary fs-5 mt-1"><i class="fa-solid fa-hard-drive"></i></div>
                            <div>
                                <small class="text-muted d-block">Ukuran & Format</small>
                                <span class="fw-bold text-dark">2.4 MB (PDF)</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer bg-light border-0 p-4">
                    <button class="btn btn-outline-primary w-100 rounded-3 fw-bold btn-sm" onclick="shareDoc()">
                        <i class="fa-solid fa-share-nodes me-2"></i> Bagikan Link Preview
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    /* Menyesuaikan style dengan layout dashboard */
    .btn-white {
        background-color: #fff;
    }
    .btn-white:hover {
        background-color: #f8f9fa;
    }
    .breadcrumb-item + .breadcrumb-item::before {
        content: "❯";
        font-size: 10px;
        color: #ccc;
    }
    .fw-extrabold { font-weight: 800; }
</style>

<script>
    function shareDoc() {
        const shareData = {
            title: 'Digital-Arsip Nusantara',
            text: 'Cek dokumen: {{ $doc['nama'] }}',
            url: window.location.href,
        };

        // Coba pakai fitur share bawaan HP/Browser
        if (navigator.share && navigator.canShare(shareData)) {
            navigator.share(shareData)
                .then(() => console.log('Berhasil dibagikan!'))
                .catch((error) => {
                    console.log('Error sharing, fallback to clipboard', error);
                    copyToClipboard();
                });
        } else {
            // Kalau tidak didukung, langsung copy ke clipboard
            copyToClipboard();
        }
    }

    function copyToClipboard() {
        navigator.clipboard.writeText(window.location.href)
            .then(() => {
                alert('Link dokumen berhasil disalin ke clipboard!');
            })
            .catch(err => {
                alert('Gagal menyalin link.');
            });
    }
</script>
@endsection