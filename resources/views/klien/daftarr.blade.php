@extends('layout/main_layout_v2')

@section('content') 
<br>
    <div class="container mt-5">
        <div class="card border-10 shadow rounded">
          <h3 class="box-title mt-5">Informasi Pendaftaran</h3>
            <div class="table-responsive">
                    <table class="table table-striped table-product mt-3">
                        <tbody>
                            <tr>
                                <td width="390">Nama Pengirim</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Nomor NIK</td>
                                <td>{{ $daftar->nik }}</td>
                            </tr>
                            <tr>
                              <td>Scan KTP</td>
                              <td><a href="{{ Storage::url("/daftar/{$daftar->scan_ktp}") }}"><button type="submit" class="btn bg-primary">Lihat</button></a>
                            </tr>
                            <tr>
                              <td>Scan KK</td>
                              <td><a href="{{ Storage::url("/daftar/{$daftar->scan_kk}") }}"><button type="submit" class="btn bg-primary">Lihat</button></a>
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
                              <td>{{ $daftar->alamat }}</td>
                            </tr>
                            <tr>
                              <td>Nomor NPWP</td>
                              <td>{{ $daftar->npwp }}</td>
                            </tr>
                            <tr>
                              <td>Scan NPWP</td>
                              <td><a href="{{ Storage::url("/daftar/{$daftar->scan_npwp}") }}"><button type="submit" class="btn bg-primary">Lihat</button></a>
                            </tr>
                            <tr>
                              <td>No SPPKP</td>
                              <td>{{ $daftar->no_sppkp }}</td>
                            </tr>
                            <tr>
                              <td>Scan SPPKP</td>
                              <td><a href="{{ Storage::url("/daftar/{$daftar->scan_sppkp}") }}"><button type="submit" class="btn bg-primary">Lihat</button></a>
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
                                <td>@if ($daftar->valid === 0)
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
                                <td><a href="{{ route('pendaftaran.edit', $user->id) }}" class="btn bg-warning">Edit</a>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pendaftaran.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn bg-danger">Hapus</button>
                                    </form></td>
                                </td>

                            </tr>


                            <tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

@endsection