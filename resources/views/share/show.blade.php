@extends('layouts.layout')

@section('content')
    <h3>{{$Share->blog}}</h3>
    <h4>By {{$Share->user->name}}</h4>
    <img src="{{$Share->gambar}}" alt="" class="img-fluid">
    <p>{{$Share->isi}}</p>
    <small>Submitted on {{$Share->created_at}}</small>
    
    
    @guest
    <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
        @else
        <a href="/share/{{$Share->id_s}}/edit" class="btn btn-primary">Edit</a>

        {!! Form::open(['action' => ['ShareController@destroy', $Share->id_s], 'method' => 'POST', 'class' => 'btn pull-right']) !!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endguest
    
@endsection
