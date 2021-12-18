  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <!-- Uncomment below if you prefer to use an image logo -->
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
          <li><a class="nav-link {{ ($active === "riwayat") ? 'active' : '' }}" href="/riwayat">Riwayat</a></li>
          <li class="dropdown"><a class="nav-link {{ ($active === "pendaftaran") ? 'active' : '' }}" href="#"><span>Pendaftaran</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link {{ ($active === "pendaftaran") ? 'active' : '' }}" href="/pendaftaran">Pendaftaran Kerjasama</a></li>
              <li><a class="nav-link {{ ($active === "pengajuan") ? 'active' : '' }}" href="/pengajuan">Pengajuan Projek</a></li>
            </ul>
          </li>
          <li><a class="nav-link {{ ($active === "akun") ? 'active' : '' }}" href="/akun">Akun</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <br><br>