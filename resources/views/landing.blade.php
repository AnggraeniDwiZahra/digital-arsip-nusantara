<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital-Arsip Nusantara</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-900 font-sans">

    <!-- 1. NAVBAR / HEADER -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <span class="font-bold text-xl tracking-wider text-slate-800">DIGITAL-ARSIP NUSANTARA</span>
            </div>
            <!-- Menu Navigasi -->
            <nav class="hidden md:flex space-x-8 text-sm font-medium text-slate-600">
                <a href="#solusi" class="hover:text-blue-600">Solutions</a>
                <a href="#" class="hover:text-blue-600">Technology</a>
                <a href="#" class="hover:text-blue-600">Archival Standards</a>
                <a href="#" class="hover:text-blue-600">About</a>
            </nav>
            <!-- Tombol Aksi -->
            <div class="flex items-center space-x-6">
                <!-- HANYA MENYISAKAN TOMBOL LOGIN -->
                <a href="/login" class="text-sm font-semibold text-slate-700 hover:text-blue-600">LOGIN</a>
            </div>
        </div>
    </header>

    <!-- 2. HERO SECTION -->
    <section class="container mx-auto px-6 py-16 md:py-24 grid md:grid-cols-2 gap-12 items-center">
        <!-- Teks Kiri -->
        <div>
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-1 rounded">STANDAR NASIONAL KEARSIPAN</span>
            <h1 class="text-5xl font-extrabold text-slate-900 mt-4 leading-tight">
                Digitalisasi Dokumen <br>
                <span class="text-blue-600">Presisi & Terpercaya</span>
            </h1>
            <p class="text-slate-600 mt-6 leading-relaxed">
                Transformasi arsip fisik menjadi aset digital cerdas dengan akurasi OCR tinggi dan keamanan tingkat korporasi. Kami menjaga warisan informasi Anda.
            </p>
            <div class="mt-8">
                <!-- TOMBOL PELAJARI SOLUSI DIHAPUS, HANYA TOMBOL AJUKAN KONSULTASI -->
                <a href="/app/konsultasi" class="inline-block bg-slate-900 text-white px-8 py-3.5 rounded font-semibold hover:bg-slate-800">Ajukan Konsultasi</a>
            </div>
        </div>
        <!-- Gambar Kanan -->
        <div class="relative">
            <img src="{{ asset('images/hero-server.jpg') }}" alt="Server Room" class="rounded-lg shadow-2xl w-full object-cover h-[450px]">
            <div class="absolute bottom-4 left-4 bg-white p-4 rounded-lg shadow-lg flex items-center space-x-3">
                <span class="text-2xl font-bold text-blue-600">99.9%</span>
                <span class="text-xs text-slate-500 font-medium">Akurasi <br> Teknologi OCR</span>
            </div>
        </div>
    </section>

    <!-- 3. PARTNERS LOGO -->
    <section class="bg-white py-12 border-t border-b border-slate-100">
        <div class="container mx-auto px-6 flex flex-wrap justify-around items-center gap-8 opacity-50">
            <span class="font-bold text-lg">FUJITSU</span>
            <span class="font-bold text-lg">Synology</span>
            <span class="font-bold text-lg">EPSON</span>
            <span class="font-bold text-lg">KODAK</span>
        </div>
    </section>

    <!-- 4. CORE FEATURES (Solusi End-to-End) -->
    <section id="solusi" class="container mx-auto px-6 py-20">
        <h2 class="text-3xl font-bold text-slate-900 text-center">Solusi End-to-End untuk Ekosistem Arsip Anda</h2>
        <p class="text-slate-500 text-center mt-2">Kami mengintegrasikan perangkat keras terbaik dengan kecerdasan buatan untuk hasil digitalisasi tanpa cela.</p>
        
        <div class="grid md:grid-cols-2 gap-8 mt-12">
            <!-- Kartu Kiri (Scan Services Pro) -->
            <div class="bg-slate-900 text-white p-8 rounded-lg flex flex-col justify-between h-[300px]" style="background-image: linear-gradient(to right, rgba(15,23,42,0.95), rgba(15,23,42,0.3)), url('{{ asset('images/scan-bg.jpg') }}'); background-size: cover;">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-400">Scan Services Pro</span>
                    <h3 class="text-xl font-bold mt-2">Layanan pemindaian dokumen volume tinggi</h3>
                </div>
                <div class="flex space-x-2">
                    <span class="bg-slate-800 text-[10px] px-2 py-1 rounded">LARGE FORMAT</span>
                    <span class="bg-slate-800 text-[10px] px-2 py-1 rounded">FRAGILE DOCUMENTS</span>
                </div>
            </div>
            <!-- Kartu Kanan (Keunggulan OCR) -->
            <div class="bg-white p-8 rounded-lg border border-slate-100 shadow-sm flex flex-col justify-between">
                <div>
                    <h3 class="text-xl font-bold text-slate-900">Keunggulan OCR</h3>
                    <p class="text-sm text-slate-500 mt-2">Ekstraksi teks cerdas yang mengenali karakter tulisan tangan (ICR) dengan akurasi tinggi.</p>
                </div>
                <ul class="space-y-2 mt-4 text-sm text-slate-600">
                    <li>✓ Pencarian Kata Kunci Instan</li>
                    <li>✓ Konversi ke PDF/A Terindeks</li>
                    <li>✓ Validasi Metadata Otomatis</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 5. TIGA CARD FITUR -->
    <section class="bg-white py-20">
        <div class="container mx-auto px-6 grid md:grid-cols-3 gap-8">
            <div class="p-6 border border-slate-100 rounded-lg">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded flex items-center justify-center font-bold">V</div>
                <h4 class="font-bold text-lg mt-4 text-slate-900">Vault Security</h4>
                <p class="text-slate-500 text-sm mt-2">Enkripsi AES-256 dan protokol akses bertingkat untuk menjaga kerahasiaan dokumen sensitif.</p>
            </div>
            <div class="p-6 border border-slate-100 rounded-lg">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded flex items-center justify-center font-bold">L</div>
                <h4 class="font-bold text-lg mt-4 text-slate-900">Lacak Historis</h4>
                <p class="text-slate-500 text-sm mt-2">Audit trail lengkap untuk setiap interaksi dokumen, menjamin integritas data secara hukum.</p>
            </div>
            <div class="p-6 border border-slate-100 rounded-lg">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded flex items-center justify-center font-bold">S</div>
                <h4 class="font-bold text-lg mt-4 text-slate-900">24/7 Curator Support</h4>
                <p class="text-slate-500 text-sm mt-2">Bantuan langsung dari ahli kearsipan kami untuk strukturisasi database arsip Anda.</p>
            </div>
        </div>
    </section>

    <!-- 6. CALL TO ACTION (CTA) -->
    <section class="container mx-auto px-6 py-16">
        <div class="bg-slate-900 text-white rounded-2xl p-12 text-center">
            <h2 class="text-3xl font-bold">Siap Mengamankan Dokumen Anda?</h2>
            <p class="text-slate-400 mt-4 max-w-xl mx-auto">Konsultasikan kebutuhan digitalisasi institusi Anda dengan tim ahli kami secara gratis dan dapatkan penawaran solusi kustom.</p>
            <div class="mt-8 flex justify-center">
                <a href="/app/konsultasi" class="bg-white text-slate-900 px-8 py-3 rounded font-semibold hover:bg-slate-100">Hubungi Kami</a>
            </div>
        </div>
    </section>

    <!-- 7. FOOTER -->
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