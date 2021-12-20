@extends('admin.main')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Panel {{ $title }}</h3>
        <h5>Admin: {{ auth()->user()->name }}</h5>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <br>
                <h2>
                    Judul Projek: {{ $galleri->title }}
                </h2>

                <br>
                <h5>Admin: {{ $galleri->user->name }}</h5>
                <h5>Tanggal Unggah: {{ $galleri->created_at }} | Terakhir dirubah {{ $galleri->updated_at }}</h5>

                <article class='mt-3'>
                    {{ $galleri->content }}
                </article>
                <br>
                @if ($galleri->image1 === null)
                @else
                    <img src="{{ Storage::url("{$galleri->image1}") }}" class="rounded d-flex" style="width: 100%">
                    <small>{{ $galleri->image1 }}</small>
                @endif

                @if ($galleri->image2 === null)
                @else
                    <img src="{{ Storage::url("{$galleri->image2}") }}" class="rounded d-flex" style="width: 100%">
                    <small>{{ $galleri->image2 }}</small>
                @endif

                @if ($galleri->image3 === null)
                @else
                    <img src="{{ Storage::url("{$galleri->image3}") }}" class="rounded d-flex" style="width: 100%">
                    <small>{{ $galleri->image3 }}</small>
                @endif

                @if ($galleri->image4 === null)
                @else
                    <img src="{{ Storage::url("{$galleri->image4}") }}" class="rounded d-flex" style="width: 100%">
                    <small>{{ $galleri->image4 }}</small>
                 @endif
                @if ($galleri->image5 === null)
                    @else
                    <img src="{{ Storage::url("{$galleri->image5}") }}" class="rounded d-flex" style="width: 100%">
                    <small>{{ $galleri->image5 }}</small>
                @endif

                @if ($galleri->image6 === null)
                @else
                    <img src="{{ Storage::url("{$galleri->image6}") }}" class="rounded d-flex" style="width: 100%">
                    <small>{{ $galleri->image6 }}</small>
                @endif

                @if ($galleri->image7 === null)
                @else
                    <img src="{{ Storage::url("{$galleri->image7}") }}" class="rounded d-flex" style="width: 100%">
                    <small>{{ $galleri->image7 }}</small>
                @endif

                @if ($galleri->image7 === null)
                @else
                    <img src="{{ Storage::url("{$galleri->image7}") }}" class="rounded d-flex" style="width: 100%">
                    <small>{{ $galleri->image7 }}</small>
                @endif

                @if ($galleri->image8 === null)
                @else
                    <img src="{{ Storage::url("{$galleri->image8}") }}" class="rounded d-flex" style="width: 100%">
                    <small>{{ $galleri->image8 }}</small>
                @endif
                
                @if ($galleri->image9 === null)
                @else
                    <img src="{{ Storage::url("{$galleri->image9}") }}" class="rounded d-flex" style="width: 100%">
                    <small>{{ $galleri->image9 }}</small>
                @endif

                @if ($galleri->image10 === null)
                @else
                    <img src="{{ Storage::url("{$galleri->image10}") }}" class="rounded d-flex" style="width: 100%">
                    <small>{{ $galleri->image10 }}</small>
                @endif

                <br>
                <br>
                <a href="{{ route('galleri.index') }}" class="mt-5">Kembali ke Halaman Dashboard</a>
            </div>
        </div>
    </div>

@endsection