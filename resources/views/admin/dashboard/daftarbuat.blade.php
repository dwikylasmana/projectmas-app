@extends('admin.main')

@section('content')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('galleri.store') }}" method="POST" enctype="multipart/form-data">
                    
                        @csrf
                        <div class="form-group">
                            <label class="font-weight-bold">Judul Projek</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul galleri">
                            @error('title')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Deskripsi</label>
                            <input id="content" type="hidden" name="content" value="{{ old('content')}}">
                            <trix-editor input="content"></trix-editor>
                        
                            @error('content')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar 1</label>
                            <input type="file" class="form-control" name="image1">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar 2</label>
                            <input type="file" class="form-control" name="image2">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar 3</label>
                            <input type="file" class="form-control" name="image3">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar 5</label>
                            <input type="file" class="form-control" name="image5">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar 6</label>
                            <input type="file" class="form-control" name="image6">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar 7</label>
                            <input type="file" class="form-control" name="image7">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar 8</label>
                            <input type="file" class="form-control" name="image8">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar 9</label>
                            <input type="file" class="form-control" name="image9">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar 10</label>
                            <input type="file" class="form-control" name="image10">
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">Simpan</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection