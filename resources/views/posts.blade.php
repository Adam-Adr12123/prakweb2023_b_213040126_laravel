

@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-5 pb-4 border-bottom">
            <h2>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none" >{{ $post->title }}</a>
            </h2>
            
            <p>By. <a href="/authors\{{ $post->author->username }} " class="text-decoration-none">{{ $post->author->name }}</a></p>


            <p>{{ $post->excerpt }}</p>

            <a href="ref="/posts/{{ $post->slug }} class="text-decoration-none"">Read More</a>

            
        </article>
    @endforeach
@endsection


