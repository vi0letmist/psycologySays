@extends('layouts.layout')

@section('content')
    <div class="postingan wow fadeInUp">
        <div class="row">
            <div class="col-lg-12">
                <div class="speaker">
                        <iframe width="420" height="315"
                            src="https://www.youtube.com/embed/{{$Motive->url}}">
                        </iframe> 
                        {{-- <a href="https://www.youtube.com/watch?v={{$Motive->url}}" class="venobox play-btn mb-4" data-vbtype="video"
                        data-autoplay="false"></a> --}}
                </div>
            </div>
            <div class="col-lg-12">
                <h3>{{$Motive->judul}}</h3>
                <p>{{$Motive->capt}}</p>
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
