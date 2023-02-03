@extends('layouts.main')

@section('isi')
    @foreach ($isi as $masuk)
    <article class="mb-5">
        <h2>
            <a href="/contents/{{ $masuk["slug"] }}">{{ $masuk["title"] }}</a>
        </h2>
        <h5>Karya: {{ $masuk["author"] }}</h5>
        <p>{{ $masuk["desc"] }}</p>
    </article>
    @endforeach
@endsection