@extends('admin.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Panel {{ $title }}</h3>
        <h5>Admin: {{ auth()->user()->name }}</h5>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                    <div class="mb-3 row">
                        <label for="id" class="col-sm-2 col-form-label">ID {{ $user->id }}</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="id" value="{{ $user->id }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="name" value="{{ $user->name }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="username" value="{{ $user->username }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="email" value="{{ $user->email }}">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email_verified_at" class="col-sm-2 col-form-label">Tanggal Verifikasi Email</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="email_verified_at" value="{{ ($user->email_verified_at === "") ? 'Belum diverifikasi' : '' }}">
                        </div>
                    </div>

                <a href="{{ route('akun.index') }}" class="mt-5">Kembali ke Halaman Dashboard</a>
            </div>
        </div>
    </div>
    <br>

@endsection