@extends('layouts.main')

@section('container')

    <article>
        <h1>{{ $post->title }}</h1>

        <p>By. Adam in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        
       {!! $post->body !!}


    </article>

    <a href="/blog">back to posts</a>
@endsection


