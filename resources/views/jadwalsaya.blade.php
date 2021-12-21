@extends('layout/main_layout_v2')

@section('content') 

<br>
@if ($jadwal->count())
    <section id="jadwal">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h3 class="box-title mt-5">Informasi Jadwal:        {{ $user->name }}</h3>
            <div class="table-responsive">
                    <table class="table table-striped table-product mt-3">
                        <tbody>
                            <tr>
                                <td width="390">Lokasi</td>
                                <td>{{ $jadwal->lokasi }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td>{{ $jadwal->date }}</td>
                            </tr>
                            <tr>
                                <td>Waktu</td>
                                <td>{{ $jadwal->time }}</td>
                            </tr>
                            <tr>
                                <td>Catatan</td>
                                <td>{{ $jadwal->note }}</td>
                            </tr>
                            <tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </section>

@else
    <br>
    <h2 class="text-center fs-4">Jadwal Tidak Ditemukan.</h2>
    <br>
@endif

@endsection