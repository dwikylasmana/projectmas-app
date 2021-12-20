@extends('admin.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Panel {{ $title }}</h3>
        <h5>Admin: {{ auth()->user()->name }}</h5>
    </div>

    <div class="table-responsive lg-8">

        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nama</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Verifikasi Email</th>
              <th scope="col">Akun Admin?</th>
              <th scope="col">Detail</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($user as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username  }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->email_verified_at  }}</td>
                    <td>{{($user->admin === "1") ? 'Admin' : 'Bukan Admin'}}</td>
                    <td>
                        <a href="{{ route('akun.show', $user->id) }}" class="badge bg-primary">Detail</a>
                        <a href="{{ route('akun.edit', $user->id) }}" class="badge bg-warning">Edit</a>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('akun.destroy', $user->id) }}" method="POST" class="d-inline">
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