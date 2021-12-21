  <!-- Navbar -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">


      <!-- Member Prespective -->
      @auth
        <div class="logo me-auto">
          <a href="/home"><img src="/gambar/mas_logo_head.png" alt="" class="img-fluid"></a> 
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/home">Home</a></li>
            <li><a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">Tentang Kami</a></li>
            <li class="dropdown"><a href="#" class="nav-link {{ ($active === "berita") ? 'active' : '' }}"><span>Berita</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a class="nav-link {{ ($active === "berita") ? 'active' : '' }}" href="/berita">Berita Acara</a></li>
                <li><a class="nav-link {{ ($active === "kategori") ? 'active' : '' }}" href="/kategori_berita">Kategori Berita</a></li>
              </ul>
            <li><a class="nav-link {{ ($active === "galeri") ? 'active' : '' }}" href="/galeri">Galeri</a></li>
            <li><a class="nav-link {{ ($active === "visi_misi") ? 'active' : '' }}" href="/visi_misi">Visi & Misi</a></li>.
            <li><a class="nav-link {{ ($active === "jadwal") ? 'active' : '' }}" href="/jadwalsaya">Jadwal Saya</a></li>
            <li class="dropdown"><a class="nav-link {{ ($active === "pendaftaran") ? 'active' : '' }}" href="#"><span>Pendaftaran</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a class="nav-link {{ ($active === "pendaftaran") ? 'active' : '' }}" href="{{ route('pendaftaran.index') }}">Pendaftaran Kerjasama</a></li>
                <li><a class="nav-link {{ ($active === "pengajuan") ? 'active' : '' }}" href="{{ route('pengajuanloi.index') }}">Pengajuan Projek</a></li>
              </ul>
            </li>

            <li class="dropdown"><a class="nav-link {{ ($active === "akun") ? 'active' : '' }}" href="#"><span>{{ auth()->user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a class="nav-link {{ ($active === "akun") ? 'active' : '' }}" href="{{ route('acc.index') }}">Akun Saya</a></li>
                <li>
                  <form action="/logout" method="post">
                      @csrf
                      <button type="submit"  class="btn.lgt" href="/logout">Logout</button>
                  </form>
                </li>

                @can('isAdmin')
                  <li><a class="nav-link" href="/dashboard">Dashboard</a></li>
                @endcan
                
              </ul>
            </li>
          </ul>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex align-items-center">
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>

      <!-- Guest Prespective -->
      @else

        <div class="logo me-auto">
          <a href="/login"><img src="/gambar/mas_logo_head.png" alt="" class="img-fluid"></a> 
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a class="nav-link scrollto" href="/about"> Tentang Kami</a></li>
            <li><a class="nav-link scrollto" href="/login">Login</a></li>
          </ul>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex align-items-center">
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>

      @endauth
    </div>
  </header><!-- End Header -->

  <br><br>