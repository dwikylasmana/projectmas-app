@extends('layout/main_layout_v2')

@section('content') 
<br>
    <div class="container mt-5">
        <div class="card border-10 shadow rounded">
          <h5 class="card-header">Informasi Pendaftaran</h5>

          @if (count($daftar) === 0)

            <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="col-sm-12 es text-center"> <img src="https://www.vectorjunky.com/wp-content/uploads/2017/02/Pr%20038%20-%20TRI%20-%2004_09_10%20-%20012.jpg" width="130" height="130" class="img-fluid mb-4 mr-3">
                                  <h3><strong>Anda belum memiliki pendaftaran</strong></h3>
                                  <h4>Silahkan mengisi form pendaftaran terlebih dhaulu</h4> <a href="{{ route('pendaftaran.create') }}" class="btn btn-primary cart-btn-transform m-3">Lakukan Pendaftaran</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          @else
            @foreach ($daftar as $daftar)
            
            <div class="table-responsive">
              <table class="table table-striped table-product mt-3">
                  <tbody>
                      <tr>
                          <td>Nomor NIK</td>
                          <td>{{ $daftar->nik }}</td>
                      </tr>
                      <tr>
                        <td>Scan KTP</td>
                        <td><a href="{{ Storage::url("/daftar/{$daftar->scan_ktp}") }}"><button type="submit" class="btn bg-success text-light">Lihat</button></a>
                      </tr>
                      <tr>
                        <td>Scan KK</td>
                        <td><a href="{{ Storage::url("/daftar/{$daftar->scan_kk}") }}"><button type="submit" class="btn bg-success text-light">Lihat</button></a>
                      </tr>
                      <tr>
                        <td>No. Telp</td>
                        <td>{{ $daftar->telp }}</td>
                      </tr>
                      <tr>
                        <td>Negara</td>
                        <td>{{ $daftar->negara }}</td>
                      </tr>
                      <tr>
                        <td>Provinsi</td>
                        <td>{{ $daftar->provinsi }}</td>
                      </tr>
                      <tr>
                        <td>Alamat</td>
                        <td>{!! $daftar->alamat !!}</td>
                      </tr>
                      <tr>
                        <td>Nomor NPWP</td>
                        <td>{{ $daftar->npwp }}</td>
                      </tr>
                      <tr>
                        <td>Scan NPWP</td>
                        <td><a href="{{ Storage::url("/daftar/{$daftar->scan_npwp}") }}"><button type="submit" class="btn bg-success text-light">Lihat</button></a>
                      </tr>
                      <tr>
                        <td>No SPPKP</td>
                        <td>{{ $daftar->no_sppkp }}</td>
                      </tr>
                      <tr>
                        <td>Scan SPPKP</td>
                        <td><a href="{{ Storage::url("/daftar/{$daftar->scan_sppkp}") }}"><button type="submit" class="btn bg-success text-light">Lihat</button></a>
                      </tr>
                      <tr>
                        <td>Tanggal Pengajuan</td>
                        <td>{{ $daftar->created_at }}</td>
                      </tr>
                      <tr>
                        <td>Terakhir Dirubah</td>
                        <td>{{ $daftar->updated_at }}</td>
                      </tr>
                      <tr>
                          <td>Validitas</td>
                          <td>@if ($daftar->valid === '0')
                            Belum Valid
                            @else
                            Valid
                          @endif</td>
                      </tr>
                      <tr>
                        <td>Pesan Admin</td>
                        <td>{{ $daftar->msg }}</td>
                      </tr>
                      <tr>
                          <td>Aksi</td>
                          <td><button type="button" class="btn btn-primary"><a href="{{ route('pendaftaran.edit', $daftar->user->id) }}">Edit</a><i class="far fa-eye"></i></button>
                              <button type="button" style="background-color:transparent">
                                  <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pendaftaran.destroy', $daftar->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn bg-danger text-light">Hapus</button>
                                  </form><i class="far fa-trash-alt"></i></button>
                          </td>
                          <td>
                              

                      </tr>


                      <tr>
                  </tbody>
              </table>
              </div>
            @endforeach
        @endif
      </div>
  </div>

@endsection