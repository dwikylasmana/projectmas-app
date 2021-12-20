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
                        <a href="{{ route('galleri.store') }}" class="btn btn-md btn-success mb-3">Tambah Album</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Pengunggah</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Detail</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($galleri as $galleri)
                                <tr>
                                    <td>{{ $galleri->id }}</td>
                                    <td>{{ $galleri->title }}</td>
                                    <td>{{ $galleri->user->name }}</td>
                                    <td class="text-center">
                                        @if ($galleri->image1 === null)
                                        @else
                                            <img src="{{ Storage::url("/projek/{$galleri->image1}") }}" class="rounded d-flex" style="width: 200px">
                                            <small>{{ $galleri->image1 }}</small>
                                        @endif

                                        @if ($galleri->image2 === null)
                                        @else
                                            <img src="{{ Storage::url("/projek/{$galleri->image2}") }}" class="rounded d-flex" style="width: 200px">
                                            <small>{{ $galleri->image2 }}</small>
                                        @endif

                                        @if ($galleri->image3 === null)
                                        @else
                                            <img src="{{ Storage::url("/projek/{$galleri->image3}") }}" class="rounded d-flex" style="width: 200px">
                                            <small>{{ $galleri->image3 }}</small>
                                        @endif

                                        @if ($galleri->image4 === null)
                                        @else
                                            <img src="{{ Storage::url("/projek/{$galleri->image4}") }}" class="rounded d-flex" style="width: 200px">
                                            <small>{{ $galleri->image4 }}</small>
                                         @endif
                                        @if ($galleri->image5 === null)
                                            @else
                                            <img src="{{ Storage::url("/projek/{$galleri->image5}") }}" class="rounded d-flex" style="width: 200px">
                                            <small>{{ $galleri->image5 }}</small>
                                        @endif

                                        @if ($galleri->image6 === null)
                                        @else
                                            <img src="{{ Storage::url("/projek/{$galleri->image6}") }}" class="rounded d-flex" style="width: 200px">
                                            <small>{{ $galleri->image6 }}</small>
                                        @endif

                                        @if ($galleri->image7 === null)
                                        @else
                                            <img src="{{ Storage::url("/projek/{$galleri->image7}") }}" class="rounded d-flex" style="width: 200px">
                                            <small>{{ $galleri->image7 }}</small>
                                        @endif

                                        @if ($galleri->image7 === null)
                                        @else
                                            <img src="{{ Storage::url("/projek/{$galleri->image7}") }}" class="rounded d-flex" style="width: 200px">
                                            <small>{{ $galleri->image7 }}</small>
                                        @endif

                                        @if ($galleri->image8 === null)
                                        @else
                                            <img src="{{ Storage::url("/projek/{$galleri->image8}") }}" class="rounded d-flex" style="width: 200px">
                                            <small>{{ $galleri->image8 }}</small>
                                        @endif
                                        
                                        @if ($galleri->image9 === null)
                                        @else
                                            <img src="{{ Storage::url("/projek/{$galleri->image9}") }}" class="rounded d-flex" style="width: 200px">
                                            <small>{{ $galleri->image9 }}</small>
                                        @endif

                                        @if ($galleri->image10 === null)
                                        @else
                                            <img src="{{ Storage::url("/projek/{$galleri->image10}") }}" class="rounded d-flex" style="width: 200px">
                                            <small>{{ $galleri->image10 }}</small>
                                        @endif


                                    </td>
                                    <td>
                                        <a href="{{ route('galleri.show', $galleri->slug) }}" class="badge bg-primary">Detail</a>
                                        <a href="{{ route('galleri.edit', $galleri->slug) }}" class="badge bg-warning">Edit</a>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('galleri.destroy', $galleri->id) }}" method="POST" class="d-inline">
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