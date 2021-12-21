@extends('layout/main_layout_v2')

@section('content') 

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <h5 class="card-header">Buat Pengajuan Baru</h5>
                <div class="card-body">
                    <form action="{{ route('pengajuanloi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">Deskripsi</label>

                            <input id="content" type="hidden" name="content" value="{{ old('content')}}">
                            <trix-editor input="content"></trix-editor>
                            <small>Jelaskan minat yang anda inginkan dengan kami</small>
                        
                            @error('content')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">File 1</label>
                            <input type="file" class="form-control" name="file1">
                        </div>

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">File 2</label>
                            <input type="file" class="form-control" name="file2">
                        </div>

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">File 3</label>
                            <input type="file" class="form-control" name="file3">
                        </div>

                        <div class="form-group mt-3">
                            <label class="font-weight-bold">File 4</label>
                            <input type="file" class="form-control" name="file4">
                        </div>

                        <button type="submit" class="btn btn-md btn-primary mt-5">Simpan</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection