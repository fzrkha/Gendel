@extends('layouts.main')

@section('isi')
<h1 class="mb-5">Content Categories</h1>

@foreach ($categories as $category)
<ul>
    <li>
        <h2><a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</h2>
    </li>
</ul>
@endforeach
<br><a href="/contents" class="text-decoration-none">Back to Contents.</a>
@endsection