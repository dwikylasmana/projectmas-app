@extends('layout/main_layout_v2')

@section('content') 

    <br>
    <br>
    <section id="berita">

        <h1 class="mb-5">Berita Acara Perusahaan</h1>

        @if ($news->count())

        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400/?{{ $news[0]->category->name }}" class="card-img-top" alt="...">
            <div class="card-body text-center">
              <h3 class="card-title">{{ $news[0]->title }}</h3>
              <p class="card-text">{{ $news[0]->intro }}</p>
              <small class="text-muted"><p>Ditulis oleh {{ $news[0]->user->name }}</p>
              <p>Kategori: <a href="/berita/kategori/{{ $news[0]->category->slug }}"> {{ $news[0]->category->name }}</a></p>
              <p class="card-text">Terakhir dirubah {{ $news[0]->updated_at->diffForHumans() }}</small></p>
              <a href="/berita/{{ $news[0]->slug }}" class="btn btn-primary"> Baca Lebih lanjut </a>
            </div>
        </div>
          
        @else

          <h4 class="text-center fs-4">Berita tidak ditemukan.</h4>

        @endif

        <br>
        @foreach ($news as $news)
        <article class="mt-3 mb-2 border-bottom pb-3">
            <h4>
                <a href="/berita/{{ $news->slug }}">{{ $news->title }}</a>
            </h4>
            <h5>Ditulis oleh {{ $news->user->name }}</h5> <h5> Kategori: <a href="/berita/kategori/{{ $news->category->slug }}"> {{ $news->category->name }}</a></h5>
            <h6>Diperbarui {{ $news->updated_at }}</h6>
            <p>{{ $news->intro }}</p>
            <a href="/berita/{{ $news->slug }}"> Baca Lebih lanjut </a>

        </article>
        @endforeach
    </section>

@endsection