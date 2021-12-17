<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="/home">PT. Multiplikasi Artha Sejahtera</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Galeri") ? 'active' : ''}}" href="/galeri">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Visi & Misi") ? 'active' : ''}}" href="/visi_misi">Visi & Misi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Projek") ? 'active' : ''}}" href="/projek">Projek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Berita") ? 'active' : ''}}" href="/berita">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Tentang Kami") ? 'active' : ''}}" href="/about">About US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Login") ? 'active' : ''}}" href="/login">Account</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>