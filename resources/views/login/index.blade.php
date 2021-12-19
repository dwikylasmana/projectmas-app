@extends('layout/main_layout_v2')

@section('content')         


    <br><br>
    <div class="row justify-content-center">
        <div class="col-md-5">

            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif


            <main class="form-signin">
                <form action="/login" method="post">
                    @csrf
                    <div class="logo">
                        <img src="/gambar/logo_head.png" alt="" width="200" height="100%">
                    </div>
                    <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
            
                    <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Alamat Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    
                    <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    </div>
            
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="mt-3">Belum buat akun? <a href="/register">Registrasi Sekarang!</a></small>
                </main>
        </div>
    </div>

    <br>
    <br>
@endsection