@extends('layout/main_layout_v2')

@section('content')   

       <!-- if not login balik ke welcome.blade.php as warning js-->
       
       <header class="masthead">
              <div class="container">
                     <div class="masthead-1">Selamat Datang!</div>
                     <div class="masthead-2 text-uppercase">Silahkan Login Terlebih Dahulu</div>
                     <a class="btn btn-primary btn-xl text-uppercase" href="/login">Login</a>
              </div>
       </header>



@endsection