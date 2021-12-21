@extends('layout/main_layout_v2')

@section('content')  

<section id="gallery" class="gallery">
    <div class="container">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
      <div class="lightbox-gallery">
          <div class="container">
              <div class="intro">
                  <h2 class="text-center">Gallery Project PT. Multplikasi Artha Sejahtera</h2>
              </div>
              <div class="row photos">
                  @if ($gallery_func->image1 === null)
                  @else
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ Storage::url("/projek/{$gallery_func->image1}") }}" data-lightbox="photos"><img class="img-fluid" src="{{ Storage::url("/projek/{$gallery_func->image1}") }}"></a></div>
                  @endif
                  
                  @if ($gallery_func->image2 === null)
                  @else
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ Storage::url("/projek/{$gallery_func->image2}") }}" data-lightbox="photos"><img class="img-fluid" src="{{ Storage::url("/projek/{$gallery_func->image2}") }}"></a></div>
                  @endif

                  @if ($gallery_func->image3 === null)
                  @else
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ Storage::url("/projek/{$gallery_func->image3}") }}" data-lightbox="photos"><img class="img-fluid" src="{{ Storage::url("/projek/{$gallery_func->image3}") }}"></a></div>
                  @endif

                  @if ($gallery_func->image4 === null)
                  @else
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ Storage::url("/projek/{$gallery_func->image4}") }}" data-lightbox="photos"><img class="img-fluid" src="{{ Storage::url("/projek/{$gallery_func->image4}") }}"></a></div>
                  @endif
                  
                  @if ($gallery_func->image5 === null)
                  @else
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ Storage::url("/projek/{$gallery_func->image5}") }}" data-lightbox="photos"><img class="img-fluid" src="{{ Storage::url("/projek/{$gallery_func->image5}") }}"></a></div>
                  @endif

                  @if ($gallery_func->image6 === null)
                  @else
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ Storage::url("/projek/{$gallery_func->image6}") }}" data-lightbox="photos"><img class="img-fluid" src="{{ Storage::url("/projek/{$gallery_func->image6}") }}"></a></div>
                  @endif

                  @if ($gallery_func->image7 === null)
                  @else
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ Storage::url("/projek/{$gallery_func->image7}") }}" data-lightbox="photos"><img class="img-fluid" src="{{ Storage::url("/projek/{$gallery_func->image7}") }}"></a></div>
                  @endif

                  @if ($gallery_func->image8 === null)
                  @else
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ Storage::url("/projek/{$gallery_func->image8}") }}" data-lightbox="photos"><img class="img-fluid" src="{{ Storage::url("/projek/{$gallery_func->image8}") }}"></a></div>
                  @endif

                  @if ($gallery_func->image9 === null)
                  @else
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ Storage::url("/projek/{$gallery_func->image9}") }}" data-lightbox="photos"><img class="img-fluid" src="{{ Storage::url("/projek/{$gallery_func->image9}") }}"></a></div>
                  @endif
                  
                  @if ($gallery_func->image10 === null)
                  @else
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="{{ Storage::url("/projek/{$gallery_func->image10}") }}" data-lightbox="photos"><img class="img-fluid" src="{{ Storage::url("/projek/{$gallery_func->image10}") }}"></a></div>
                  @endif
              </div>
          </div>
      </div>

      <div class="row">
          <div class="col-md-5">
              <div class="project-info-box mt-0">
                  <h5>PROJECT {{ $gallery_func->title }}</h5>
                  <p class="mb-0">{{ $gallery_func->content }}</p>
              </div>

              <div class="project-info-box">
                  <p><b>Slug          :</b> {{ $gallery_func->slug }} </p>
                  <p><b>Pengunggah    :</b> {{ $gallery_func->user->name }}</p>
                  <p><b>Tanggal Upload:</b> {{ $gallery_func->created_at }}</p>
                  <p><b>Tanggal Rubah :</b> {{ $gallery_func->updated_at }}</p>
              </div>
          </div>
      </div>
    </div>

    <button type="button" class="btn btn-warning text-white"><a href="/galeri/">Kembali ke Halaman Galleri</a></button>

</section>
@endsection