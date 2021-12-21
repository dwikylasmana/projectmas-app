@extends('layout/main_layout_v2')

@section('content')    
<br>
    <section id="akun">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3 class="box-title mt-5">Informasi Akun</h3>
            <div class="table-responsive">
                    <table class="table table-striped table-product mt-3">
                        <tbody>
                            <tr>
                                <td width="390">Nama</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>{{ $user->username }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $user->email }}</td>
                            </tr>

                            <tr>
                                <td>Aksi</td>
                                <td><a href="{{ route('acc.edit', $user->id) }}" class="btn bg-warning">Edit</a>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('akun.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn bg-danger">Hapus</button>
                                    </form></td>
                                </td>

                            </tr>


                            <tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </section>

@endsection