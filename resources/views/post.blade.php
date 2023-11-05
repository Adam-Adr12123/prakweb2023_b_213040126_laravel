@extends('layouts.main')

@section('container')

    <article>
        <h1>{{ $post->title }}</h1>
        
       {!! $post->body !!}


    </article>

    <a href="/blog">back to posts</a>
@endsection