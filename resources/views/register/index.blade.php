@extends('layout/main_layout_v2')

@section('content')       
    <br>
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <form action="/register" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Registrasi Akun</h1>
                    <small>Email</small>
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control rounded-top @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                        <label for="email">Alamat Email</label>
                        <small>Username</small>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="username" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                        <label for="username">Username</label>
                        <small>Nama Lengkap</small>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                        <label for="name">Nama Lengkap</label>
                        <small>Password (Minimal 8 kata & terdiri dari angka)</small>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
                    <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Register</button>
                </form>
                <small class="mt-3">Sudah membuat akun? <a href="/login">Silahkan Login</a></small>
                </main>
        </div>
    </div>


@endsection