@extends('layouts.app')

@section('content')

    <div class="postingan wow fadeInUp">
        <div class="row">
            <div class="col-sm-5">
                <div class="speaker">
                    <img src="https://img.youtube.com/vi/{{$Motive->url}}/0.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-sm-7">
                <h3>{{$Motive->judul}}</h3>
           {{-- <p>{{$capt}}</p> --}}
                <small>Submitted on {{$Motive->created_at}}</small>
                <hr>
                <a href="/motive/{{$Motive->id_m}}/edit" class="btn btn-primary">Edit</a>
                {!! Form::open(['action' => ['MotiveController@destroy', $Motive->id_m], 'method' => 'POST', 'class' => 'btn pull-right']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            </div> 
        </div>
    </div>


@endsection