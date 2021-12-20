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
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">User</th>
                                <th scope="col">Valid</th>
                                <th scope="col">Tanggal Upload</th>
                                <th scope="col">Terakhir Revisi</th>
                                <th scope="col">Detail</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($pengajuan as $pengajuan)
                                <tr>
                                    <td>{{ $pengajuan->id }}</td>
                                    <td>{{ $pengajuan->user->name }}</td>
                                    <td>{{ $pengajuan->valid }}</td>
                                    <td>{{ $pengajuan->created_at }}</td>
                                    <td>{{ $pengajuan->updated_at }}</td>
                                    </td>
                                    <td>
                                        <a href="{{ route('pengajuan.show', $pengajuan->id) }}" class="badge bg-primary">Detail</a>
                                        <a href="{{ route('pengajuan.edit', $pengajuan->id) }}" class="badge bg-warning">Edit</a>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pengajuan.destroy', $pengajuan->id) }}" method="POST" class="d-inline">
                                          @csrf
                                          @method('DELETE')
                                          <button type="submit" class="badge bg-danger">HAPUS</button>
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