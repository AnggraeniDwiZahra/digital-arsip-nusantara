<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Digital-Arsip Nusantara</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-slate-900 font-sans min-h-screen flex flex-col justify-between">

    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="flex items-center space-x-2">
                <span class="font-bold text-xl tracking-wider text-slate-800 hover:text-blue-600 transition-colors">DIGITAL-ARSIP NUSANTARA</span>
            </a>
            <a href="/" class="text-sm font-medium text-slate-600 hover:text-blue-600 flex items-center gap-1">
                ← Kembali ke Beranda
            </a>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center px-4 py-12">
        <div class="bg-white p-8 rounded-xl shadow-md border border-slate-100 w-full" style="max-width: 450px; margin: 0 auto;">
            
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-slate-900">Selamat Datang Kembali</h2>
                <p class="text-slate-500 text-sm mt-2">Silakan masuk untuk mengakses sistem arsip digital</p>
            </div>

            <form action="{{ route('login') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Alamat Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 text-sm bg-slate-50 placeholder-slate-400"
                        placeholder="nama@email.com">
                </div>

                <div>
                    <div class="flex justify-between items-center mb-2">
                        <label for="password" class="block text-xs font-semibold uppercase tracking-wider text-slate-600">Kata Sandi</label>
                        <a href="#" class="text-xs font-medium text-blue-600 hover:underline">Lupa Password?</a>
                    </div>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-3 border border-slate-200 rounded-lg focus:outline-none focus:border-blue-600 text-sm bg-slate-50 placeholder-slate-400"
                        placeholder="••••••••">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-blue-600 border-slate-300 rounded focus:ring-blue-500">
                    <label for="remember" class="ml-2 text-xs text-slate-600 select-none">Ingat perangkat ini</label>
                </div>

                <div>
                    <button type="submit" class="w-full bg-slate-900 text-white py-3.5 rounded-lg font-semibold hover:bg-slate-800 transition-colors shadow-sm text-sm">
                        Masuk ke Sistem
                    </button>
                </div>
            </form>

            <div class="mt-8 pt-6 border-t border-slate-100 text-center text-xs text-slate-500">
                <p>Butuh hak akses institusi? <a href="/app/konsultasi" class="text-blue-600 font-medium hover:underline">Hubungi Admin / Kurator</a></p>
            </div>
        </div>
    </main>

    <footer class="bg-slate-50 border-t border-slate-200 py-6 text-[10px] text-slate-500 text-center">
        <p>© 2026 PT DIGITAL-ARSIP NUSANTARA. SECURE ACCESS ENFORCED.</p>
    </footer>

</body>
</html>