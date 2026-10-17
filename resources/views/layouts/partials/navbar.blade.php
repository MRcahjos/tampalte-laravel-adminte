<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
        <!-- Tombol Buka/Tutup Sidebar -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
            <li class="nav-item d-none d-md-block">
                <a href="{{ url('/dashboard') }}" class="nav-link">Beranda</a>
            </li>
        </ul>

        <!-- Menu Kanan -->
        <ul class="navbar-nav ms-auto">
            <!-- Tombol Layar Penuh (Fullscreen) -->
            <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i>
                </a>
            </li>
            <!-- Dropdown Profil User -->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/adminlte/img/user2-160x160.jpg') }}" class="user-image rounded-circle shadow" alt="User Image">
                    <span class="d-none d-md-inline">Administrator</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <li class="user-header text-bg-primary">
                        <img src="{{ asset('assets/adminlte/img/user2-160x160.jpg') }}" class="rounded-circle shadow" alt="User Image">
                        <p>
                            Administrator
                            <small>Admin Sistem</small>
                        </p>
                    </li>
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profil</a>
                        <a href="#" class="btn btn-default btn-flat float-end">Keluar</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>