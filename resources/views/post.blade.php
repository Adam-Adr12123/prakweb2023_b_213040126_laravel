@extends('layouts.main')

@section('container')

    <article>
        <h1>{{ $post->title }}</h1>

        <p>By. <a href="/authors/{{  $post->user->username }}</a> in <a href="/categories/ $post->category->slug  }}">{{ $post->category->name }}</a></p>
        
       {!! $post->body !!}


    </article>

    <a href="/blog" class="d-block mt-3">back to posts</a>
@endsection


