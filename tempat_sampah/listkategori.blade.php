@extends('layout/main_layout_v2')

@section('content') 

    <br>
    <br>
    <section id="berita">

        <h1 class="mb-5">Berita Acara Perusahaan</h1>
        @foreach ($news as $news)
        <article class="mb-5 border-bottom pb-3">
            <h2>
                <a href="/berita/{{ $news->slug }}">{{ $news->title }}</a>
            </h2>
            <h5>Ditulis oleh {{ $news->user->name }}</h5> <h5> Kategori: <a href="/berita/kategori/{{ $news->category->slug }}"> {{ $news->category->name }}</a></h5>
            <h6>Diperbarui {{ $news->updated_at }}</h6>
            <p>{{ $news->intro }}</p>
            <a href="/berita/{{ $news->slug }}"> Baca Lebih lanjut </a>

        </article>
        @endforeach
    </section>

@endsection