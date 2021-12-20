@extends('admin.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>{{ $title }}</h3>
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
    

    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <form action="{{ route('news.update', $news->slug) }}" method="POST" enctype="multipart/form-data">
            
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label class="font-weight-bold">Judul</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $news->title) }}" placeholder="Masukkan Judul Blog">
                
                    <!-- error message untuk title -->
                    @error('title')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Konten</label>
                    <input id="content" type="hidden" name="content" value="{{ old('content', $news->content) }}">
                    <trix-editor input="content"></trix-editor>
                
                    <!-- error message untuk content -->
                    @error('content')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-md btn-primary">Update</button>

            </form> 
        </div>
    </div>
@endsection