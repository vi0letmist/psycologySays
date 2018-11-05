@extends('layout.mlayout')

@section('content')
    <h3>Edit Video</h3>    
    {!! Form::open(['action' => ['MotiveController@update', $Motive->id_m], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('judul','Judul')}}
            {{Form::text('judul', $Motive->judul, ['class' =>  'form-control','placeholder' => 'Judul Video'])}}
        </div>
        <div class="form-group">
            {{Form::label('url','URL')}}
            {{Form::text('url', $Motive->url, ['class' =>  'form-control','placeholder' => 'URL Video'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection