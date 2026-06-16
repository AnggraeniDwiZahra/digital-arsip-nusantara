<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Digital-Arsip Nusantara - Solusi Manajemen Dokumen Terintegrasi</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f8fafc;
            color: #1e293b; /* Warna teks utama lebih gelap (Slate 800) agar kontras */
        }
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }
        /* Custom Spacing & Soft Elements */
        .section-padding {
            padding-top: 100px;
            padding-bottom: 100px;
        }
        .hero-gradient {
            background: radial-gradient(circle at 80% 20%, #1e3a8a 0%, #0f172a 100%);
        }
        .card-custom {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 40px;
            height: 100%;
            transition: all 0.3s ease;
        }
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.04);
        }
        .card-dark {
            background-color: #0f172a;
            color: #ffffff;
            border: none;
        }
        .badge-custom {
            background-color: #eff6ff;
            color: #2563eb;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.5px;
            display: inline-block;
        }
        .cta-box {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
            border-radius: 30px;
            padding: 80px 40px;
        }
        /* Utilitas Warna Kustom Kontras Tinggi */
        .text-slate-600 {
            color: #475569 !important; /* Abu-abu gelap, sangat terbaca */
        }
        .text-slate-300 {
            color: #cbd5e1 !important; /* Putih keabu-abuan terang untuk background gelap */
        }
    </style>
