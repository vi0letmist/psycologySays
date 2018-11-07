@extends('consul.consultation')

@section('content')
<div class="postingan wow fadeInUp">
    <div class="row">
       <div class="col-lg-1">
         <img src="/img/profile.png">
       </div>          
     <div class="col-lg-7">
        <h3>{{$Consul->judul}}</h3>
       <p>{{$Users->id}}</p>
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

    <button class="btn btn-primary"><a href="/quest/{{$Consul->id_c}}/edit">Edit</a></button>

    {!! Form::open(['action' => ['ConsulController@destroy', $Consul->id_c], 'method' => 'POST', 'class' => 'btn pull-right']) !!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection