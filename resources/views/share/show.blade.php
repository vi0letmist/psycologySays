@extends('layouts.layout')

@section('content')
    <h3>{{$Share->blog}}</h3>
    <h4>By {{auth()->user()->id}}</h4>
    <img src="{{$Share->gambar}}" alt="" class="img-fluid">
    <p>{{$Share->isi}}</p>

    <small>Submitted on {{$Share->created_at}}</small>
    <a href="/share/{{$Share->id_s}}/edit" class="btn btn-primary">Edit</a>

    {!! Form::open(['action' => ['ShareController@destroy', $Share->id_s], 'method' => 'POST', 'class' => 'btn pull-right']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection
