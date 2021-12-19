@extends("admin.main")

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h3>Control Panel</h3>
        <h5>Admin: {{ auth()->user()->name }}</h5>
    </div>

@endsection