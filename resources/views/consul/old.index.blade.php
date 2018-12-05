@extends('consul.consultation')

@section('content')
    <h3>Consultation</h3>    
    @foreach ($Consul as $csl)
    <div class="postingan wow fadeInUp">
        <div class="row">
           <div class="col-lg-1">
             <img src="/img/profile.png">
           </div>          
         <div class="col-lg-7">
            <h3><a href="/quest/{{$csl->id_c}}">{{$csl->judul}}</a></h3>
           {{-- <p>{{$Users->id}}</p> --}}
         </div>
         <div class="col-lg-1"></div>
         <div class="col-lg-3">
           <a href="#">{{$csl->created_at}}<i class="fa fa-calendar" aria-hidden="true"></i></a><br>
           <a href="#"> 05 <i class="fa fa-comments-o" aria-hidden="true"></i></a>
         </div>
           <div class="col-lg-12">
             <p>{{$csl->isi}}</p>
           </div>
         </div>
    </div>
    @endforeach
    {{$Consul->links()}}
    <a href="/quest/create" class="btn btn-primary">Add</a>
@endsection