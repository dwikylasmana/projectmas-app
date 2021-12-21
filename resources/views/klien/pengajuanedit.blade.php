@extends('layout/main_layout_v2')

@section('content') 
<br>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <h5 class="card-header">Rubah Pengajuan</h5>
                    @foreach ($pengajuan as $pengajuan)
                    <div class="card-body">
                        <form action="{{ route('pengajuanloi.update', $pengajuan->user->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Deskripsi LOI</label>
                                <input id="content" type="hidden" name="content" value="{{ old('content', $pengajuan->content) }}">
                                <trix-editor input="content"></trix-editor>
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label class="font-weight-bold">File 1</label>
                                <img src="{{ Storage::url("/pengajuan/{$pengajuan->file1}") }}" class="rounded d-flex" style="width: 50%">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="file1">
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <label class="font-weight-bold">File 2</label>
                                @if ($pengajuan->file2 === null)
                                @else
                                <img src="{{ Storage::url("/pengajuan/{$pengajuan->file2}") }}" class="rounded d-flex" style="width: 50%">
                                @endif

                                <div class="form-group">
                                    <input type="file" class="form-control" name="file2">
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <label class="font-weight-bold">File 3</label>
                                @if ($pengajuan->file3 === null)
                                @else
                                <img src="{{ Storage::url("/pengajuan/{$pengajuan->file3}") }}" class="rounded d-flex" style="width: 50%">
                                @endif
                                <div class="form-group">
                                    <input type="file" class="form-control" name="file3">
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <label class="font-weight-bold">File 4</label>
                                @if ($pengajuan->file3 === null)
                                @else
                                <img src="{{ Storage::url("/pengajuan/{$pengajuan->file4}") }}" class="rounded d-flex" style="width: 50%">
                                @endif
                                <div class="form-group">
                                    <input type="file" class="form-control" name="file4">
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-md mt-5 btn-primary">Rubah</button>
                        
                        </form> 
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection