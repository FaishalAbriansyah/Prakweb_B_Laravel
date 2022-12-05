@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<article class="d-grid gap-2 col-3 mx-auto mb-5 border-bottom"> 
    <h2 class="p-3 mb-2 bg-dark text-white text-center">
        <a class="text-decoration-none text-white" href="/posts/{{ $post->slug }}\">{{ $post->title }}</a>
    </h2>
    <p>By. {{ $post->author }}</p>
</article>

@endforeach
<a class="btn btn-danger mt-3" href="/categories">Back</a>
@endsection

