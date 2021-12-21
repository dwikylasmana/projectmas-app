@extends('admin.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Panel {{ $title }}</h3>
        <h5>Admin: {{ auth()->user()->name }}</h5>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('pengajuan.update', $pengajuan->id) }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Note</label>
                                <input type="text" class="form-control @error('msg') is-invalid @enderror" name="msg" value="{{ old('msg', $pengajuan->msg) }}" placeholder="Note">
                                @error('msg')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3 mt-5">
                                <label for="valid" class="form-label">Valid?</label>
                                <select class="form-select" name="valid">
                                        <option value="0">Belum Valid</option>
                                        <option value="1">Sudah Valid</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Rubah</button>
                        
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection