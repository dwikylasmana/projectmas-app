@extends('layout/main_layout_v2')

@section('content')  

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br>
                <h2>
                    <a href="/berita/{{ $news->slug }}">{{ $news->title }}</a>
                </h2>
                <h5>Ditulis oleh {{ $news->user->name }}</h5>
                <h5>Category: <a href="/berita/kategori/{{ $news->category->slug }}"> {{ $news->category->name }}</a> | Diperbarui {{ $news->updated_at }}</h5>
                <br>
                <img src="https://source.unsplash.com/820x400?{{ $news->category->type }}" class="image-fluid" alt="{{ $news->category->name }}">
                <article class='mt-3'>
                {!! $news->content !!}
                </article>
                <a href="/berita" class="mt-5">Kembali ke Halaman Berita</a>
            </div>
        </div>
    </div>
    <br>

@endsection