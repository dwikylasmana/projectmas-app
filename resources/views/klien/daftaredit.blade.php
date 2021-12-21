@extends('layout/main_layout_v2')

@section('content') 
<br>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <h5 class="card-header">Rubah Pendaftaran</h5>
                    @foreach ($daftar as $daftar)
                    <div class="card-body">
                        <form action="{{ route('pendaftaran.update', $daftar->user->id) }}" method="POST" enctype="multipart/form-data">

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
                                <img src="{{ Storage::url("/daftar/{$daftar->scan_ktp}") }}" class="rounded d-flex" style="width: 50%">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="scan_ktp">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Scan Kartu Keluarga</label>
                                <img src="{{ Storage::url("/daftar/{$daftar->scan_kk}") }}" class="rounded d-flex" style="width: 50%">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="scan_kk">
                                </div>
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
                                <input id="alamat" type="hidden" name="alamat" value="{{ old('alamat', $daftar->alamat) }}">
                                <trix-editor input="alamat"></trix-editor>
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
                                <img src="{{ Storage::url("/daftar/{$daftar->scan_npwp}") }}" class="rounded d-flex" style="width: 50%">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="scan_npwp">
                                </div>
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
                                <img src="{{ Storage::url("/daftar/{$daftar->scan_sppkp}") }}" class="rounded d-flex" style="width: 50%">
                                <div class="form-group">
                                    <input type="file" class="form-control" name="scan_sppkp">
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