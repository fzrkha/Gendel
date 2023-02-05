@extends('layouts.main')

@section('isi')
    @foreach ($isi as $masuk)
    <article class="mb-5">
        <h2>
            <a href="/contents/{{ $masuk->id }}" class="text-decoration-none">{{ $masuk->title }}</a>
        </h2>
        <h5><a href="/categories/{{ $masuk->category->slug }}" class="text-decoration-none">{{ $masuk->category->name }}</a> (karya: {{ $masuk->author }})</h5>
        <p>{{ $masuk->excerpt }}</p>
    </article>
    @endforeach
@endsection