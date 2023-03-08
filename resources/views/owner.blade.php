@extends('layout.main')

@section('container')   
    <h1>Halaman About</h1>
    <hr>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $nama }}" width="150px">
@endsection