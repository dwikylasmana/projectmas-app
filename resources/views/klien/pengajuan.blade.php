@extends('layout/main_layout_v2')

@section('content') 

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                  <div class="table-responsive">
                    <table class="table table-striped table-product mt-3">
                        <tbody>
                            <tr>
                                <td width="390">Nama Pengirim</td>
                                <td>{{ $pengajuan->user->name }}</td>
                            </tr>
                            <tr>
                              <td width="390">Deskripsi</td>
                              <td>{{ $pengajuan->content }}</td>
                          </tr>
                            <tr>
                              <td>File 1</td>
                              <td><a href="{{ Storage::url("/pengajuan/{$pengajuan->file1}") }}"><button type="submit" class="btn bg-primary">Lihat</button></a>
                            </tr>
                            <tr>
                              <td>File 2</td>
                              <td><a href="{{ Storage::url("/pengajuan/{$pengajuan->file2}") }}"><button type="submit" class="btn bg-primary">Lihat</button></a>
                            </tr>
                            <tr>
                              <td>File 4</td>
                              <td><a href="{{ Storage::url("/pengajuan/{$pengajuan->file2}") }}"><button type="submit" class="btn bg-primary">Lihat</button></a>
                            </tr>
                            <tr>
                              <td>File 3</td>
                              <td><a href="{{ Storage::url("/pengajuan/{$pengajuan->file2}") }}"><button type="submit" class="btn bg-primary">Lihat</button></a>
                            </tr>
                            <tr>
                                <td>Validitas</td>
                                <td>@if ($pengajuan->valid === 0)
                                  Valid
                                  @else
                                  Belum Valid
                                @endif</td>
                            </tr>
                            <tr>
                              <td>Pesan Admin</td>
                              <td>{{ $pengajuan->msg }}</td>
                            </tr>
                            <tr>
                                <td>Aksi</td>
                                <td></td>
                            </tr>
                              <a href="{{ route('pengajuan.edit', $pengajuan->id) }}" class="btn bg-warning">Edit</a>
                              <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pengajuan.destroy', $pengajuan->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn bg-danger">Hapus</button>
                            <tr>
                        </tbody>
                    </table>
            </div>
                </div>
            </div>
        </div>
    </div>

@endsection