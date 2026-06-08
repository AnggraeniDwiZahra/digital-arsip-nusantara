<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi - Digital-Arsip Nusantara</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800 font-sans flex h-screen overflow-hidden">

    <!-- 1. SIDEBAR KIRI (NAVIGASI) -->
    <aside class="w-64 bg-slate-900 text-slate-300 flex flex-col justify-between flex-shrink-0 z-10">
        <!-- Bagian Atas Sidebar -->
        <div>
            <!-- Logo Brand -->
            <div class="px-6 py-5 bg-slate-950 flex items-center space-x-3 border-b border-slate-800">
                <!-- Icon Brand -->
                <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 4H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-2m-4-1v8m0 0l3-3m-3 3L9 8m-5 5h2.586a1 1 0 01.707.293l2.414 2.414a1 1 0 00.707.293h3.172a1 1 0 00.707-.293l2.414-2.414a1 1 0 01.707-.293H20" />
                </svg>
                <div>
                    <h1 class="font-bold text-sm text-white tracking-wider leading-none">Digital-Arsip</h1>
                    <span class="text-xs text-slate-400">Nusantara</span>
                </div>
            </div>

            <!-- Menu List -->
            <nav class="mt-6 px-4 space-y-1">
                <a href="/app/dashboard" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-semibold hover:bg-slate-800 transition">
                    <span class="text-lg">📊</span>
                    <span>Dashboard</span>
                </a>
                <a href="/app/riwayat" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-semibold hover:bg-slate-800 transition">
                    <span class="text-lg">🕒</span>
                    <span>Riwayat Digitalisasi</span>
                </a>
                <a href="/app/cari" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-semibold hover:bg-slate-800 transition">
                    <span class="text-lg">🔍</span>
                    <span>Cari Dokumen</span>
                </a>
                <a href="/app/log-akses" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-semibold hover:bg-slate-800 transition">
                    <span class="text-lg">📝</span>
                    <span>Log Akses</span>
                </a>
                <!-- MENU AKTIF -->
                <a href="/app/konsultasi" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-semibold bg-blue-900 text-white transition shadow-sm">
                    <span class="text-lg">💬</span>
                    <span>Konsultasi</span>
                </a>
                <a href="/app/pengaturan" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-sm font-semibold hover:bg-slate-800 transition">
                    <span class="text-lg">⚙️</span>
                    <span>Pengaturan</span>
                </a>
            </nav>
        </div>

        <!-- Profil Admin (Bagian Bawah Sidebar) -->
        <div class="p-4 bg-slate-950 border-t border-slate-800 flex items-center space-x-3">
            <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold text-sm">
                AU
            </div>
            <div class="overflow-hidden">
                <p class="text-sm font-semibold text-white leading-tight">Admin User</p>
                <p class="text-xs text-slate-500 truncate">admin@arsip.id</p>
            </div>
        </div>
    </aside>

    <!-- 2. CONTAINER UTAMA (HEADER & RUANG CHAT) -->
    <main class="flex-1 flex flex-col h-full relative">

        <!-- HEADER CHAT -->
        <header class="bg-white border-b border-slate-200 px-6 py-4 flex justify-between items-center h-20 flex-shrink-0">
            <div class="flex items-center space-x-4">
                <div class="p-2.5 bg-slate-100 rounded-lg text-slate-700">
                    📂
                </div>
                <div>
                    <h2 class="font-bold text-slate-900 leading-tight">Active Consultation: ARCH-2024-0082</h2>
                    <p class="text-xs text-slate-400 font-semibold tracking-wider uppercase">HERITAGE DOCUMENT ASSESSMENT</p>
                </div>
            </div>
            <div class="flex items-center space-x-3">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-slate-100 text-slate-600 border border-slate-200">
                    <span class="w-2 h-2 mr-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    ARCHIVIST ONLINE
                </span>
                <button class="p-1.5 hover:bg-slate-100 rounded-full text-slate-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/></svg>
                </button>
            </div>
        </header>

        <!-- AREA PESAN CHAT (SCROLLABLE) -->
        <section class="flex-1 overflow-y-auto p-6 space-y-6">
            
            <!-- Pembatas Sesi Dimulai -->
            <div class="flex justify-center">
                <span class="bg-slate-200 text-[10px] text-slate-500 font-extrabold tracking-widest px-3 py-1 rounded-full uppercase">
                    SESSION STARTED • JAKARTA, ID • 14:22 PM
                </span>
            </div>

            <!-- CHAT 1: PESAN DARI USER (KANAN) -->
            <div class="flex flex-col items-end space-y-2">
                <div class="bg-blue-900 text-white p-4 rounded-2xl rounded-tr-none max-w-xl text-sm leading-relaxed shadow-sm">
                    Halo tim D-A Nusantara, saya punya koleksi dokumen keluarga dari tahun 1940-an. Kondisinya cukup mengkhawatirkan: sudah mulai berjamur, banyak staples berkarat yang menempel, dan kertasnya terasa sangat rapuh saat disentuh.
                </div>
            </div>

            <!-- CHAT 2: UNGGAHAN FOTO DARI USER (KANAN) -->
            <div class="flex flex-col items-end space-y-2">
                <div class="flex gap-3 max-w-xl">
                    <!-- Ganti path asset() dengan file contoh gambar asli jika ada -->
                    <img src="{{ asset('images/sample-doc-1.jpg') }}" alt="Dokumen Lapuk" class="w-40 h-28 object-cover rounded-xl border-2 border-white shadow-md bg-slate-300">
                    <img src="{{ asset('images/sample-doc-2.jpg') }}" alt="Dokumen Lapuk" class="w-40 h-28 object-cover rounded-xl border-2 border-white shadow-md bg-slate-300">
                </div>
            </div>

            <!-- CHAT 3: PESAN DARI USER 2 (KANAN) -->
            <div class="flex flex-col items-end space-y-1">
                <div class="bg-blue-900 text-white p-4 rounded-2xl rounded-tr-none max-w-xl text-sm leading-relaxed shadow-sm">
                    Kira-kira ada total 200 lembar. Apakah ini masih bisa diproses digitalisasi dan berapa estimasi biaya restorasi dasarnya?
                </div>
                <span class="text-[10px] text-slate-400 font-bold mr-1 mt-1">14:25 PM • SENT</span>
            </div>

            <!-- CHAT 4: BALASAN DARI ARCHIVIST / CURATOR (KIRI) -->
            <div class="flex flex-col items-start space-y-2">
                <!-- Label Pengirim -->
                <div class="flex items-center space-x-2">
                    <div class="w-6 h-6 rounded-full bg-slate-300 overflow-hidden">
                        <!-- Foto kecil kurator -->
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&h=100&q=80" alt="Curator Avatar" class="object-cover w-full h-full">
                    </div>
                    <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">LEAD CURATOR (ARIS S.)</span>
                </div>
                
                <!-- Bubble Chat Putih Lebar -->
                <div class="bg-white border border-slate-200 p-6 rounded-2xl rounded-tl-none max-w-2xl text-slate-800 text-sm shadow-sm leading-relaxed">
                    <p>
                        Selamat siang. Terima kasih telah menghubungi Digital-Arsip Nusantara. Kondisi yang Anda jelaskan (berjamur dan rapuh) adalah kasus prioritas dalam <strong class="text-slate-900">Precision Archiving Protocol</strong> kami.
                    </p>

                    <!-- Panel Diagnosis Awal -->
                    <div class="bg-slate-50 border-l-4 border-blue-900 p-4 mt-4 rounded-r-lg">
                        <h4 class="font-extrabold text-[10px] text-slate-900 uppercase tracking-widest">INITIAL DIAGNOSTIC</h4>
                        <ul class="list-disc pl-4 mt-2 space-y-1.5 text-xs text-slate-600">
                            <li>Mold removal requires UV-C stabilization.</li>
                            <li>De-stapling must be done manually using micro-spatulas to prevent tearing.</li>
                            <li>Digitalization will utilize cold-light planetary scanners to protect the brittle fibers.</li>
                        </ul>
                    </div>

                    <!-- Panel Estimasi Biaya -->
                    <div class="mt-6">
                        <h4 class="font-extrabold text-[10px] text-slate-400 uppercase tracking-widest">FINANCIAL ESTIMATION (TIER B)</h4>
                        <div class="grid grid-cols-2 gap-4 mt-2">
                            <!-- Card 1 -->
                            <div class="bg-slate-50 p-4 rounded-lg border border-slate-100 flex flex-col justify-between">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">RESTORATION & PREP</span>
                                <span class="text-lg font-bold text-slate-800 mt-1">Rp 2.500.000</span>
                            </div>
                            <!-- Card 2 -->
                            <div class="bg-slate-50 p-4 rounded-lg border border-slate-100 flex flex-col justify-between">
                                <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider">600DPI SCAN (200 PGS)</span>
                                <span class="text-lg font-bold text-slate-800 mt-1">Rp 1.200.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- 3. INPUT BAR (BAGIAN BAWAH) -->
        <footer class="p-6 bg-white border-t border-slate-200 flex-shrink-0">
            <form action="{{ route('app.consultation.store') }}" method="POST" enctype="multipart/form-data" class="flex items-center bg-slate-50 border border-slate-200 rounded-xl p-2 shadow-inner">
                @csrf
                <!-- Tombol Attachment/Upload -->
                <div class="flex items-center space-x-1 px-2 border-r border-slate-200">
                    <button type="button" class="p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-100 rounded-lg">
                        📎
                    </button>
                    <button type="button" class="p-2 text-slate-400 hover:text-slate-600 hover:bg-slate-100 rounded-lg">
                        📷
                    </button>
                </div>
                
                <!-- Textarea Chat -->
                <textarea 
                    name="message" 
                    rows="1" 
                    placeholder="Describe your document collection or ask a follow-up question..." 
                    class="flex-1 bg-transparent px-4 py-2 text-sm text-slate-700 placeholder-slate-400 focus:outline-none resize-none"
                    style="max-height: 80px;"></textarea>

                <!-- Tombol Kirim -->
                <button type="submit" class="bg-blue-950 text-white font-bold text-xs uppercase tracking-wider px-5 py-2.5 rounded-lg hover:bg-blue-900 transition flex items-center space-x-2">
                    <span>Kirim</span>
                    <span>➔</span>
                </button>
            </form>
        </footer>

    </main>

</body>
</html>