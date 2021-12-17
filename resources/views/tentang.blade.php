@extends('layout/main_layout_v2')

@section('content')   
    
    <script>
        function initMap() {
        const gst = { lat: -6.200504686557502, lng: 106.79810982305956 };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 16,
            center: gst,
        });
        const marker = new google.maps.Marker({
            position: gst,
            map: map,
        });
        }
    </script>

    <section id="about" class="about">
        <div class="container">
  
            <div class="row">
                <div class="col-lg-6">
                <img src="gambar/logo.png" class="img-fluid" id="img" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                <h3>About Us</h3>
                <p>
                    PT. Multiplikasi Artha Sejahtera merupakan sebuah perusahaan yang bergerak dibidang mining dan trading mineral, 
                    perusahaan ini telah berdiri sejak tahun 2015. Telah disetujui oleh Meteri hukum & Hak Asasi Manusia Republik Indonesia 
                    Nomor AHU-2445631.AH.01.01. Tahun 2015. Perusahaan yang didirikan semula terbada di Jakarta sejak tahun 2015 sebagai pusat. 
                </p>
                <p>  
                    Salah satu pilar penting di Indonesia dalam rangka membangun kesadaran akan lingkungan adalah ketentuan dari regulasi Dampak Lingkungan Penilaian sebagai salah satu syarat yang harus dipenuhi oleh pengusaha dalam upaya menciptakan kegiatan usaha yang mampu menangkap keberlanjutan tujuan pembangunan 
                </p>
                <h3>Perusahaan ini bergerak terutama dalam bidang: </h3>
                <ul>
                    <li><i class="bx bx-check-double"></i> Jual & Beli alat mining </li>
                    <li><i class="bx bx-check-double"></i> Stone crushing</li>
                    <li><i class="bx bx-check-double"></i> Pembetonan Jalan</li>
                </ul>
                <div class="row icon-boxes">
                    <div class="col-md-6">
                        <i class="bx bx-location-plus"></i>
                        <a href="https://goo.gl/maps/CUdPRueEA9amoLuu6"><h4>Alamat</h4></a>
                    </div>
                    <div class="col">
                        <i class="bx bx-cube-alt"></i>
                        <a href="/visi_misi"><h4>Visi & Misi</h4></a>
                    </div>
                </div>
                </div>
            </div>
            <br>
            <hr><hr>
            <div id="map"></div>

            <!--<div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.477875819196!2d106.79589451535146!3d-6.200512362470008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6bef3b88d75%3A0x55f0db2cf392c2bf!2sGrand%20Slipi%20Tower%2C%20Jl.%20Letjen%20S.%20Parman%20No.1%2C%20RW.4%2C%20Palmerah%2C%20Kec.%20Palmerah%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2011480!5e0!3m2!1sen!2sid!4v1639656146443!5m2!1sen!2sid" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>-->

            <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
            <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7GG0A9m97gll1OGT66O5BO70KiFJCEDY&callback=initMap&libraries=&v=weekly"
            async
            ></script>
  
        </div>
    </section>

@endsection