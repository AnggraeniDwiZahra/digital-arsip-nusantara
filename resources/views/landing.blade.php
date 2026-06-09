<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Digital-Arsip Nusantara - Solusi Manajemen Dokumen Terintegrasi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Mengatur scroll offset agar bagian tidak tertutup navbar yang melayang */
        #solutions, #technology, #standards, #about {
            scroll-margin-top: 120px;
        }
    </style>
</head>
<body class="bg-[#f8fafc] text-slate-800 font-sans antialiased">

    <!-- 1. NAVBAR / HEADER (SOLID BACKGROUND, TIDAK TRANSPARAN) -->
    <header class="bg-white shadow-md sticky top-0 z-50 border-b border-slate-200">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo Brand -->
            <div class="flex items-center space-x-3">
                <div class="p-2.5 bg-blue-600 rounded-lg text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                    </svg>
                </div>
                <div>
                    <h1 class="font-bold text-sm tracking-wider text-slate-900 leading-none">PT DIGITAL-ARSIP</h1>
                    <span class="text-[10px] text-slate-500 font-semibold tracking-widest uppercase">NUSANTARA</span>
                </div>
            </div>

            <!-- Menu Navigasi (Mendukung Smooth Scroll) -->
            <nav class="hidden lg:flex space-x-10 text-sm font-bold text-slate-600">
                <a href="#solutions" class="hover:text-blue-600 transition">Solutions</a>
                <a href="#technology" class="hover:text-blue-600 transition">Technology</a>
                <a href="#standards" class="hover:text-blue-600 transition">Archival Standards</a>
                <a href="#about" class="hover:text-blue-600 transition">About</a>
            </nav>

            <!-- Tombol Login Berbentuk Kotak Tombol Nyata -->
            <div class="flex items-center">
                <a href="/login" class="bg-blue-900 hover:bg-blue-800 text-white px-6 py-2.5 rounded-lg text-sm font-bold shadow-md transition">LOGIN</a>
            </div>
        </div>
    </header>

    <!-- 2. HERO SECTION (HALAMAN DEPAN PALING AWAL DIPERBESAR EXTRA) -->
     <br> <br>
    <section class="relative bg-gradient-to-br from-slate-900 via-slate-950 to-blue-950 text-white py-24 md:py-32 overflow-hidden">
        <div class="container mx-auto px-6 grid md:grid-cols-2 gap-12 items-center relative z-10">
            <!-- Teks Kiri (Ukuran Super Besar) -->
            <div class="space-y-6">
                <span class="inline-flex items-center bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wider">
                    PRESERVASI ARSIP KELAS ENTERPRISE
                </span>
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight tracking-tight">
                    Digitalisasi Dokumen <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-300">Presisi & Terpercaya</span>
                </h1>
                <p class="text-slate-300 text-sm md:text-base leading-relaxed max-w-xl">
                    Transformasi arsip fisik menjadi aset digital cerdas berbasis AI dengan tingkat akurasi OCR tinggi dan infrastruktur keamanan tingkat perbankan.
                </p>
            </div>
            
            <!-- Sisi Kanan: Menggunakan Ilustrasi SVG Server Rack Berteknologi Tinggi (Menghindari Gambar Rusak) -->
            <div class="relative flex justify-center">
                <div class="w-full max-w-lg h-[350px] rounded-2xl bg-slate-800 p-1 shadow-2xl relative overflow-hidden border border-slate-700">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600/10 to-transparent"></div>
                    <div class="absolute inset-x-0 h-1 bg-gradient-to-r from-transparent via-cyan-400 to-transparent top-0 animate-pulse"></div>
                    
                    <div class="flex-1 flex items-center justify-center opacity-90 h-56">
                        <svg class="w-40 h-40 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                            <circle cx="6" cy="8" r="1" fill="currentColor" />
                            <circle cx="6" cy="16" r="1" fill="#10B981" />
                        </svg>
                    </div>
                    
                    <div class="absolute bottom-6 left-6 right-6 bg-slate-900/90 border border-slate-800 p-5 rounded-2xl flex justify-between items-center z-10">
                        <div>
                            <p class="text-[10px] text-blue-400 font-extrabold uppercase tracking-widest leading-none">Akurasi Ekstraksi</p>
                            <p class="text-2xl font-black text-white mt-1">99.9% (OCR / AI)</p>
                        </div>
                        <div class="p-3 bg-blue-500/20 rounded-xl text-blue-400 text-lg">
                            🤖
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SPACER (JARAK ANTAR ISI) -->
    <div class="h-24 lg:h-32"></div>

    <!-- 3. PARTNERS LOGO -->
    <section class="bg-white py-12 border-b border-slate-200">
        <div class="container mx-auto px-6 text-center">
            <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-6">Mitra Infrastruktur & Teknologi Resmi</p>
            <div class="flex flex-wrap justify-center items-center gap-12 md:gap-20 opacity-60">
                <span class="font-extrabold text-lg text-slate-700">FUJITSU</span>
                <span class="font-extrabold text-lg text-slate-700">Synology</span>
                <span class="font-extrabold text-lg text-slate-700">EPSON</span>
                <span class="font-extrabold text-lg text-slate-700">KODAK</span>
            </div>
        </div>
    </section>

    <!-- SPACER (JARAK ANTAR ISI) -->
    <div class="h-24 lg:h-32"></div>

    <!-- 4. SOLUTIONS SECTION (SOLUSI END-TO-END) -->
    <section id="solutions" class="py-12">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto space-y-4">
                <span class="text-blue-600 text-xs font-bold uppercase tracking-widest">Our Core Services</span> <br>
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight">Solusi End-to-End untuk Ekosistem Arsip Anda</h2> <br>
                <p class="text-slate-500 text-sm md:text-base leading-relaxed">Kami mengintegrasikan teknologi pemindaian berkecepatan tinggi dengan kecerdasan buatan (OCR) untuk mengamankan data penting Anda secara lokal dan cloud.</p> <br>
            </div>
            
            <div class="grid md:grid-cols-2 gap-8 mt-16">
                <!-- Solusi 1 -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between space-y-8">
                    <div class="space-y-4">
                        <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center text-xl font-bold">📄</div>
                        <h3 class="text-xl font-extrabold text-slate-900">Jasa Digitalisasi Massal</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Kami mengonversi arsip fisik berskala besar (5.000 hingga 10.000 lembar per hari) mulai dari ukuran kuitansi kecil, lembaran rekam medis, hingga kertas blueprint berukuran besar (A3) menjadi format digital terenkripsi.</p>
                        <br>
                    </div>
                    <div class="flex gap-4">
                        <span class="bg-slate-100 text-slate-600 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">High Volume (ADF)</span>
                        <span class="bg-slate-100 text-slate-600 text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">Fragile Paper Treatment</span>
                    </div>
                </div>

                <!-- Solusi 2 -->
                <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between space-y-8">
                    <div class="space-y-4">
                        <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center text-xl font-bold">🤖</div>
                        <h3 class="text-xl font-extrabold text-slate-900">Keunggulan OCR</h3>
                        <p class="text-sm text-slate-500 leading-relaxed">Mengekstraksi teks dari gambar pindaian menggunakan teknologi OCR pintar. Mempermudah pencarian berbasis kata kunci instan seperti Nomor Induk Kependudukan (NIK) atau nama pasien.</p>
                    </div>
                    <ul class="space-y-2 text-xs font-semibold text-slate-600">
                        <li class="flex items-center"><span class="text-emerald-500 mr-2">✓</span> Pencarian Kata Kunci Instan</li>
                        <li class="flex items-center"><span class="text-emerald-500 mr-2">✓</span> Konversi ke Format PDF/A Terindeks</li>
                        <li class="flex items-center"><span class="text-emerald-500 mr-2">✓</span> Validasi Metadata Otomatis</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SPACER (JARAK ANTAR ISI) -->
    <div class="h-24 lg:h-32"></div>

    <!-- 5. TECHNOLOGY SECTION (INFRASTRUKTUR TEKNOLOGI) -->
    <section id="technology" class="py-12">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto space-y-4 mb-16">
                <span class="text-blue-600 text-xs font-bold uppercase tracking-widest">Tech Stack & Security</span>
                <h2 class="text-3xl font-extrabold text-slate-900">Infrastruktur Teknologi & Keamanan Berlapis</h2> <br>
                <p class="text-slate-500 text-sm leading-relaxed">Keamanan data kearsipan Anda dikelola menggunakan standar industri dan pengamanan berkelas militer.</p> <br> <br>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Tech 1 -->
                <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-4">
                    <div class="p-3 bg-blue-100 text-blue-600 w-12 h-12 rounded-xl flex items-center justify-center text-xl">💾</div>
                    <h3 class="font-extrabold text-slate-900 text-lg">Penyimpanan Terpusat (NAS)</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Menggunakan unit penyimpanan lokal berspesifikasi tinggi (Synology NAS) dengan konfigurasi RAID untuk mencegah hilangnya data jika terjadi kerusakan perangkat keras.</p>
                </div>
                <!-- Tech 2 -->
                <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-4">
                    <div class="p-3 bg-blue-100 text-blue-600 w-12 h-12 rounded-xl flex items-center justify-center text-xl">🛡</div>
                    <h3 class="font-extrabold text-slate-900 text-lg">Zonasi Keamanan Fisik</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Fasilitas operasional kami dibagi menjadi 3 zona: Green Zone, Yellow Zone, dan Red Zone (Biometrik khusus) dengan sistem CCTV inframerah yang aktif 24 jam penuh.</p>
                </div>
                <!-- Tech 3 -->
                <div class="p-6 bg-slate-50 rounded-2xl border border-slate-200 space-y-4">
                    <div class="p-3 bg-blue-100 text-blue-600 w-12 h-12 rounded-xl flex items-center justify-center text-xl">🔒</div>
                    <h3 class="font-extrabold text-slate-900 text-lg">Zero Device Policy</h3>
                    <p class="text-slate-500 text-xs leading-relaxed">Seluruh staf di area Red Zone (pemindaian) dilarang membawa perangkat pribadi seperti ponsel atau flashdisk untuk menjaga kerahasiaan data rahasia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SPACER (JARAK ANTAR ISI) -->
    <div class="h-24 lg:h-32"></div>

    <!-- 6. ARCHIVAL STANDARDS SECTION (KEPATUHAN REGULASI) -->
    <section id="standards" class="py-12 bg-slate-50 border-t border-b border-slate-200">
        <div class="container mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <span class="text-blue-600 text-xs font-bold uppercase tracking-widest block">Kepatuhan Regulasi Nasional</span>
                <h2 class="text-3xl font-extrabold text-slate-900 leading-tight">Menjawab Kebutuhan SPBE & Standar ANRI</h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Berdasarkan laporan evaluasi nasional, terdapat kesenjangan kinerja kearsipan digital daerah yang mencapai 56%. PT Digital-Arsip Nusantara hadir untuk membantu memperkecil kesenjangan tersebut melalui sistem kearsipan modern yang sejalan dengan standar regulasi Arsip Nasional Republik Indonesia (ANRI) dan Sistem Pemerintahan Berbasis Elektronik (SPBE).
                </p>
                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="border-l-4 border-blue-600 pl-4">
                        <span class="text-2xl font-black text-slate-900">43%</span>
                        <span class="text-xs text-slate-500 block font-medium mt-1">Rata-rata Kearsipan Daerah</span>
                    </div>
                    <div class="border-l-4 border-emerald-500 pl-4">
                        <span class="text-2xl font-black text-slate-900">99%</span>
                        <span class="text-xs text-slate-500 block font-medium mt-1">Standar Kearsipan Pusat</span>
                    </div>
                </div>
            </div>
            
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm space-y-4">
                <h3 class="font-bold text-slate-900 text-xs">Status Digitalisasi Arsip Nasional (Proyeksi 2024–2026)</h3>
                <div class="space-y-4 pt-2">
                    <div>
                        <div class="flex justify-between text-xs font-bold text-slate-500 mb-1.5">
                            <span>Pemerintah Pusat</span>
                            <span>99%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-emerald-500 h-full rounded-full" style="width: 99%;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs font-bold text-slate-500 mb-1.5">
                            <span>Pemerintah Provinsi</span>
                            <span>65%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-amber-500 h-full rounded-full" style="width: 65%;"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-xs font-bold text-slate-500 mb-1.5">
                            <span>Pemerintah Daerah (Kabupaten/Kota)</span>
                            <span>43%</span>
                        </div>
                        <div class="w-full bg-slate-100 h-2.5 rounded-full overflow-hidden">
                            <div class="bg-red-500 h-full rounded-full" style="width: 43%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SPACER (JARAK ANTAR ISI) -->
    <div class="h-24 lg:h-32"></div>

    <!-- 7. ABOUT SECTION (TENTANG KAMI) -->
    <section id="about" class="py-12 bg-white">
        <div class="container mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <span class="text-blue-600 text-xs font-bold uppercase tracking-widest block">Latar Belakang Akademis</span>
                <h2 class="text-3xl font-extrabold text-slate-900 leading-tight">Didirikan oleh Akademisi Bidang TI ULM</h2>
                <p class="text-slate-600 text-sm leading-relaxed">
                    PT Digital-Arsip Nusantara diinisiasi oleh tiga orang akademisi Teknologi Informasi Universitas Lambung Mangkurat (Banjarmasin, Kalimantan Selatan): <strong>Anggraeni Dwi Zahra</strong>, <strong>Nazla Salsabila</strong>, dan <strong>Putri Fatima Az'hara</strong>.
                </p>
                <p class="text-slate-600 text-sm leading-relaxed">
                    Berbekal pemahaman mendalam tentang arsitektur database, sistem temu kembali informasi (*Information Retrieval Systems*), dan keamanan siber, kami hadir untuk mengubah tumpukan kardus arsip yang rentan rusak menjadi data digital yang aman, cepat dicari, dan sesuai kepatuhan hukum.
                </p>
            </div>
        </div>
    </section>

    <!-- SPACER (JARAK ANTAR ISI) -->
    <div class="h-24 lg:h-32"></div>

    <!-- 8. CALL TO ACTION (CTA) -->
    <section class="container mx-auto px-6 py-16">
        <div class="bg-gradient-to-r from-slate-900 to-blue-950 text-white rounded-2xl p-12 text-center shadow-xl relative overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_120%,rgba(59,130,246,0.15),transparent_50%)]"></div>
            <div class="relative z-10 space-y-6 max-w-2xl mx-auto">
                <h2 class="text-3xl font-bold">Siap Mengamankan Dokumen Anda?</h2>
                <p class="text-slate-300 text-sm leading-relaxed">Konsultasikan kebutuhan digitalisasi institusi Anda dengan tim akademisi kami secara gratis untuk mendapatkan penawaran solusi terbaik.</p>
                <div class="pt-4">
                    <a href="https://wa.me/6282154798642" target="_blank" class="inline-flex bg-emerald-500 hover:bg-emerald-600 text-white px-8 py-3.5 rounded-xl font-bold shadow-lg shadow-emerald-500/20 transition items-center space-x-2">
                        <span>💬</span>
                        <span>Hubungi Kami via WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. FOOTER -->
    <footer class="bg-slate-50 border-t border-slate-200 py-12 text-xs text-slate-500">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <div>
                <p class="font-bold text-slate-800 text-sm">PT Digital-Arsip Nusantara</p>
                <p class="mt-2">© 2026 PT DIGITAL-ARSIP NUSANTARA. PRESERVING LEGACY WITH PRECISION.</p>
            </div>
            <div class="flex space-x-6">
                <a href="#" class="hover:text-blue-600">PRIVACY PROTOCOL</a>
                <a href="#" class="hover:text-blue-600">COMPLIANCE MATRIX</a>
                <a href="#" class="hover:text-blue-600">SECURITY WHITEPAPER</a>
                <a href="#" class="hover:text-blue-600">OPERATIONAL STATUS</a>
            </div>
        </div>
    </footer>

</body>
</html>