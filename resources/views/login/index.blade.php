@extends('layout/welcome_menu')

@section('content')       

    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin">
                <form>
                    <img class="mb-4 mt-5 justify-content-center" src="/gambar/logo_head.png" alt="" width="200" height="100%">
                    <h1 class="h3 mb-3 fw-normal text-center">Silahkan Login</h1>
            
                    <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Alamat Email</label>
                    </div>
                    <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                    </div>
            
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="mt-3">Belum buat akun? <a href="/register">Registrasi Sekarang!</a></small>
                </main>
        </div>
    </div>


@endsection