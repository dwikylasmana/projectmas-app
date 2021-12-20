<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/berita*') ? 'active' : '' }}" href="/dashboard/berita">
            <span data-feather="file"></span>
            Berita
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/akun*') ? 'active' : '' }}" href="{{ route('akun.index') }}">
            <span data-feather="file"></span>
            Akun
            </a>
        </li>

        <li class="nav-item {{ Request::is('dashboard/galleri*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('galleri.index') }}">
            <span data-feather="image"></span>
            Gallery
            </a>
        </li>
        <li class="nav-item {{ Request::is('dashboard/daftar*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('daftar.index') }}">
            <span data-feather="archive"></span>
            Pendaftaran
            </a>
        </li>
        <li class="nav-item {{ Request::is('dashboard/pengajuan*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('pengajuan.index') }}">
            <span data-feather="clipboard"></span>
            Pengajuan
            </a>
        </li>
        <li class="nav-item {{ Request::is('dashboard/jadwal*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route("jadwal.index") }}">
            <span data-feather="layers"></span>
            Jadwal
            </a>
        </li>
        </ul>

    </div>
</nav>