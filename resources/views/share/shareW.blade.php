@extends('layouts.layout')

@section('content')
<link href="css/share_sty.css" rel="stylesheet">
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
          <li><a href="/motive">The Motivate</a></li>
          <li class="menu-active"><a href="#shareW">Share With Us</a></li>
          <li class="buy-tickets"><a href="/login">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <!-- =============================== -->
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <div class="row">
          <div class="col-lg-4">

          </div>
          <div class="col-lg-8">
            <h3>About the Menu</h3>
            <p>Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
              accusantium et. Non odit consequatur repudiandae sequi ea odio molestiae. Enim possimus sunt inventore in
              est ut optio sequi unde.Sed nam ut dolor qui repellendus iusto odit. Possimus inventore eveniet accusamus error amet eius aut
              accusantium et.</p>
              <a href="#consul_head" class="about-btn scrollto">Read More</a>
          </div>
        </div>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="share_head">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-lg-12">
            <h2>SHARE WITH US</h2>
          </div>
          <div class="col-lg-8">

              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed about-btn" href="#faq1">Make Question
                    </a><br>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
            <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            {!! Form::open(['class' => 'contactForm', 'action' => 'ConsulController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    <br>
                    {{Form::text('blog', '', ['class' =>  'form-control','placeholder' => 'Topic Title','data-rule'  => 'minlen:4','data-msg' => 'Please enter at least 8 chars of subject'])}}
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <br>
                    {{Form::text('gambar', '', ['class' =>  'form-control','placeholder' => 'Link Gambar','data-rule'  => 'required','data-msg' => 'Please enter a picture that describe your topic'])}}
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <br>
                    {{Form::textarea('isi', '', ['class' =>  'form-control','placeholder' => 'Message', 'data-rule'  => 'required', 'data-msg' => 'Please enter at least 8 chars of subject', 'rows'=>'5'])}}
                    <div class="validation"></div>
                </div>
                    {{Form::submit('Send Question', ['class' => 'btn btn-primary'])}}
                    {{-- <div class="text-center"><button type="submit">Send Question</button></div> --}}
            {!! Form::close() !!}
        </div>
      </div>
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
             <div class="col-lg-7">
                <div class="blog_left_sidebar">
                  <!-- ======================= -->
                  <div class="postingan wow fadeInUp">
                   <div class="row">
                      <div class="col-lg-1">
                        <div class="tulis">
                        <img src="/img/profile.png">
                      </div>
                      </div>
                        <div class="col-lg-10">
                          <div class="tulis">
                          <h4>futurehuman1</h4>
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
                          <img src="img/motive/2.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                      <div class="col-lg-12">
                        <div class="tulis">
                        <h3>Lorem ipsum dolor sit amet</h3>
                        <hr>&nsbp
                      </div>
                      </div>
                    </div>
                    </div>
                    <!-- ======================= -->
                    @component('components.post_share',['who'=>'deapers09','image' => 'img/motive/7.jpg','title' => 'how human can be survive with'])
                    @endcomponent

                    @component('components.post_share',['who'=>'darksea25','image' => 'img/motive/9.jpg','title' => 'is easy to get dead with knife'])
                    @endcomponent



                </div>
            </div>
          <div class="col-lg-5">
            <div class="blog_right_sidebar">
              <!-- ========================= -->
              <aside class="popular wow fadeInUp">
                <div class="row">
                  <div class="col-lg-2">
                    <img src="/img/profile.png">
                  </div>
                  <div class="col-lg-10">
                    <h3>Title</h3>
                    <p>by me</p>
                  </div>
                </div>
              </aside>
              <!-- ========================= -->
              @component('components.popular',['title'=>'mantap mantap','who' => 'meeeeeeeeee laaah'])
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
