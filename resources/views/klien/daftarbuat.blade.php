@extends('layout/main_layout_v2')

@section('content')    
<br>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <a href="{{ route('pendaftaran.index') }}" class="btn btn-md btn-success mb-3">Sudah mendaftar?</a>
                <div class="card-body">
                    <form action="{{ route('pendaftaran.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="font-weight-bold">Nomor NIK</label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ old('nik') }}" placeholder="Masukkan Nomor NIK">
                            @error('nik')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Scan KTP</label>
                            <input type="file" class="form-control" name="scan_ktp">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Scan KK</label>
                            <input type="file" class="form-control" name="scan_kk">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nomor Telepon</label>
                            <input type="text" class="form-control @error('telp') is-invalid @enderror" name="telp" value="{{ old('telp') }}" placeholder="Masukkan Nomor Telepon">
                            @error('telp')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label class="font-weight-bold">Negara</label>
                            <input type="text" class="form-control @error('negara') is-invalid @enderror" name="negara" value="{{ old('negara') }}" placeholder="Co: Indonesia">
                            @error('negara')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Provinsi</label>
                            <input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" value="{{ old('provinsi') }}" placeholder="Co: Jawa Barat">
                            @error('provinsi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Alamat</label>
                            <input id="alamat" type="hidden" name="alamat" value="{{ old('alamat')}}">
                            <trix-editor input="alamat"></trix-editor>
                        
                            @error('alamat')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nomor NPWP</label>
                            <input type="text" class="form-control @error('npwp') is-invalid @enderror" name="npwp" value="{{ old('npwp') }}" placeholder="Masukkan Nomor NPWP">
                            @error('npwp')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Scan NPWP</label>
                            <input type="file" class="form-control" name="scan_npwp">
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nomor SPPKP</label>
                            <input type="text" class="form-control @error('no_sppkp') is-invalid @enderror" name="no_sppkp" value="{{ old('no_sppkp') }}" placeholder="Masukkan Nomor SPPKP">
                            @error('no_sppkp')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Scan SPPKP</label>
                            <input type="file" class="form-control" name="scan_sppkp">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection