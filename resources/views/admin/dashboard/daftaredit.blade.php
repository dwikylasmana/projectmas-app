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
                        <form action="{{ route('daftar.update', $daftar->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">NIK</label>
                                <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik', $daftar->nik) }}">
                                @error('nik')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Scan KTP</label>
                                <img src="{{ Storage::url("{$daftar->scan_ktp}") }}" class="rounded d-flex" style="width: 50%">
                                <small>{{ $daftar->scan_ktp }}</small>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Scan Kartu Keluarga</label>
                                <img src="{{ Storage::url("{$daftar->scan_kk}") }}" class="rounded d-flex" style="width: 50%">
                                <small>{{ $daftar->scan_kk }}</small>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">No. Telp</label>
                                <input type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp', $daftar->telp) }}">
                                @error('telp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Negara</label>
                                <input type="text" class="form-control @error('negara') is-invalid @enderror" name="negara" value="{{ old('negara', $daftar->negara) }}">
                                @error('negara')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Provinsi</label>
                                <input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" value="{{ old('provinsi', $daftar->provinsi) }}">
                                @error('provinsi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Alamat</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat', $daftar->alamat) }}">
                                @error('alamat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nomor NPWP</label>
                                <input type="text" class="form-control @error('npwp') is-invalid @enderror" name="npwp" value="{{ old('npwp', $daftar->npwp) }}">
                                @error('npwp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Scan NPWP</label>
                                <img src="{{ Storage::url("{$daftar->scan_npwp}") }}" class="rounded d-flex" style="width: 50%">
                                <small>{{ $daftar->scan_npwp }}</small>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">No. SPPKP</label>
                                <input type="text" class="form-control @error('no_sppkp') is-invalid @enderror" name="no_sppkp" value="{{ old('no_sppkp', $daftar->no_sppkp) }}">
                                @error('no_sppkp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Scan SPPKP</label>
                                <img src="{{ Storage::url("{$daftar->scan_sppkp}") }}" class="rounded d-flex" style="width: 50%">
                                <small>{{ $daftar->scan_sppkp }}</small>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Note Revisi</label>
                                <input id="msg" type="hidden" name="msg" value="{{ old('msg', $daftar->msg) }}">
                                <trix-editor input="msg"></trix-editor>
                                @error('msg')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="mb-3 mt-5">
                                <label for="valid" class="form-label">Valid?</label>
                                <select class="form-select" name="valid">s
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