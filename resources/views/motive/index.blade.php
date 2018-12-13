@extends('layouts.layout')

@section('content')
<link href="css/motive_style.css" rel="stylesheet">
<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="/home">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/consultation">Consultation</a></li>
          <li class="menu-active"><a href="#motive">The Motivate</a></li>
          <li><a href="/share">Share With Us</a></li>
          {{-- <li class="buy-tickets"><a href="#buy-tickets">Login</a></li> --}}
          @guest
            <li class="buy-tickets">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="buy-tickets">
              @if (Route::has('register'))
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              @endif
            </li>
            @else
            <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              </form>
            </div>
            </li>
          @endguest          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <!-- =============================== -->
<section id="venue">

      <div class="container-fluid">
        <div class="row">
          <div id="intro1" class="col-sm-6" style="background-color:lavenderblush;">
            <div class="speaker">

              <a href="" class="a_gam"> <img src="img/motive/8.jpg" alt="" class="img-fluid"> </a>
              <div class="details">
                <h3><a href="">Hubert Hirthe</a></h3>
                <p>Consequuntur odio aut</p>
              </div>

            </div>
          </div>
            <div class="col-sm-6" style="background-color:lavender;">
              <div class="row">
                <div id="intro2" class="col-sm-6" style="background-color:lightcyan;">
                  <div class="speaker">
                    <a href="" class="a_gam"><img src="img/motive/1.jpg" alt="" class="img-fluid"></a>
                    <div class="details">
                      <h3><a href="">Hubert Hirthe</a></h3>
                      <p>Consequuntur odio aut</p>
                    </div>

                  </div>
                </div>
                <div id="intro2" class="col-sm-6" style="background-color:lightcyan;">
                  <div class="speaker">
                    <a href="" class="a_gam"><img src="img/motive/5.jpg" alt="" class="img-fluid"></a>
                    <div class="details">
                      <h3><a href="">Hubert Hirthe</a></h3>
                      <p>Consequuntur odio aut</p>
                    </div>

                  </div>
                </div>
                <div id="intro2" class="col-sm-6" style="background-color:lightcyan;">
                  <div class="speaker">
                    <a href="" class="a_gam"><img src="img/motive/10.jpg" alt="" class="img-fluid"></a>
                    <div class="details">
                      <h3><a href="">Hubert Hirthe</a></h3>
                      <p>Consequuntur odio aut</p>
                    </div>

                  </div>
                </div>
                <div id="intro2" class="col-sm-6" style="background-color:lightcyan;">
                  <div class="speaker">
                    <a href="" class="a_gam"><img src="img/motive/9.jpg" alt="" class="img-fluid"></a>
                    <div class="details">
                      <h3><a href="">Hubert Hirthe</a></h3>
                      <p>Consequuntur odio aut</p>
                    </div>

                  </div>
                </div>

              </div>
            </div>

        </div>


        </div>



    </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="consul_head">
      <div class="container wow fadeInUp">
        <div class="row">
            <div class="col-lg-12">
                <h2>The Motivate</h2>
              </div>
              <div class="col-lg-8" style="margin: 0 0 0 -40px;">
                <ul id="faq-list">
                 <li>
                  @guest
                    @else
                    <a data-toggle="collapse" class="collapsed about-btn" href="#faq1">Post Video
                    </a><br>
                    <div id="faq1" class="collapse" data-parent="#faq-list">
                      <div class="form">
                      {{-- <div id="sendmessage">Your message has been sent. Thank you!</div> --}}
                      <div id="errormessage"></div>
                      
                      {!! Form::open(['class' => 'contactForm', 'action' => 'MotiveController@store', 'method' => 'POST']) !!}
                          <div class="form-group">
                              <br>
                              {{Form::text('judul', '', ['class' =>  'form-control','placeholder' => 'Judul','data-rule'  => 'minlen:4','data-msg' => 'Please enter at least 8 chars of subject'])}}
                              <div class="validation"></div>
                          </div>
                          <div class="form-group">
                              <br>
                              {{Form::text('url', '', ['class' =>  'form-control','placeholder' => 'Url terakhir','data-rule'  => 'required','data-msg' => 'Please enter a picture that describe your topic'])}}
                              <div class="validation"></div>
                          </div>
                          <div class="form-group">
                              <br>
                              {{Form::text('capt', '', ['class' =>  'form-control','placeholder' => 'Caption','data-rule'  => 'minlen:4','data-msg' => 'Please enter at least 8 chars of subject'])}}
                              <div class="validation"></div>
                          </div>
                            {{Form::submit('Upload Video', ['class' => 'btn btn-primary'])}}
                              {{-- <div class="text-center"><button type="submit">Send Question</button></div> --}}
                      {!! Form::close() !!}
                      </div>
                    </div>
                    @endguest
                  </li>
                </ul>
    
              </div>
              <div class="col-lg-4">
    
              </div>
        </div>
      </div>
    </section>
    <!--==========================
      Topic Section
    ============================-->
    <section id="topic">
        <div class="container">
          <div class="row">
             <div class="col-lg-8">
                <div class="blog_left_sidebar">
                  <!-- ======================= -->
                    @foreach ($Motive as $vds)
                    <div class="postingan wow fadeInUp">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="speaker">
                                  <img src="https://img.youtube.com/vi/{{$vds->url}}/0.jpg" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="tulis">
                                    <h3><a href="/motive/{{$vds->id_m}}">{{$vds->judul}}</a></h3>
                                    <p>{{$vds->capt}}</p>
                                    <small>Submitted on {{$vds->created_at}}</small>
                                </div>
                        </div>
                    </div>
                    @endforeach
                    {{$Motive->links()}}
                  {{-- <div class="postingan wow fadeInUp">
                   <div class="row">
                    <div class="col-sm-5">
                      <div class="speaker">
                    <img src="img/motive/3.jpg" alt="" class="img-fluid">
                  </div>
                </div>
                    <div class="col-sm-7">
                      <h4>aaaaaaaaa</h4>
                      <p>aaaaaaaa</p>
                    </div>

                    </div>
                    </div> --}}
                    <!-- ======================= -->
                    @component('components.post_mot',['image'=>'/img/motive/2.jpg','title' => 'meeeeeeeeee laaah','capt' => 'meeeeeeeeee laaah'])
                    @endcomponent

                    @component('components.post_mot',['image'=>'/img/motive/6.jpg','title' => 'meeeeeeeeee laaah','capt' => 'meeeeeeeeee laaah'])
                    @endcomponent



                </div>
            </div>
          <div class="col-lg-4">
            <div class="blog_right_sidebar">
              <!-- ========================= -->
              <aside class="popular wow fadeInUp">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="speaker">
                    <img src="/img/motive/2.jpg">
                  </div>
                </div>
                  <div class="col-lg-12">
                    <div class="tulis">
                    <h3>Title</h3>
                    <p>by me</p>
                  </div>
                  </div>
                </div>
              </aside>
              <!-- ========================= -->
              @component('components.popular_mot',['image'=>'/img/motive/6.jpg','title' => 'meeeeeeeeee laaah','capt' => 'hmmmmmmmmmmmmmmmmmmmmmmmmmmmmm'])
                    @endcomponent

            </div>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      The Motivate Section
    ============================-->


    <!--==========================
      Share With Us Section
    ============================-->

    <!--==========================
      Hotels Section
    ============================-->


    <!--==========================
      Gallery Section
    ============================-->


    <!--==========================
      Sponsors Section
    ============================-->


    <!--==========================
      F.A.Q Section
    ============================-->


    <!--==========================
      Subscribe Section
    ============================-->


    <!--==========================
      Buy Ticket Section
    ============================-->


      <!-- Modal Order Form -->


    <!--==========================
      Contact Section
    ============================-->


  </main>

@endsection
