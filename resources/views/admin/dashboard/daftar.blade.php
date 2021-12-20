@extends('admin.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Panel {{ $title }}</h3>
        <h5>Admin: {{ auth()->user()->name }}</h5>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <br>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">No. Telepon</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Detail</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($daftar as $daftar)
                                <tr>
                                    <td>{{ $daftar->id }}</td>
                                    <td>{{ $daftar->name }}</td>
                                    <td>{{ $daftar->telp }}</td>
                                    <td>{{ $daftar->nik }}</td>
                                    <td>
                                        <a href="{{ route('daftar.show', $daftar->id) }}" class="badge bg-primary">Detail</a>
                                        <a href="{{ route('daftar.edit', $daftar->id) }}" class="badge bg-warning">Revisi</a>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('daftar.destroy', $daftar->id) }}" method="POST" class="d-inline">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="badge bg-danger">Hapus</button>
                                      </form>
                                    </td>
                                </tr>



                              @empty

                                  <div class="alert alert-danger">
                                      Data Blog belum Tersedia.
                                  </div>

                              @endforelse
                            </tbody>
                          </table>  
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection