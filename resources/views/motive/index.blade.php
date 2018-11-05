@extends('layout.mlayout')

@section('content')
    <h3>Motivation</h3>    
    @foreach ($Motive as $vds)
        <div class="card">
            <h3><a href="/motive/{{$vds->id_m}}">{{$vds->judul}}</a></h3>
            <small>Submitted on {{$vds->created_at}}</small>
        </div>
    @endforeach
    {{$Motive->links()}}
    <a href="/motive/create" class="btn btn-primary">Add</a>
@endsection