@extends('layout/main_layout_v2')

@section('content')

       <!-- if not login balik ke welcome.blade.php as warning js-->

       <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
              <div class="container text-center text-md-left" data-aos="fade-up">
                     <h1>Selamat Datang</h1>
                     <h2>SILAHKAN LOGIN TERLEBIH DAHULU</h2>
                     <a href="/login" class="btn-get-started scrollto">LOGIN</a>
              </div>
       </section>

@endsection