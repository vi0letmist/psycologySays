@extends('layouts.layout')

@section('content')
<div class="postingan wow fadeInUp">
    <div class="row">
       <div class="col-lg-1">
         <img src="/img/profile.png">
       </div>
     <div class="col-lg-7">
        <h3>{{$Consul->judul}}</h3>
       <p>{{$Consul->user->name}}</p>
     </div>
     <div class="col-lg-1"></div>
     <div class="col-lg-3">
       <a href="#">{{$Consul->created_at}}<i class="fa fa-calendar" aria-hidden="true"></i></a><br>
       <a href="#"> 05 <i class="fa fa-comments-o" aria-hidden="true"></i></a>
     </div>
       <div class="col-lg-12">
         <p>{{$Consul->isi}}</p>
       </div>
     </div>
</div>
    @guest
    <a class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
    @else
    <a href="/consultation/{{$Consul->id_c}}/edit" class="btn btn-primary">Edit</a>

    {!! Form::open(['action' => ['ConsulController@destroy', $Consul->id_c], 'method' => 'POST', 'class' => 'btn pull-right']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
    @endguest
     
@endsection
