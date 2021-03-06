@extends('layouts.layout')

@section('content')
    @foreach ($Share as $shr)
    <div class="postingan wow fadeInUp">
            <div class="row">
               <div class="col-lg-1">
                 <div class="tulis">
                 <img src="/img/profile.png">
               </div>
               </div>
                 <div class="col-lg-10">
                   <div class="tulis">
                   <h4>{{auth()->user()->id}}</h4>
                   </div>
                 </div>
                 <div class="col-lg-1 drp_share">
                   <div class="dropdown">
                     <button type="button" class="btn_share" data-toggle="dropdown">
                       <img src="img/icon/more.png"> <div class="caret"></div>
                     </button>

                     <ul class="dropdown-menu dropdown-menu-right">
                       <button class="dropdown-item" type="button">Share Link...</button>
                       <button class="dropdown-item" type="button">Turn on Post Notifications</button>
                       <button class="dropdown-item" type="button">Mute</button>
                     </ul>
                   </div>
                 </div>
             <div class="col-lg-12"></div>
             <div class="col-lg-12">
               <div class="speaker">
                   <img src="{{$shr->gambar}}" alt="" class="img-fluid">
               </div>
             </div>
               <div class="col-lg-12">
                 <div class="tulis">
                 <h3><a href="/share/{{$shr->id_s}}">{{$shr->blog}}</a></h3>
                 <hr>&nsbp
               </div>
               </div>
             </div>
             </div>
    @endforeach
    {{$Share->links()}}
@endsection
