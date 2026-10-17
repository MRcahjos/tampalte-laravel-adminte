<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') | Aplikasi Saya</title>

    <!-- 1. OverlayScrollbars CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayscrollbars/css/overlayscrollbars.min.css') }}">
    
    <!-- 2. Bootstrap Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-icons/bootstrap-icons.min.css') }}">
    
    <!-- 3. Plugin Tambahan CSS (Select2 & SweetAlert2) -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2-bootstrap-5-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}">

    <!-- 4. AdminLTE 4 Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/adminlte/css/adminlte.min.css') }}">

    @stack('css')
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        
        <!-- Bagian Atas (Navbar) -->
        @include('layouts.partials.navbar')

        <!-- Bagian Samping Kiri (Sidebar) -->
        @include('layouts.partials.sidebar')

        <!-- Bagian Konten Utama -->
        <main class="app-main">
            <!-- Judul Halaman & Breadcrumb -->
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">@yield('page_title', 'Dashboard')</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                @yield('breadcrumb')
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Isi Konten Dinamis -->
            <div class="app-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
        </main>

        <!-- Bagian Bawah (Footer) -->
        @include('layouts.partials.footer')

    </div>

    <!-- 1. jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- 2. OverlayScrollbars JS -->
    <script src="{{ asset('assets/plugins/overlayscrollbars/js/overlayscrollbars.browser.es6.min.js') }}"></script>
    
    <!-- 3. Bootstrap 5 Bundle JS -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- 4. Plugin Tambahan JS (Select2 & SweetAlert2) -->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <!-- 5. AdminLTE 4 Core JS -->
    <script src="{{ asset('assets/adminlte/js/adminlte.min.js') }}"></script>

    <!-- Inisialisasi Scrollbar pada Sidebar -->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined") {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>

    @stack('js')
</body>
</html>