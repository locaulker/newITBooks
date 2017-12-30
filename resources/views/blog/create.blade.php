@extends('layouts.app')

@section('content')

  <main class="container">
    <div class="row">
      <div class="jumbotron text-center">
        <h1>Create A Blog Post</h1>
      </div>
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          {!! Form::open(['method' => 'POST', 'action' => 'BlogController@store']) !!}
            
            <div class="form-group">
              {!! Form::label("title", "Title") !!}
              {!! Form::text("title", null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label("body", "Body") !!}
              {!! Form::textarea("body", null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::submit('Create A Blog', ['class' => 'btn btn-primary']) !!}
            </div>

          {!! Form::close() !!}
        </div>
      </div>
   
    </div>
  </main>

@endsection