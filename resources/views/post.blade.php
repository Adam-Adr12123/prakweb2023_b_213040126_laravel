@extends('layouts.main')

@section('container')

    <article>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                <h1>{{ $post->title }}</h1>

                <p>By. <a href="/authors/{{  $post->author->username }}</a> in <a href="/categories/ $post->category->slug  }}">{{ $post->category->name }}</a></p>
                <img src="https://source.unplash.com/1200x400/?{{ $posts-> category->name }}" alt="" class="img-fluid">
                
                <article class="">
                {!! $post->body !!}
                </article>
                
                
                <a href="/blog" class="d-block mt-3">back to posts</a>


                </div>
            </div>
        </div>
      


    </article>

@endsection


