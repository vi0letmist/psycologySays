@extends('layouts.app')

@section('content')
    <h3>Add Video</h3>    
    {!! Form::open(['action' => 'MotiveController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('judul','Judul')}}
            {{Form::text('judul', '', ['class' =>  'form-control','placeholder' => 'Judul Video'])}}
        </div>
        <div class="form-group">
            {{Form::label('url','URL')}}
            {{Form::text('url', '', ['class' =>  'form-control','placeholder' => 'URL Video'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection