@extends('layout/main_layout_v2')

@section('content')    
<br>
    <section id="jadwal">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3 class="box-title mt-5">Informasi Akun</h3>
            <div class="table-responsive">
                <form method="POST" action="{{ route('acc.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label for="name" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" id="name" value>
                      <div id="name" class="form-text">Nama Anda Sekarang {{ $user->name }}</div>
                    </div>

                    <div class="mb-3">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-warning">Simpan</button>
                  </form>
            </div>
            <br>
            <button type="submit" class="btn btn-primary text-dark"><a href="{{ route('acc.index') }}">Batal Rubah</a></button>
        </div>
    </section>

@endsection