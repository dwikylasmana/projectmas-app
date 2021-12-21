@extends('layout/main_layout_v2')

@section('content') 

    <br>

    @if (count($jadwal) === 0)

        <div class="container-fluid mt-100">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-sm-12 es text-center"> <img src="https://www.vectorjunky.com/wp-content/uploads/2017/02/Pr%20038%20-%20TRI%20-%2004_09_10%20-%20012.jpg" width="130" height="130" class="img-fluid mb-4 mr-3">
                                <h3><strong>Anda belum mendapat jadwal</strong></h3>
                                <h4>Silahkan mengisi form pendaftaran terlebih dahulu</h4> 
                                <h4>Atau pastikan pendaftaran & pengajuan anda telah tervalidasi</h4> 
                                <a href="{{ route('pendaftaran.index') }}" class="btn btn-primary cart-btn-transform m-3">Lakukan Pendaftaran</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    @endif
    @foreach ($jadwal as $jadwal)
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Tanggal</th>
            <th scope="col">Waktu</th>
            <th scope="col">Lokasi</th>
            <th scope="col">Catatan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $jadwal->date }}</th>
            <td>{{ $jadwal->time }}</td>
            <td>{{ $jadwal->lokasi }}</td>
            <td>{{ $jawadl->note }}</td>
          </tr>
        </tbody>
      </table>
    @endforeach

@endsection