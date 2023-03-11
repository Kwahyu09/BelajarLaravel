@extends('layout.main')

@section('container')
<div class="py-5">
    <h1>{{ $title }} Buket Balon Hadiar Store</h1>
    <hr>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $nama }}" width="150px">
</div>   
@endsection