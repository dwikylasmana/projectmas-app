@extends('admin.main')

@section('content')
  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Panel {{ $title }}</h3>
        <h5>Admin: {{ auth()->user()->name }}</h5>
    </div>

    <div class="table-responsive lg-8">

        <a href="{{ route('pengajuan.create') }}" class="btn btn-primary md-3">Buat pengajuan Baru</a>

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">User</th>
              <th scope="col">Content</th>
              <th scope="col">Validitas</th>
              <th scope="col">Note</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pengajuan as $pengajuan)
                <tr>
                    <td>{{ $pengajuan->id }}</td>
                    <td>{{ $pengajuan->user->name }}</td>
                    <td>{{ $pengajuan->content  }}</td>
                    <td>{{ $pengajuan->validitas  }}</td>
                    <td>{!! $pengajuan->note !!}</td>
                    <td>
                        <a href="{{ route('pengajuan.show', $pengajuan->id) }}" class="badge bg-primary">Detail</a>
                        <a href="{{ route('pengajuan.edit', $pengajuan->id) }}" class="badge bg-warning">Edit</a>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pengajuan.destroy', $pengajuan->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="badge bg-danger">Hapus</button>
                      </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection