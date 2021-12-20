@extends('admin.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Panel {{ $title }}</h3>
        <h5>Admin: {{ auth()->user()->name }}</h5>
    </div>

    <div class="table-responsive lg-8">

        <a href="/dashboard/berita/create" class="btn btn-primary md-3">Buat Post Baru</a>


        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Kategori</th>
              <th scope="col">Pembuat</th>
              <th scope="col">Judul</th>
              <th scope="col">Detail</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($news as $news)
                <tr>
                    <td>{{ $news->id }}</td>
                    <td>{{ $news->category->name }}</td>
                    <td>{{ $news->user->name  }}</td>
                    <td>{{ $news->title }}</td>
                    <td>
                        <a href="/dashboard/berita/{{ $news->slug }}" class="badge bg-primary">Detail</a>
                        <a href="{{ route('news.edit', $news->slug) }}" class="badge bg-warning">Edit</a>
                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('news.destroy', $news->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="badge bg-danger">HAPUS</button>
                      </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection