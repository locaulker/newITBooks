@extends('layouts.app')

@section('content')

  <main class="container-fluid">
    <div class="row">
      <div class="jumbotron text-center">
        <h1>Soft Delete Is Cool but It Took Me A While</h1>
      </div>

    @foreach ($deletedBlogs as $blog)
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <article>
            <h2>{{$blog->title}}</h2>
            <p>{{$blog->body}}</p>
            
            {!! Form::open(['method' => 'GET', 'action' => ['BlogController@restore', $blog->id]]) !!}
              <div class="form-group">
                {!! Form::submit('Restore Blog', ['class' => 'btn btn-primary']) !!}
              </div>
            {!! Form::close() !!}

            {!! Form::open(['method' => 'DELETE', 'action' => ['BlogController@destroyBlog', $blog->id]]) !!}
              <div class="form-group">
                {!! Form::submit('Delete Blog', ['class' => 'btn btn-danger']) !!}
              </div>
            {!! Form::close() !!}

          </article>
        </div>
      </div>
    @endforeach
    </div>
  </main>

@endsection