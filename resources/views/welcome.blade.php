<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DEVoPS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
        <!-- Favicons -->
  <!-- <link rel="icon" href="{{asset('bootstrap/assets/img/favicon.png')}}"> -->
  <!-- <link rel="apple-touch-icon" href="{{asset('bootstrap/assets/img/apple-touch-icon.png')}}"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{asset('bootstrap/assets/vendor/bootstrap/css/bootstrap.min.css ')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/assets/vendor/icofont/icofont.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/assets/vendor/boxicons/css/boxicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/assets/vendor/remixicon/remixicon.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/assets/vendor/venobox/venobox.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap/assets/vendor/aos/aos.css')}}">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="{{asset('bootstrap/assets/css/style.css')}}">

</head>
<body>

<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="#">DEV<span>oPS</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#header">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#services">Skills|Set</a></li>
              <li><a href="{{ route('login') }}">Portfolio</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav><!-- .nav-menu -->
          <br>

          @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-danger -navbar-btn">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="get-started-btn scrollto"><u>Login</u></a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="get-started-btn scrollto"><u>Register</u></a>
                        @endif -->
                    @endauth
                </div>
            @endif
            <!-- text-sm text-gray-700 underline -->
          <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-xl-5">
              <h1>Working Experience</h1>
              <!-- <h2><b>IN</b></h2> -->
              <h1><i>IT Profession</i></h1>
              <h5>Please <i>sign up?</i> To see more details.</h5>
              <a href="{{ route('register') }}" class="btn-get-started scrollto"><i><b>Sign</b></i>&nbsp;<span><i><b>Up</b></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container-fluid" data-aos="zoom-in">
        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="owl-carousel clients-carousel">
              <img src="assets/img/clients/client-1.png" alt="">
              <img src="assets/img/clients/client-2.png" alt="">
              <img src="assets/img/clients/client-3.png" alt="">
              <img src="assets/img/clients/client-4.png" alt="">
              <img src="assets/img/clients/client-5.png" alt="">
              <img src="assets/img/clients/client-6.png" alt="">
              <img src="assets/img/clients/client-7.png" alt="">
              <img src="assets/img/clients/client-8.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>Experience in IT Industry</h3>
              <p>
                This site is all about of my experience in IT Industry.
              </p>
              <a href="#" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Coding</h4>
                  <p></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Designing</h4>
                  <p></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Networking</h4>
                  <p></p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Database</h4>
                  <p></p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="icofont-computer"></i>
              <h4><a href="#">Hardware</a></h4>
              <p></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="icofont-chart-bar-graph"></i>
              <h4><a href="#">Software</a></h4>
              <p>Web Designing</p>
              <p></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <i class="icofont-image"></i>
              <h4><a href="#">Photo Editing</a></h4>
              <p></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <i class="icofont-settings"></i>
              <h4><a href="#">Video Editing</a></h4>
              <p></p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
              <i class="icofont-earth"></i>
              <h4><a href="#">Networking</a></h4>
              <p></p>
            </div>
          </div>
          <!-- <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="600">
              <i class="icofont-tasks-alt"></i>
              <h4><a href="#"></a></h4>
              <p></p>
            </div>
          </div> -->
        </div>

      </div>
    </section><!-- End Services Section -->

  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p></p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>My Address</h3>
                  <p>Lower crusan, Bulacao Talisay City, Cebu</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>darwinyamyamin111@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>09664130327<br>09617149207</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>DeV<span>.</span></h3>
            <p>
              Lower Crusan <br>
              Bulacao Talisay City<br>
              Cebu <br><br>
              <strong>Phone:</strong> 09664130327<br>
              <strong>Email:</strong> darwinyamyamin111@gmail.com<br> dbyamyamin@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>.</span></strong> All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          Designed by <a href="https://bootstrapmade.com/">Darwin Yamyamin</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
<script src="{{asset('bootstrap/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('bootstrap/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src="{{asset('bootstrap/assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('bootstrap/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('bootstrap/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('bootstrap/assets/vendor/counterup/counterup.min.js')}}"></script>
<script src="{{asset('bootstrap/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('bootstrap/assets/vendor/venobox/venobox.min.js')}}"></script>
<script src="{{asset('bootstrap/assets/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('bootstrap/assets/js/main.js')}}"></script>

          <!-- <div class="content">
            

          </div> -->
      </div>
  </body>
</html>
