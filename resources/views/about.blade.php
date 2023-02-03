@extends('layouts.main')

@section('isi')
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ asset('img') }}/Scaramouche.png" alt="Haru" width="200">
@endsection