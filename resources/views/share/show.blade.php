@extends('layout.mlayout')

@section('content')
    <h3>{{$Motive->judul}}</h3>
    <small>Submitted on {{$Motive->created_at}}</small>
    <div>
        <iframe width="420" height="315"
            src="{{$Motive->url}}">
        </iframe>
    </div>
    <a href="/motivation/{{$Motive->id_m}}/edit" class="btn btn-primary">Edit</a>

    {!! Form::open(['action' => ['MotiveController@destroy', $Motive->id_m], 'method' => 'POST', 'class' => 'btn pull-right']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection