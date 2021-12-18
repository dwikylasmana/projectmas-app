@extends('layout/main_layout_v2')

@section('content') 

    <br>
    <br>
    <section id="berita">

        <h1 class="mb-5 text-center">Berita Acara Perusahaan</h1>

        <div class="d-flex justify-content-center">
            {{ $news->links() }}
        </div>

        <div class="row justify-content-center mb-3">
            <div class="col-md-4">
                <form action="/berita">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Pencarian</button>
                      </div>
                </form>
            </div>
        </div>

        @if ($news->count())

        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $news[0]->category->type }}" class="card-img-top" alt="{{ $news[0]->category->name }}">
            <div class="card-body text-center">
              <h3 class="card-title"><a href="/berita/{{ $news[0]->slug }}" class="text-decoration-none">{{ $news[0]->title }}</a></h3>
              <p class="card-text">{{ $news[0]->intro }}</p>
              <small class="text-muted"><p>Ditulis oleh {{ $news[0]->user->name }}</p>
              <p>Kategori: <a href="/berita/kategori/{{ $news[0]->category->slug }}"> {{ $news[0]->category->name }}</a></p>
              <p class="card-text">Terakhir dirubah {{ $news[0]->updated_at->diffForHumans() }}</small></p>
              <a href="/berita/{{ $news[0]->slug }}" class="btn btn-primary"> Baca Lebih lanjut </a>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                @foreach ($news->skip(1) as $news)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="position-absolute bg-dark px-2 py-2 text-white"><a href="/berita/kategori/{{ $news->category->slug }}">{{ $news->category->name }}</a></div>
                        <img src="https://source.unsplash.com/500x400?{{ $news->category->type }}" class="card-img-top" alt="{{ $news->category->name }}">
                        <div class="card-body">
                          <h4><a href="/berita/{{ $news->slug }}">{{ $news->title }}</a></h4>
                          <small class="text-muted"><p>Ditulis oleh {{ $news->user->name }} | {{ $news->updated_at->diffForHumans() }}</small></p>
                          <p class="card-text">{{ $news->intro }}</p>
                          <a href="/berita/{{ $news->slug }}" class="btn btn-primary"> Baca Lebih lanjut </a>
                        </div>
                      </div>
                </div>
            @endforeach
            </div>
        </div>


        @else

        <h4 class="text-center fs-4">Berita tidak ditemukan.</h4>

        @endif

        <br>
    </section>

@endsection