@extends('layouts.layout')

@section('content')

<link href="css/consul_style.css" rel="stylesheet">
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
          <li class="menu-active"><a href="#consultation">Consultation</a></li>
          <li><a href="/motive">The Motivate</a></li>
          <li><a href="/shareW">Share With Us</a></li>
          <li class="buy-tickets"><a href="#buy-tickets">Login</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <!-- ================================== -->
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
    <section id="consul_head">
      <div class="container wow fadeInUp">
        <div class="row">
          <div class="col-lg-12">
            <h2>CONSULTATION</h2>
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
          <form action="" method="post" role="form" class="contactForm">
            
            <div class="form-group">
              <br>
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Topic Title" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Question</button></div>
          </form>
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
             <div class="col-lg-8">
                <div class="blog_left_sidebar">
                  <!-- ======================= -->
                  <div class="postingan wow fadeInUp">
                   <div class="row">
                      <div class="col-lg-1">
                        <img src="/img/profile.png">
                      </div>          
                    <div class="col-lg-7">
                      <h3>Title</h3>
                      <p>by me</p>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3">
                      <a href="#"> March 14, 2018 <i class="fa fa-calendar" aria-hidden="true"></i></a><br>
                      <a href="#"> 05 <i class="fa fa-comments-o" aria-hidden="true"></i></a>
                    </div>
                      <div class="col-lg-12">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                      </div>
                    </div>
                    </div>
                    <!-- ======================= -->
                    @component('components.post',['title'=>'mantap mantap','who' => 'meeeeeeeeee laaah','caption' => 'meeeeeeeeee laaah'])
                    @endcomponent

                    @component('components.post',['title'=>'mantap mantap','who' => 'meeeeeeeeee laaah','caption' => 'meeeeeeeeee laaah'])
                    @endcomponent

                    

                </div>
            </div>
          <div class="col-lg-4">
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
