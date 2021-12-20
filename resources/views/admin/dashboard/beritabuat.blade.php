@extends('admin.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Post Baru {{ $title }}</h3>
        <h5>Admin: {{ auth()->user()->name }}</h5>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    <form method="post" action="/dashboard/berita/store">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul Berita</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <!--<div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>-->
        <div class="mb-3">
            <label for="category_id" class="form-label">Kategori</label>
            <select class="form-select" name="category_id">
                @foreach ($category  as $category )
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="content" class="form-label">Isi Berita</label>
                @error('content')
                    <p>{{ $message }}</p>
                @enderror
            <input id="content" type="hidden" name="content" value="{{ old('content') }}">
            <trix-editor input="content"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Buat Post</button>
    </form>
@endsection