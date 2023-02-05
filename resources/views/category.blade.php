@extends('layouts.main')

@section('isi')
<h1 class="mb-5">Content Category : {{ $category }}</h1>

@foreach ($contents as $cat)
<article>
    <h2><a href="/contents/{{ $cat->id }}" class="text-decoration-none">{{ $cat->title }}</h2>
</article>
@endforeach
<br><a href="/categories" class="text-decoration-none">Back to Categories.</a>
<br><a href="/contents" class="text-decoration-none">Back to Contents.</a>
@endsection