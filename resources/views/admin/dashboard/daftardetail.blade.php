@extends('admin.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Panel {{ $title }}</h3>
        <h5>Admin: {{ auth()->user()->name }}</h5>
    </div>

      
    <div class="container">

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="name" value="{{ $daftar->user->username }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="name" value="{{ $daftar->name }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Tanggal Kirim</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="name" value="{{ $daftar->created_at }}">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="nik" class="col-sm-2 col-form-label">No. NIK</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="nik" value="{{ $daftar->nik }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="scan_ktp" class="col-sm-2 col-form-label">Scan KTP</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="scan_ktp">
            @if ($daftar->scan_ktp === null)
            @else
                <img src="{{ Storage::url("/projek/daftar/{$daftar->scan_ktp}") }}" class="rounded d-flex" style="width: 50%">
                <small>{{ $daftar->scan_ktp }}</small>
            @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="scan_kk" class="col-sm-2 col-form-label">Scan KK</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="scan_kk">
            @if ($daftar->scan_kk === null)
            @else
                <img src="{{ Storage::url("/projek/daftar/{$daftar->scan_kk}") }}" class="rounded d-flex" style="width: 50%">
                <small>{{ $daftar->scan_kk }}</small>
            @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="telp" class="col-sm-2 col-form-label">No. Telepon</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="telp" value="{{ $daftar->telp }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="negara" class="col-sm-2 col-form-label">Negara</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="negara" value="{{ $daftar->negara }}">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="provinsi" class="col-sm-2 col-form-label">Provinsi</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="provinsi" value="{{ $daftar->provinsi }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="alamat" value="{{ $daftar->alamat }}">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="scan_npwp" class="col-sm-2 col-form-label">Scan NPWP</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="scan_npwp">
            @if ($daftar->scan_npwp === null)
            @else
                <img src="{{ Storage::url("/projek/daftar/{$daftar->scan_npwp}") }}" class="rounded d-flex" style="width: 50%">
                <small>{{ $daftar->scan_npwp }}</small>
            @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="no_sppkp" class="col-sm-2 col-form-label">No. SPPKP</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="no_sppkp" value="{{ $daftar->no_sppkp }}" >
            </div>
        </div>

        <div class="mb-3 row">
            <label for="scan_sppkp" class="col-sm-2 col-form-label">Scan SPPKP</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="scan_sppkp">
            @if ($daftar->scan_sppkp === null)
            @else
                <img src="{{ Storage::url("/projek/daftar/{$daftar->scan_sppkp}") }}" class="rounded d-flex" style="width: 50%">
                <small>{{ $daftar->scan_sppkp }}</small>
            @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="msg" class="col-sm-2 col-form-label">Revisi</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="msg" value="{{ $daftar->msg }}" >
            </div>
        </div>

        <div class="mb-3 row">
            <label for="valid" class="col-sm-2 col-form-label">Validitas Dokumen</label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="valid" value="

                    @if ($daftar->valid === 0)
                        Belum Valid
                        @else
                        Valid
                    @endif

            " >
            </div>
        </div>


    </div>
    <br>
    <br>
    <a href="{{ route('daftar.index') }}" class="mt-5">Kembali ke Halaman Dashboard</a>
    <br>
    <br>
@endsection