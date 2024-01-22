@extends('welcome')

@section('JUDUL', 'Home')

@section('CONTENT')
    @if (session('login_sukses'))
        <div id="login_sukses"></div>
    @endif

@endsection
