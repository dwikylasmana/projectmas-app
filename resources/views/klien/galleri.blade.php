@extends('layout/main_layout_v2')

@section('content')  

<section id="gallery" class="gallery">

  <h1 class="mt-5 py-3">Gallery Project PT. Multplikasi Artha Sejahtera</h1>
  <div class="container">

    <div class="section-title">
      <p>Projek Achievement dari PT. Multiplikasi Artha Sejahtera</p>
    </div>

    <div class="row gallery-container" data-aos="fade-up" data-aos-delay="150">
      @foreach ($gallery_func as $gallery_func)
        <div class="col-lg-4 col-md-6 gallery-item filter-app">
          <a href="/galeri/{{ $gallery_func->slug }}"><img src="{{ Storage::url("/projek/{$gallery_func->image1}") }}" class="img-fluid image" alt=""></a>
          <div class="gallery-info">
            <h4>{{ $gallery_func->title }}</h4>
            <h6>Diunngah oleh: {{ $gallery_func->user->name }}</h6>
          </div>
        </div>
      @endforeach

    </div>

  </div>

</section>
  



@endsection



<!--<div class="col-lg-4 col-md-6 gallery-item filter-web">
  <img src="gambar/bg_welcome_2.png" class="img-fluid" alt="">
  <div class="gallery-info">
    <h4>Project B</h4>
    <p>Lokasi:</p>
    <a href="gambar/bg_welcome_2.png" class="gallery-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
    <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
  </div>
</div>-->