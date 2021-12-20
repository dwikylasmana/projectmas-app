@extends('admin.main')

@section('content')

    


    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Panel: {{ $title }}</h3>
        <h5>Admin: {{ auth()->user()->name }}</h5>
    </div>
    
    <form method="post" action="{{ route('jadwal.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ old('lokasi') }}">
            @error('lokasi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Tanggal</label>
            <input type="text" placeholder="dd-mm-yy" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ old('date') }}">
            @error('date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>  

        <div class="mb-3">
            <label for="time" class="form-label">time</label>
            <input type="text" placeholder="hh:mm" class="form-control @error('time') is-invalid @enderror" id="time" name="time" value="{{ old('time') }}">
            @error('time')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="user_id" class="form-label">Nama Klien</label>
            <select class="form-select" name="user_id">
                @foreach ($user as $user )
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="note" class="form-label">Note</label>
                @error('note')
                    <p>{{ $message }}</p>
                @enderror
            <input id="note" type="hidden" name="note" value="{{ old('note') }}">
            <trix-editor input="note"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Buat Post</button>
    </form>
@endsection