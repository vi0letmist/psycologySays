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
          <li><a href="/shareW">Share With Us</a></li>
          <li class="buy-tickets"><a href="#buy-tickets">Login</a></li>
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
                    </div>
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