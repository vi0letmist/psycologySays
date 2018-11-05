@extends('layout.mlayout')

@section('content')
    <h3>Put a Quest</h3>    
    {!! Form::open(['action' => 'ConsulController@store', 'method' => 'POST']) !!}
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