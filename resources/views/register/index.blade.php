@extends('layout/welcome_menu')

@section('content')       
    <br>
    <div class="row mt-5 justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <form>
                    <h1 class="h3 mb-3 fw-normal text-center">Registrasi Akun</h1>
            
                    <div class="form-floating">
                        <input type="email" name="email" class="form-control rounded-top" id="email" placeholder="name@example.com">
                        <label for="email">Alamat Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="username" name="username" class="form-control" id="username" placeholder="Username">
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="nama" class="form-control" id="name" placeholder="Name">
                        <label for="name">Nama Lengkap</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
            
                    <button class="w-100 mt-3 btn btn-lg btn-primary" type="submit">Register</button>
                </form>
                <small class="mt-3">Sudah membuat akun? <a href="/login">Silahkan Login</a></small>
                </main>
        </div>
    </div>


@endsection