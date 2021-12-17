@extends('layout/main_layout_v2')

@section('content')  

    <br>
    <article class="mb-5">
        <h2>
            <a href="/berita/{{ $news->slug }}">{{ $news->title }}</a>
        </h2>
        <h5>Ditulis oleh {{ $news->user->name }}</h5>
        <h5>Category: <a href="/berita/kategori/{{ $news->category->slug }}"> {{ $news->category->name }}</a></h5>
        <h5>Diperbarui {{ $news->publish }}</h5>
        {!! $news->content !!}
    </article>
    <br>
    <a href="/berita" class="mt-5">Kembali ke Halaman Berita</a>
    
@endsection