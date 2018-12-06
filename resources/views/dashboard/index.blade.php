@extends('layouts.app')

@section('content')

    <a href="/motive/create" class="btn btn-primary">Add Video</a>

    <h3>Motivation</h3>    
    @foreach ($Motive as $vds)
        {{-- <div class="card">
            <h3><a href="/motive/{{$vds->id_m}}">{{$vds->judul}}</a></h3>
            <small>Submitted on {{$vds->created_at}}</small>
        </div> --}}
        <div class="postingan wow fadeInUp">
            <div class="row">
                <div class="col-sm-5">
                    <div class="speaker">
                        <img src="https://img.youtube.com/vi/{{$vds->url}}/0.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-7">
                    <h3><a href="/motive/{{$vds->id_m}}">{{$vds->judul}}</a></h3>
               {{-- <p>{{$capt}}</p> --}}
                    <small>Submitted on {{$vds->created_at}}</small>
                </div> 
            </div>
        </div>
    @endforeach
    {{$Motive->links()}}
    
@endsection