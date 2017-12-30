@extends('layouts.app')

@section('content')

  <main class="container-fluid">
    <div class="row">
      <div class="jumbotron text-center">
        <h1>Latest Blog Posts</h1>
      </div>

    @foreach ($blogs as $blog)
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <article>
            <h2><a href="{{ action('BlogController@show', [$blog->id]) }}">{{$blog->title}}</a></h2>
            <p>{{$blog->body}}</p>
          </article>
        </div>
      </div>
    @endforeach
    </div>
  </main>

@endsection
