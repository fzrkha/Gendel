@extends('layouts.main')

@section('isi')
<article>
    <h2>{{ $eps["title"] }}</h2>
    <h5>By: {{ $eps["author"] }}</h5>
    {!! $eps["desc"] !!}
</article>

<a href="/contents">Back to Contents</a>
@endsection