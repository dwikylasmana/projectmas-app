@extends('admin.main')

@section('content')
  
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Panel {{ $title }}</h3>
        <h5>Admin: {{ auth()->user()->name }}</h5>
    </div>

    <div class="table-responsive lg-8">

        <a href="{{ route('jadwal.create') }}" class="btn btn-primary md-3">Buat Jadwal Baru</a>

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">User</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Waktu</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Note</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($jadwal as $jadwal)
                <tr>
                    <td>{{ $jadwal->id }}</td>
                    <td>{{ $jadwal->user->name }}</td>
                    <td>{{ $jadwal->date  }}</td>
                    <td>{{ $jadwal->time  }}</td>
                    <td>{{ $jadwal->lokasi  }}</td>
                    <td>{!! $jadwal->note !!}</td>
                    <td>
                        <a href="{{ route('jadwal.show', $jadwal->id) }}" class="badge bg-primary">Detail</a>
                        <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="badge bg-warning">Edit</a>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" class="d-inline">
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