</head>
<body>

    <!-- 1. NAVBAR -->
    <!-- 1. NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm border-bottom py-3">
        <div class="container">
            <!-- Brand Logo (Otomatis ke Dashboard jika sudah login) -->
            <a class="navbar-brand d-flex align-items-center" href="@auth {{ route('app.dashboard') }} @endauth @guest # @endguest">
                <div class="p-2 bg-primary text-white rounded-3 me-3 d-flex align-items-center justify-content-center" style="width: 42px; height: 42px;">
                    <svg class="w-100 h-100" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="width: 24px;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                    </svg>
                </div>
                <div>
                    <h1 class="fs-6 fw-bold m-0 tracking-wider text-dark" style="font-size: 14px !important;">PT DIGITAL-ARSIP</h1>
                    <span class="text-dark fw-bold tracking-widest uppercase d-block" style="font-size: 10px; opacity: 0.8;">NUSANTARA</span>
                </div>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Menu Navigasi -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav mx-auto gap-lg-4 fw-bold" style="font-size: 14px;">
                    <li class="nav-item"><a class="nav-link text-dark" href="#solutions">Solutions</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#technology">Technology</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#standards">Archival Standards</a></li>
                    <li class="nav-item"><a class="nav-link text-dark" href="#about">About</a></li>
                </ul>
                
                <!-- Cek status login user secara dinamis (TANPA EMOJI) -->
                @guest
                    <!-- Jika USER BELUM LOGIN, tampilkan tombol LOGIN -->
                    <a href="{{ route('login') }}" class="btn btn-dark fw-bold px-4 py-2 rounded-3" style="font-size: 14px;">LOGIN</a>
                @endguest

                @auth
                    <!-- Jika USER SUDAH LOGIN, ganti tombol menjadi KE DASHBOARD -->
                    <a href="{{ route('app.dashboard') }}" class="btn btn-primary fw-bold px-4 py-2 rounded-3" style="font-size: 14px;">
                        Ke Dashboard
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- 2. HERO SECTION -->
    <section class="hero-gradient text-white d-flex align-items-center" style="padding: 100px 0; min-height: 80vh;">
        <div class="container">
            <div class="row align-items-center g-5">
                <!-- Teks Kiri -->
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge-custom bg-opacity-10 bg-white text-info mb-4 border border-info border-opacity-30">
                        PRESERVASI ARSIP KELAS ENTERPRISE
                    </span>
                    <h1 class="display-4 fw-extrabold mb-4 lh-tight tracking-tight" style="font-weight: 800;">
                        Digitalisasi Dokumen <br>
                        <span class="text-info">Presisi & Terpercaya</span>
                    </h1>
                    <p class="lead text-slate-300 mb-0 fs-6 max-w-xl" style="line-height: 1.8;">
                        Transformasi arsip fisik menjadi aset digital cerdas berbasis AI dengan tingkat akurasi OCR tinggi dan infrastruktur keamanan tingkat perbankan.
                    </p>
                </div>
                
                <!-- Sisi Kanan: Server Rack Graphic style persis referensi -->
                <div class="col-lg-5 d-flex justify-content-center position-relative">
                    <div class="card bg-dark bg-opacity-50 p-2 shadow-lg border border-secondary border-opacity-30 position-relative rounded-4 w-100" style="max-width: 420px; height: 380px;">
                        <div class="d-flex align-items-center justify-content-center h-75 opacity-90">
                            <svg class="text-info" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="width: 160px; height: 160px;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                <circle cx="6" cy="8" r="1" fill="currentColor" />
                                <circle cx="6" cy="16" r="1" fill="#10B981" />
                            </svg>
                        </div>
                        <div class="position-absolute bottom-0 start-0 end-0 m-4 bg-dark bg-opacity-90 border border-secondary border-opacity-30 p-4 rounded-3 d-flex justify-content-between align-items-center shadow">
                            <div>
                                <small class="text-info fw-bold tracking-widest text-uppercase d-block" style="font-size: 10px;">Akurasi Ekstraksi</small>
                                <h3 class="m-0 fw-bold text-white mt-1">99.9% <span class="fs-6 text-slate-300 font-normal">(OCR / AI)</span></h3>
                            </div>
                            <div class="fs-3">🤖</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. PARTNERS LOGO -->
    <section class="bg-white py-5 border-bottom border-light">
        <div class="container text-center">
            <p class="text-uppercase tracking-widest text-dark fw-bold mb-4" style="font-size: 11px; opacity: 0.6;">Mitra Infrastruktur & Teknologi Resmi</p>
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-5 fw-bold fs-4 text-dark opacity-75">
                <span class="px-3">FUJITSU</span>
                <span class="px-3">Synology</span>
                <span class="px-3">EPSON</span>
                <span class="px-3">KODAK</span>
            </div>
        </div>
    </section>

    <!-- 4. SOLUTIONS SECTION (Grid Box Layout Persis Gambar) -->
    <section id="solutions" class="section-padding">
        <div class="container">
            <div class="text-center max-w-3xl mx-auto mb-5">
                <span class="badge-custom mb-3">Our Core Services</span>
                <h2 class="fw-bold text-dark tracking-tight display-6">Solusi End-to-End untuk Ekosistem Arsip Anda</h2>
                <p class="text-slate-600 mt-3 col-md-8 mx-auto" style="font-size: 15px;">Kami mengintegrasikan teknologi pemindaian berkecepatan tinggi dengan kecerdasan buatan (OCR) untuk mengamankan data penting Anda secara lokal dan cloud.</p>
            </div>
            
            <div class="row g-4 justify-content-center mt-4">
                <!-- Solusi 1 (Kartu Gelap/Besar di Referensi) -->
                <div class="col-lg-6 col-md-12">
                    <div class="card-custom card-dark d-flex flex-column justify-content-between">
                        <div>
                            <div class="p-3 bg-opacity-10 bg-white rounded-3 d-inline-block fs-3 mb-4">📄</div>
                            <h3 class="fw-bold mb-3 text-white">Jasa Digitalisasi Massal</h3>
                            <p class="text-slate-300" style="font-size: 14px; line-height: 1.7;">Kami mengonversi arsip fisik berskala besar (5.000 hingga 10.000 lembar per hari) mulai dari ukuran kuitansi kecil, lembaran rekam medis, hingga kertas blueprint berukuran besar (A3) menjadi format digital terenkripsi.</p>
                        </div>
                        <div class="d-flex flex-wrap gap-2 mt-4">
                            <span class="badge bg-secondary bg-opacity-30 text-light py-2 px-3 rounded-pill text-uppercase font-bold" style="font-size: 10px;">High Volume (ADF)</span>
                            <span class="badge bg-secondary bg-opacity-30 text-light py-2 px-3 rounded-pill text-uppercase font-bold" style="font-size: 10px;">Fragile Paper Treatment</span>
                        </div>
                    </div>
                </div>

                <!-- Solusi 2 (Kartu Kanan di Referensi) -->
                <div class="col-lg-4 col-md-12">
                    <div class="card-custom d-flex flex-column justify-content-between">
                        <div>
                            <div class="p-3 bg-light rounded-3 d-inline-block fs-3 mb-4">🤖</div>
                            <h3 class="fw-bold mb-3 text-dark">Keunggulan OCR</h3>
                            <p class="text-slate-600" style="font-size: 14px; line-height: 1.7;">Mengekstraksi teks dari gambar pindaian menggunakan teknologi OCR pintar. Mempermudah pencarian berbasis kata kunci instan seperti NIK atau nama pasien.</p>
                        </div>
                        <ul class="list-unstyled mt-4 p-3 bg-light rounded-3 mb-0" style="font-size: 13px; font-weight: 600;">
                            <li class="mb-2 text-dark"><span class="text-success me-2">✓</span> Pencarian Kata Kunci Instan</li>
                            <li class="mb-2 text-dark"><span class="text-success me-2">✓</span> Konversi Format PDF/A Terindeks</li>
                            <li class="text-dark"><span class="text-success me-2">✓</span> Validasi Metadata Otomatis</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. TECHNOLOGY SECTION (3 Kolom Sejajar) -->
    <section id="technology" class="section-padding bg-dark text-white rounded-5 mx-3 my-5">
        <div class="container">
            <div class="text-center max-w-2xl mx-auto mb-5">
                <span class="badge-custom bg-opacity-10 bg-white text-info mb-3">Tech Stack & Security</span>
                <h2 class="fw-bold tracking-tight">Infrastruktur Teknologi & Keamanan Berlapis</h2>
                <p class="text-slate-300 mt-2 small">Keamanan data kearsipan Anda dikelola menggunakan standar industri dan pengamanan berkelas militer.</p>
            </div>

            <div class="row g-4 mt-2">
                <!-- Tech 1 -->
                <div class="col-md-4">
                    <div class="p-4 bg-secondary bg-opacity-10 border border-secondary border-opacity-20 rounded-4 h-100">
                        <div class="fs-3 mb-3">💾</div>
                        <h4 class="fw-bold fs-5 mb-3 text-white">Penyimpanan Terpusat (NAS)</h4>
                        <p class="text-slate-300 small lh-relaxed">Menggunakan unit penyimpanan lokal berspesifikasi tinggi (Synology NAS) dengan konfigurasi RAID untuk mencegah hilangnya data jika terjadi kerusakan perangkat keras.</p>
                    </div>
                </div>
                <!-- Tech 2 -->
                <div class="col-md-4">
                    <div class="p-4 bg-secondary bg-opacity-10 border border-secondary border-opacity-20 rounded-4 h-100">
                        <div class="fs-3 mb-3">🛡</div>
                        <h4 class="fw-bold fs-5 mb-3 text-white">Zonasi Keamanan Fisik</h4>
                        <p class="text-slate-300 small lh-relaxed">Fasilitas operasional kami dibagi menjadi 3 zona: Green Zone, Yellow Zone, dan Red Zone (Biometrik khusus) dengan sistem CCTV inframerah yang aktif 24 jam penuh.</p>
                    </div>
                </div>
                <!-- Tech 3 -->
                <div class="col-md-4">
                    <div class="p-4 bg-secondary bg-opacity-10 border border-secondary border-opacity-20 rounded-4 h-100">
                        <div class="fs-3 mb-3">🔒</div>
                        <h4 class="fw-bold fs-5 mb-3 text-white">Zero Device Policy</h4>
                        <p class="text-slate-300 small lh-relaxed">Seluruh staf di area Red Zone (pemindaian) dilarang membawa perangkat pribadi seperti ponsel atau flashdisk untuk menjaga kerahasiaan data rahasia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. ARCHIVAL STANDARDS SECTION -->
    <section id="standards" class="section-padding bg-light border-top border-bottom">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <span class="badge-custom mb-3">Kepatuhan Regulasi Nasional</span>
                    <h2 class="fw-bold text-dark mb-4 tracking-tight">Menjawab Kebutuhan SPBE & Standar ANRI</h2>
                    <p class="text-slate-600 mb-4" style="font-size: 15px; line-height: 1.8;">
                        Berdasarkan laporan evaluasi nasional, terdapat kesenjangan kinerja kearsipan digital daerah yang mencapai 56%. PT Digital-Arsip Nusantara hadir untuk membantu memperkecil kesenjangan tersebut melalui sistem kearsipan modern yang sejalan dengan standar regulasi Arsip Nasional Republik Indonesia (ANRI) dan Sistem Pemerintahan Berbasis Elektronik (SPBE).
                    </p>
                    <div class="row g-4 pt-3 border-top">
                        <div class="col-6 border-start border-primary border-4 ps-3">
                            <span class="display-6 fw-bold text-dark d-block tracking-tight">43%</span>
                            <span class="small text-dark fw-bold">Rata-rata Kearsipan Daerah</span>
                        </div>
                        <div class="col-6 border-start border-success border-4 ps-3">
                            <span class="display-6 fw-bold text-dark d-block tracking-tight">99%</span>
                            <span class="small text-dark fw-bold">Standar Kearsipan Pusat</span>
                        </div>
                    </div>
                </div>
                
                <!-- Progress Bars Card -->
                <div class="col-lg-6">
                    <div class="card-custom shadow-sm border-0">
                        <h5 class="fw-bold text-uppercase text-dark mb-4" style="font-size: 11px; letter-spacing: 1px; opacity: 0.7;">Status Digitalisasi Arsip Nasional (Proyeksi 2024–2026)</h5>
                        
                        <div class="mb-4">
                            <div class="d-flex justify-content-between small fw-bold text-dark mb-2">
                                <span>Pemerintah Pusat</span>
                                <span class="text-success fw-bold">99%</span>
                            </div>
                            <div class="progress" style="height: 8px; background-color: #e2e8f0;">
                                <div class="progress-bar bg-success rounded-pill" style="width: 99%"></div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <div class="d-flex justify-content-between small fw-bold text-dark mb-2">
                                <span>Pemerintah Provinsi</span>
                                <span class="text-warning fw-bold">65%</span>
                            </div>
                            <div class="progress" style="height: 8px; background-color: #e2e8f0;">
                                <div class="progress-bar bg-warning rounded-pill" style="width: 65%"></div>
                            </div>
                        </div>
                        
                        <div>
                            <div class="d-flex justify-content-between small fw-bold text-dark mb-2">
                                <span>Pemerintah Daerah (Kabupaten/Kota)</span>
                                <span class="text-danger fw-bold">43%</span>
                            </div>
                            <div class="progress" style="height: 8px; background-color: #e2e8f0;">
                                <div class="progress-bar bg-danger rounded-pill" style="width: 43%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. ABOUT SECTION -->
    <section id="about" class="section-padding bg-white">
        <div class="container text-center max-w-4xl">
            <span class="badge-custom mb-3">Latar Belakang Akademis</span>
            <h2 class="fw-bold text-dark mb-4">Didirikan oleh Akademisi Bidang TI ULM</h2>
            <div class="col-md-9 mx-auto text-slate-600" style="font-size: 16px; line-height: 1.8; text-align: justify; text-justify: inter-word;">
                <p class="mb-4">
                    PT Digital-Arsip Nusantara diinisiasi oleh tiga orang akademisi Teknologi Informasi Universitas Lambung Mangkurat (Banjarmasin, Kalimantan Selatan): <strong>Anggraeni Dwi Zahra</strong>, <strong>Nazla Salsabila</strong>, dan <strong>Putri Fatima Az'hara</strong>.
                </p>
                <p>
                    Berbekal pemahaman mendalam tentang arsitektur database, sistem temu kembali informasi (<em>Information Retrieval Systems</em>), dan keamanan siber, kami hadir untuk mengubah tumpukan kardus arsip yang rentan rusak menjadi data digital yang aman, cepat dicari, dan sesuai kepatuhan hukum.
                </p>
            </div>
        </div>
    </section>

    <!-- 8. CALL TO ACTION (CTA) -->
    <section class="container my-5">
        <div class="cta-box text-center text-white shadow">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="fw-bold display-6 mb-3">Siap Mengamankan Dokumen Anda?</h2>
                    <p class="text-slate-300 mb-5" style="font-size: 15px;">Konsultasikan kebutuhan digitalisasi institusi Anda dengan tim akademisi kami secara gratis untuk mendapatkan penawaran solusi terbaik.</p>
                    <a href="https://wa.me/6282154798642" target="_blank" class="btn btn-success fw-bold px-5 py-3 rounded-3 shadow border-0 d-inline-flex align-items-center gap-2" style="font-size: 16px; background-color: #10b981;">
                        <span>💬</span> Hubungi Kami via WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FOOTER -->
    <footer class="bg-dark text-light py-5 mt-5 border-top border-secondary border-opacity-30">
        <div class="container">
            <div class="row align-items-center g-4" style="font-size: 13px;">
                <div class="col-md-6 text-center text-md-start">
                    <p class="fw-bold text-white mb-1" style="font-size: 15px;">PT Digital-Arsip Nusantara</p>
                    <p class="text-slate-300 m-0">© 2026 PT DIGITAL-ARSIP NUSANTARA. PRESERVING LEGACY WITH PRECISION.</p>
                </div>
                <div class="col-md-6 text-center text-md-end d-flex flex-wrap justify-content-center justify-content-md-end gap-3 fw-semibold">
                    <a href="#" class="text-slate-300 text-decoration-none hover:text-white">PRIVACY PROTOCOL</a>
                    <a href="#" class="text-slate-300 text-decoration-none hover:text-white">COMPLIANCE MATRIX</a>
                    <a href="#" class="text-slate-300 text-decoration-none hover:text-white">SECURITY WHITEPAPER</a>
                    <a href="#" class="text-slate-300 text-decoration-none hover:text-white">OPERATIONAL STATUS</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>