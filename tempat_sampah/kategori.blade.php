@extends('layout/main_layout_v2')

@section('content')      

    <h1 class="mb-5">Kategori Berita: {{ $category }}</h1>

    @foreach ($news as $news)
    <article class="mb-5">
        <h2>
            <a href="/berita/{{ $news->slug }}">{{ $news->title }}</a>
        </h2>
        <h5>Ditulis oleh {{ $news->author }}</h5>
        <h5>Diperbarui {{ $news->publish }}</h5>
        <p>{{ $news->intro }}</p>
    </article>
    @endforeach

@endsection