<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital-Arsip Nusantara</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        .sidebar {
            width: 260px;
            background-color: #0B2545;
            color: #ffffff;
        }
        .sidebar .nav-link {
            color: #a0aec0;
            padding: 12px 20px;
            border-radius: 8px;
            margin-bottom: 4px;
            font-size: 14px;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: #13315C;
            color: #ffffff;
        }
        .header-top {
            background-color: #ffffff;
            border-bottom: 1px solid #dee2e6;
            height: 65px;
        }
        .search-bar {
            background-color: #f1f3f5;
            border: none;
            border-radius: 20px;
            padding-left: 40px;
            font-size: 14px;
        }
        .search-wrapper i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #adb5bd;
        }
    </style>
</head>
<body>

<div class="d-flex w-100" style="min-height: 100vh;">
    
    <div class="sidebar d-flex flex-column justify-content-between p-3 sticky-top" style="height: 100vh; min-width: 260px; max-width: 260px;">
        <div>
            <div class="d-flex align-items-center gap-3 pb-4 mb-3 border-bottom border-secondary text-white">
                <i class="fa-solid fa-box-archive fs-4 text-info"></i>
                <div>
                    <h6 class="fw-bold mb-0 tracking-wider">Digital-Arsip</h6>
                    <small class="text-light-50" style="font-size: 11px;">Nusantara</small>
                </div>
            </div>
            
            <ul class="nav nav-pills flex-column px-1">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ Route::is('dashboard') ? 'active' : '' }} d-flex align-items-center gap-3">
                        <i class="fa-solid fa-table-columns text-center" style="width: 20px;"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="{{ route('documents.history') }}" class="nav-link {{ Route::is('documents.history') ? 'active' : '' }} d-flex align-items-center gap-3">
                        <i class="fa-solid fa-clock-rotate-left text-center" style="width: 20px;"></i>
                        <span>Riwayat Digitalisasi</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('documents.search') }}" class="nav-link {{ Route::is('documents.search') ? 'active' : '' }} d-flex align-items-center gap-3">
                        <i class="fa-solid fa-magnifying-glass text-center" style="width: 20px;"></i>
                        <span>Cari Dokumen</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('logs') }}" class="nav-link {{ Route::is('logs') ? 'active' : '' }} d-flex align-items-center gap-3">
                        <i class="fa-solid fa-list-check text-center" style="width: 20px;"></i>
                        <span>Log Akses</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('consultation') }}" class="nav-link {{ Route::is('consultation') ? 'active' : '' }} d-flex align-items-center gap-3">
                        <i class="fa-solid fa-comments text-center" style="width: 20px;"></i>
                        <span>Konsultasi</span>
                    </a>
                </li>
            
                <li class="nav-item">
                    <a href="{{ route('settings') }}" class="nav-link {{ Route::is('settings') ? 'active' : '' }} d-flex align-items-center gap-3">
                        <i class="fa-solid fa-gear text-center" style="width: 20px;"></i>
                        <span>Pengaturan</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="pt-3 border-top border-secondary d-flex align-items-center gap-3 text-white">
            <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center fw-bold" style="width: 40px; height: 40px; flex-shrink: 0;">
                AU
            </div>
            <div class="overflow-hidden text-truncate">
                <p class="mb-0 small fw-bold text-truncate">Admin User</p>
                <p class="mb-0 text-light-50 text-truncate" style="font-size: 11px;">admin@arsip.id</p>
            </div>
        </div>
    </div>

    <div class="flex-grow-1 d-flex flex-column min-vh-100" style="background-color: #f8f9fa;">
        
        <div class="header-top d-flex align-items-center justify-content-between px-4 flex-shrink-0">
            <div class="search-wrapper position-relative" style="width: 350px;">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" class="form-control search-bar" placeholder="Search">
            </div>

            <div class="d-flex align-items-center gap-4">
                <button class="btn p-0 position-relative border-0 text-secondary">
                    <i class="fa-solid fa-bell fs-5"></i>
                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                </button>
                <div class="d-flex align-items-center gap-2 border-start ps-3">
                    <div class="text-end d-none d-sm-block">
                        <p class="mb-0 small fw-bold text-dark">Admin User</p>
                        <p class="mb-0 text-muted" style="font-size: 11px;">Administrator</p>
                    </div>
                    <div class="rounded-circle bg-purple text-purple fw-bold d-flex align-items-center justify-content-center text-primary-emphasis bg-primary-subtle" style="width: 35px; height: 35px; font-size: 13px;">
                        AU
                    </div>
                </div>
            </div>
        </div>
        
        <div class="p-1 flex-grow-1">
            @yield('content')
        </div>
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>