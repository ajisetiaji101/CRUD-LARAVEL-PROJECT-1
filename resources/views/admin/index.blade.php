@extends("admin.partials.main")
@section('container')
    <h1>Wellcome {{ auth()->user()->firstname }} !</h1>
@endsection
