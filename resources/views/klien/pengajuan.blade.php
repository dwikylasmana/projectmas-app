@extends('layout/main_layout_v2')

@section('content') 


    @if (count($pengajuan) === 0)

      <div class="container-fluid mt-100">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-body">
                          <div class="col-sm-12 es text-center"> <img src="https://www.vectorjunky.com/wp-content/uploads/2017/02/Pr%20038%20-%20TRI%20-%2004_09_10%20-%20012.jpg" width="130" height="130" class="img-fluid mb-4 mr-3">
                              <h3><strong>Anda belum membuat pengajuan LOI</strong></h3>
                              <h4>Silahkan mengisi form pengajuan terlebih dahulu</h4> 
                              <a href="{{ route('pengajuanloi.create') }}" class="btn btn-primary cart-btn-transform m-3">Lakukan Pengajuan</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    @endif

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                  <h5 class="card-header"> Pengajuan Anda</h5>
                  <div class="table-responsive">
                    @foreach ($pengajuan as $pengajuan)
                    <table class="table table-striped table-product mt-3">
                        <tbody>
                            <tr>
                                <td width="390">Nama Pengirim</td>
                                <td>{{ $pengajuan->user->name }}</td>
                            </tr>
                            <tr>
                              <td width="390">Deskripsi</td>
                              <td>{!! $pengajuan->content !!}</td>
                            </tr>
                            <tr>
                              <td width="390">Tanggal Pengiriman</td>
                              <td>{!! $pengajuan->created_at !!}</td>
                            </tr>
                            <tr>
                              <td width="390">Terakhir Rubah</td>
                              <td>{!! $pengajuan->created_at !!}</td>
                            </tr>
                            <tr>
                              <td>File 1</td>
                              <td><a href="{{ Storage::url("/pengajuan/{$pengajuan->file1}") }}"><button type="submit" class="btn bg-success text-light">Lihat</button></a>
                            </tr>
                            <tr>
                              <td>File 2</td>
                              @if ($pengajuan->file2 === null)
                              <td>Anda tidak mengupload ke File 2<td>
                              @else
                              <td><a href="{{ Storage::url("/pengajuan/{$pengajuan->file2}") }}"><button type="submit" class="btn bg-success text-light">Lihat</button></a>
                              @endif
                            </tr>
                            <tr>
                              <td>File 3</td>
                              @if ($pengajuan->file2 === null)
                              <td>Anda tidak mengupload ke File 2<td>
                              @else
                              <td><a href="{{ Storage::url("/pengajuan/{$pengajuan->file2}") }}"><button type="submit" class="btn bg-success text-light">Lihat</button></a>
                              @endif
                              </tr>
                            <tr>
                              <td>File 3</td>
                              @if ($pengajuan->file3 === null)
                              <td>Anda tidak mengupload ke File 3<td>
                              @else
                              <td><a href="{{ Storage::url("/pengajuan/{$pengajuan->file3}") }}"><button type="submit" class="btn bg-success text-light">Lihat</button></a>
                              @endif
                            </tr>
                            <tr>
                              <td>File 4</td>
                              @if ($pengajuan->file4 === null)
                              <td>Anda tidak mengupload ke File 4<td>
                              @else
                              <td><a href="{{ Storage::url("/pengajuan/{$pengajuan->file4}") }}"><button type="submit" class="btn bg-success text-light">Lihat</button></a>
                              @endif
                            </tr>
                            <tr>
                                <td>Validitas</td>
                                <td>@if ($pengajuan->valid === '0')
                                    Valid
                                    @else
                                    Belum Valid
                                    @endif
                                </td>
                            </tr>
                            <tr>
                              <td>Pesan Admin</td>
                              <td>{{ $pengajuan->msg }}</td>
                            </tr>
                            <tr>
                              <td>Aksi</td>
                              <td><button type="button" class="btn btn-primary text-dark"><a href="{{ route('pengajuanloi.edit', $pengajuan->user->id) }}">Edit</a><i class="far fa-eye"></i></button>
                                  <button type="button">
                                      <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pengajuanloi.destroy', $pengajuan->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn bg-danger text-light">Hapus</button>
                                      </form><i class="far fa-trash-alt"></i></button>
                              </td>
                              <td>
                          </tr>
                        </tbody>
                    </table>
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>

@endsection