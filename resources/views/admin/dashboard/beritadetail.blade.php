@extends('admin.main')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <img src="https://source.unsplash.com/1200x200?{{ $news->category->type }}" class="card-img-top" alt="{{ $news->category->name }}">
                <br>
                <h2>
                    {{ $news->title }}
                </h2>

                <br>
                <h5>Admin: {{ $news->user->name }} | Kategori {{ $news->category->name }}</h5>
                <h5>Dibuat: {{ $news->created_at }} | Dirubah {{ $news->updated_at }}</h5>

                <p>Intro: {{ $news->intro }}</p>
                <article class='mt-3'>
                    {{ $news->content }}
                </article>
                <a href="/dashboard/" class="mt-5">Kembali ke Halaman Dashboard</a>
            </div>
        </div>
    </div>
    <br>

@endsection