<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PsycologySays</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto">{{-- <img src="img/logo.png" alt="" title=""> --}}</a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#consultation">Consultation</a></li>
          <li><a href="#motive">The Motivate</a></li>
          <li><a href="#shareW">Share With Us</a></li>
          {{-- <li class="buy-tickets"><a href="/login">Login</a></li> --}}
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
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0"><span>Psycology</span>Says</h1>
      <p class="mb-4 pb-0">Solusi untuk berbagai permasalahan dalam pikiran anda</p>
      <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">About The Web</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>About The Web</h2>
            <p>Web ini dibuat sebagai penghubung antara Psikiater dan Calon Psikiater dengan Pasien maupun calon pasiennya.
                Sehingga dapat memudahkan pengguna untuk mempermudah konsultasi tanpa terhalang oleh jarak dan terpisah oleh waktu.
            </p>
          </div>
          <div class="col-lg-3">
            <h3>Where</h3>
            <p>Daerah Istimewa Yogyakara, Indonesia</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Senin - Jumat<br>10.00-22.00 WIB</p>
          </div>
        </div>
      </div>
    </section>

    <!--==========================
      Consultation Section
    ============================-->
    <section id="consultation" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Consultation</h2>
          <p>Berikut Beberapa Dokter kami</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/1.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Brenden Legros</a></h3>
                <p>Quas alias incidunt</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/2.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Hubert Hirthe</a></h3>
                <p>Consequuntur odio aut</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/3.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Cole Emmerich</a></h3>
                <p>Fugiat laborum et</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/4.jpg" alt="Speaker 4" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Jack Christiansen</a></h3>
                <p>Debitis iure vero</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/5.jpg" alt="Speaker 5" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Alejandrin Littel</a></h3>
                <p>Qui molestiae natus</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/6.jpg" alt="Speaker 6" class="img-fluid">
              <div class="details">
                <h3><a href="speaker-details.html">Willow Trantow</a></h3>
                <p>Non autem dicta</p>
                <div class="social">
                  <a href=""><i class="fa fa-twitter"></i></a>
                  <a href=""><i class="fa fa-facebook"></i></a>
                  <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!--==========================
      The Motivate Section
    ============================-->
    <section id="motive" class="section-with-bg wow fadeInUp">

      <div class="container">
        <div class="section-header">
          <h2>The Motivate</h2>
          <p>Berisi video motivasi untuk memotivasi diri</p>
        </div>

        <div class="row no-gutters motive-wrap clearfix">

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="motive-logo">
              <a href="/motive"><img src="img/motive/1.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="motive-logo">
              <a href="/motive"><img src="img/motive/2.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="motive-logo">
              <a href="/motive"><img src="img/motive/3.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="motive-logo">
              <a href="/motive"><img src="img/motive/4.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="motive-logo">
              <a href="/motive"><img src="img/motive/5.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="motive-logo">
              <a href="/motive"><img src="img/motive/6.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="motive-logo">
              <a href="/motive"><img src="img/motive/7.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="motive-logo">
              <a href="/motive"><img src="img/motive/8.jpg" class="img-fluid" alt=""></a>
            </div>
          </div>

        </div>

      </div>

    </section>


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
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Newsletter</h2>
          <p>Subscribe untuk menerima berita dan saran-saran terbaru dari kami.</p>
        </div>

        <form method="POST" action="#">
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <input type="text" class="form-control" placeholder="Enter your Email">
            </div>
            <div class="col-auto">
              <button type="submit">Subscribe</button>
            </div>
          </div>
        </form>

      </div>
    </section>

    <!--==========================
      Buy Ticket Section
    ============================-->
    <section id="shareW" class="section-with-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>SHARE WITH US</h2>
          <p>Bagikan pengalaman anda bersama dengan kami.</p>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="row kotak">
                      <div class="col-lg-1">

                        <img src="/img/profile.png">

                      </div>
                        <div class="col-lg-10">
                          <div class="tulis">
                          <h4>Joko</h4>
                          </div>
                        </div>
                    <div class="col-lg-12"></div>
                    <div class="col-lg-12">
                      <div class="speaker">
                          <img src="img/motive/2.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                      <div class="col-lg-12">

                        <h3>Sakit tapi terdiagnosa sehat</h3>
                        <hr>
                        <div class="text-center">
                          <a href="/shareW" class="btn">See More</a>
                        </div>

                      </div>
                    </div>
          </div>
          <div class="col-lg-4">
            <div class="row kotak">
                      <div class="col-lg-1">

                        <img src="/img/profile.png">

                      </div>
                        <div class="col-lg-10">
                          <div class="tulis">
                          <h4>Jetri</h4>
                          </div>
                        </div>
                    <div class="col-lg-12"></div>
                    <div class="col-lg-12">
                      <div class="speaker">
                          <img src="img/motive/2.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                      <div class="col-lg-12">

                        <h3>Pusing kepala yang tak kunjung sembuh</h3>
                        <hr>
                        <div class="text-center">
                          <a href="/shareW" class="btn">See More</a>
                        </div>

                      </div>
                    </div>
          </div>
          <!-- Pro Tier -->
          <div class="col-lg-4">
            <div class="row kotak">
                      <div class="col-lg-1">

                        <img src="/img/profile.png">

                      </div>
                        <div class="col-lg-10">
                          <div class="tulis">
                          <h4>Ciel</h4>
                          </div>
                        </div>
                    <div class="col-lg-12"></div>
                    <div class="col-lg-12">
                      <div class="speaker">
                          <img src="img/motive/2.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                      <div class="col-lg-12">

                        <h3>Severe headache because of stress</h3>
                        <hr>
                        <div class="text-center">
                          <a href="/shareW" class="btn">See More</a>
                        </div>

                      </div>
                    </div>
          </div>
        </div>

      </div>
    </section>

      <!-- Modal Order Form -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Hubungi kami disini.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Daerah Istimewa Yogyakara, Indonesia</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+6289633187512">+62 896 3318 7512</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:psycologySays@gmail.com">psycologySays@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            {{-- <img src="img/logo.png" alt="TheEvenet"> --}}
            <p>Web ini dibuat sebagai penghubung antara Psikiater dan Calon Psikiater dengan Pasien maupun calon pasiennya.
                Sehingga dapat memudahkan pengguna untuk mempermudah konsultasi tanpa terhalang oleh jarak dan terpisah oleh waktu.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Yogyakarta<br>
              Daerah Istimewa Yogyakarta<br>
              Indonesia <br>
              <strong>Phone:</strong> +62 896 3318 7512<br>
              <strong>Email:</strong> psycologySays@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>psycologySays</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
