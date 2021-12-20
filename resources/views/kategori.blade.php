@extends('layout/main_layout_v2')

@section('content')      
    <section id="kategori">
        <h1 class="mt-5 py-3">Kategori Berita</h1>

        <div class="container pt-4 pb-4">
            <div class="row">
                @foreach ($category as $category)
                <div class="col-md-4">
                    <a href="/berita/kategori/{{ $category->slug }}">
                    <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x400?{{ $category->type }}" class="card-img-top" alt="{{ $category->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill p-1 fs-3" style="background-color: black">{{ $category->name }}</h5>
                    </div>
                    </a>
                  </div>
                </div>
                @endforeach
            </div>
        </div>

    </section>

@endsection