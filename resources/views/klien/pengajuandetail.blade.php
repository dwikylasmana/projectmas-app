@extends('admin.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Panel {{ $title }}</h3>
        <h5>Admin: {{ auth()->user()->name }}</h5>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <br>
                <h2>
                     ID No: {{ $pengajuan->id }}
                </h2>
                <br>
                <h5>Klien: {{ $pengajuan->user->name }}</h5>
                <h5>Tanggal Unggah: {{ $pengajuan->created_at }} | Terakhir dirubah {{ $pengajuan->updated_at }}</h5>
                <article class='mt-3'>
                    {{ $pengajuan->content }}
                </article>
                <br>

                <h3><a href="pengajuan/download">Download File</a></h3>

                <article class='mt-3'>
                    {{ $pengajuan->msg }}
                </article>
                <br>

                <div class="mb-3 row">
                    <label for="valid">Validitas Dokumen</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="valid" value="
        
                            @if ($pengajuan->valid === 0)
                                Belum Valid
                                @else
                                Valid
                            @endif
        
                    " >
                    </div>
                </div>

                <br>
                <br>
                <a href="{{ route('pengajuan.index') }}" class="mt-5">Kembali ke Halaman Dashboard</a>
            </div>
        </div>
    </div>

@endsection