@extends('layout/main_layout_v2')

@section('content')  

<section id="gallery" class="gallery">

  <h1>Gallery Project PT. Multplikasi Artha Sejahtera</h1>
  <div class="container">

    <div class="section-title">
      <p>Projek Achievement dari PT. Multiplikasi Artha Sejahtera</p>
    </div>

    <div class="row gy-4">
      <div class="col-lg-8">
        <div class="gallery-details-slider swiper">
          <div class="swiper-wrapper align-items-center">
                
                  
                <div class="swiper-slide">
                  <img src="/gambar/projek/{{ $gallery_func->image1 }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/gambar/projek/{{ $gallery_func->image2 }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/gambar/projek/{{ $gallery_func->image3 }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="/gambar/projek/{{ $gallery_func->image4 }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="gallery-info">
              <h3>{{ $gallery_func->title }}</h3>
              <ul>
                <li><strong>Diupload Oleh : </strong>{{ $gallery_func->user->name }}</li>
                <li><strong>Tanggal Unggah : </strong>{{ $gallery_func->created_at }}</li>
              </ul>
            </div>
            <div class="gallery-description">
              <p>
                {{ $gallery_func->content }}
              </p>
            </div>
          </div>
        </div>
  </div>

@endsection