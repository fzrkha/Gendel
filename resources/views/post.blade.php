@extends('layouts.main')

@section('isi')
    @foreach ($isi as $masuk)
    <article class="mb-5">
        <h2>
            <a href="/contents/{{ $masuk->id }}">{{ $masuk->title }}</a>
        </h2>
        <h5>Karya: {{ $masuk->content }}</h5>
        <p>{{ $masuk->excerpt }}</p>
    </article>
    @endforeach
@endsection