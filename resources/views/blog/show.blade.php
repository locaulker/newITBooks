@extends('layouts.app')

@section('content')

  <main class="container-fluid">
    <div class="row">
      <article>
        <div class="jumbotron text-center">
          <h1>{{$blog->title}}</h1>
        </div>
    
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <p>{{$blog->body}}</p> 
          </div>
        </div>
      </article>
    </div>
  </main>

@endsection
