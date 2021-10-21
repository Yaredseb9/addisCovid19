<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('imgs/moh-favicon.png') }}" rel="icon">
  {{-- <link href="{{ asset('land/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- public/fontawesome-free-5.15.3-web/css/all.css -->
  <link href="{{ asset('fontawesome-free-5.15.3-web/css/all.css') }}" rel="stylesheet">
 {{--  <link href="{{ asset('fontawesome-free-5.15.3-web/js/all.js') }}" rel="stylesheet"> --}}

{{--   <link href="{{ asset('land/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
  <link href="{{ asset('land/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('land/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('land/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('land/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('land/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('land/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('land/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('land/assets/css/style.css') }}" rel="stylesheet">



  <!-- Scripts -->
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- test -->
  <!-- Google Font -->
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> 
  <!-- CSS -->
  <link href="../css/app.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}">


  <!-- Styles -->  
  <script src="../js/app.js" defer></script>
  <script src="{{ asset('vendors/scripts/jQuery v3.2.1.min.js') }}"></script>
  <script src="{{ asset('vendors/scripts/core.js') }}"></script>
  <script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
  <script src="{{ asset('vendors/scripts/process.js') }}"></script>
  <script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
  <script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('src/plugins/highcharts-6.0.7/code/highcharts.js') }}"></script>
  <script src="{{ asset('src/plugins/apexcharts/apexcharts.min.js') }}"></script>


  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('src/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('src/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('src/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('src/styles/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('src/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('src/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('src/plugins/summernote/summernote-bs4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"> </script> -->
  <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     
     gtag('config', 'UA-119386393-1');
  </script>
</head>
{{-- 
<body class="hold-transition layout-top-nav">
	<div class="wrapper">
		  <!-- ==================  NAV  ====================-->
    <nav class=" navbar navbar-expand-lg navbar-light bg-white" style="-webkit-box-shadow: 0 0 28px rgba(0, 0, 0, .08);">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a href="/" style="color: #000000">
            <img class="animation__shake" src="{{ asset('imgs/new_logo.svg') }}" alt="AlephTavLogo" class="rounded" height="70" width="70">
            <h1 class="d-none d-sm-inline-block align-middle h3" style="margin-bottom: 0 !important">Vulnerability <small>For Covid-19 </small></h1>
          </a>
        </li>
      </ul>
      <!-- ==================  small device toggler  ====================-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hiddeMe"
        aria-controls="hiddeMe" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center text-bold" id="hiddeMe" >
      <ul class=" navbar-nav ml-auto" >
        <li class="nav-item ">
          <a href="/" class="nav-link"><i class="fa fa-home fa-1x"></i></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/#subcityDetail">Community</a>
        </li>        
        <li class="nav-item ">
          <a class="nav-link" href="/settingrisk">Setting</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="/risk">Individual</a>
        </li>
@guest
        <li class="nav-item ">
            <a class="nav-link"  href="/login">
              {{ __('Login') }}
              <i class="icon-copy dw dw-login"></i>
            </a>

        </li>
@endguest

@auth
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               Welcome {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            @if(( Auth::user()->role == "admin") || ( Auth::user()->role == "admin-subcity"))
                <a class="dropdown-item" href="{{ route('admin.index') }}"> Admin Workplace </a>
            @elseif( Auth::user()->role == "expert")
                <a class="dropdown-item" href="{{ route('expert.index') }}"> Expert Workplace </a>
            @elseif( Auth::user()->role == "encoder")
                <a class="dropdown-item" href="{{ route('incoder.index') }}"> Encoder Workplace </a>
            @elseif( Auth::user()->role == "guestcom")
                <a class="dropdown-item" href="{{ route('official.index') }}"> Official Dashboard </a>
            @elseif( Auth::user()->role == "setting")
                <a class="dropdown-item" href="{{ route('office.index') }}"> Office Dashboard </a>
            @endif
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    <i class="icon-copy dw dw-logout"></i>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
@endauth

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
      </dir>
    </nav> --}}




</head>

<body>

  <!-- ======= Top Bar ======= -->

  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top  @if( Route::currentRouteName() != '/') topbar-inner-pages @endif">
    <div class="container d-flex align-items-center">
      <div class="contact-info mr-auto">
        <ul>
          <li><i class="icofont-envelope"></i><a href="mailto:info@addisababacovid19vulnerabilityindex.com">info@addisababacovid19vulnerabilityindex.com</a></li>
          <li><i class="icofont-phone"></i> +251 000 00 00 00</li>
          <li><i class="icofont-clock-time icofont-flip-horizontal"></i> Mon-Fri 9am - 5pm</li>
        </ul>
      </div>
      <div class="cta">
        <a href="#" class="scrollto">STAY SAFE</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top  @if( Route::currentRouteName() != '/') header-inner-pages @endif  ">
    <div class="container d-flex align-items-center">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo mr-auto scrollto"><img src="{{ asset('land/assets/img/moh-et.png') }}" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li @if( Route::currentRouteName() == "/")class="active"@endif><a href="/">Home</a></li>
          <li @if( Route::currentRouteName() == "community.index")class="active"@endif><a href="/community">Community </a></li>
          <li @if( Route::currentRouteName() == "risk")class="active"@endif><a href="/risk">Individual</a></li>
          <li @if( Route::currentRouteName() == "settingRisk")class="active"@endif><a href="/settingrisk">Setting</a></li>

@guest
        <li>
            <a   href="/login">
              {{ __('Login') }}
              <i class="icon-copy dw dw-login"></i>
            </a>

        </li>
@endguest
@auth
        <li  class="drop-down">
            <a href="" >
               Welcome {{ Auth::user()->name }}
            </a>
            <ul >
            @if(( Auth::user()->role == "admin") || ( Auth::user()->role == "admin-subcity"))
                <li><a class="dropdown-item" href="{{ route('admin.index') }}"> Admin Workplace </a></li>
            @elseif( Auth::user()->role == "expert")
                <li><a class="dropdown-item" href="{{ route('expert.index') }}"> Expert Workplace </a></li>
            @elseif( Auth::user()->role == "encoder")
                <li><a class="dropdown-item" href="{{ route('incoder.index') }}"> Encoder Workplace </a></li>
            @elseif( Auth::user()->role == "guestcom")
                <li><a class="dropdown-item" href="{{ route('official.index') }}"> Official Dashboard </a></li>
            @elseif( Auth::user()->role == "setting")
                <li><a class="dropdown-item" href="{{ route('office.index') }}"> Office Dashboard </a></li>
            @endif
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    <i class="icon-copy dw dw-logout"></i>
                </a></li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
        </li>
@endauth
          {{-- <li><a href="/login">Login</a></li> --}}
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->


<!-- ================== END OF NAV  ====================-->
<main id="main">
  		@yield("content")
  	</div>
</main>
{{-- 


<!-- Footer -->



<!-- Footer -->
        <footer class="page-footer font-small mdb-color lighten-3 pt-4">
          <div style="background-color: orange;border-top-width: 10px;border-top-style: solid;border-bottom-width: 10px;border-bottom-style: solid;border-color: #01c401;" >
            <div class="container">

              <!-- Grid row-->
		      <div class="row py-4 d-flex align-items-center" style="padding-top: 10px !important; padding-bottom: 10px !important;">

		        <!-- Grid column -->
		        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
		          <h6 class="mb-0">Get connected with us on social networks!</h6>
		        </div>
		        <!-- Grid column -->

		        <!-- Grid column -->
		        <div class="col-md-6 col-lg-7 text-center text-md-right">

		          <!-- Facebook -->
		          <a class="fb-ic" href="https://www.facebook.com">
		            <i class="fa fa-facebook-f white-text mr-4"> </i>
		          </a>
		          <!-- Twitter -->
		          <a class="tw-ic" href="https://www.twitter.com">
		            <i class="fa fa-twitter white-text mr-4"> </i>
		          </a>
		          <!-- Google 
		          <a class="gplus-ic" href="https://www.google.com">
		            <i class="fa fa-google-plus-g white-text mr-4"> </i>
		          </a>+-->
		          <!--Linkedin 
		          <a class="li-ic" href="https://www.linkedin.com">
		            <i class="fa fa-linkedin-in white-text mr-4"> </i>
		          </a>-->
		          <!--Instagram-->
		          <a class="ins-ic" href="https://www.instagram.com">
		            <i class="fa fa-instagram white-text"> </i>
		          </a>

		        </div>
		        <!-- Grid column -->

		      </div>
              <!-- Grid row-->

            </div>
          </div>
          <!-- Footer Links -->
          <div style="background-color: #eceff1;">
            <div class="container text-center text-md-left">

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 mr-auto my-md-4 my-0 mt-4 mb-1">

                  <!-- Content -->
                  <h5 class="font-weight-bold text-uppercase mb-4"> Covid 19 CCVI Addis Ababa</h5>
                  <p>COVID COMMUNITY VULNERABILITY INDEX (CCVI)</p>
                  <p>An index that assesses health, economic, and social impacts of COVID-19 in Addis Ababa</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                  <!-- Links -->
                  <h5 class="font-weight-bold text-uppercase mb-4">Useful Links</h5>

                  <ul class="list-unstyled">
                    <li>
                      <p>
                        <a href="/risk">Personal CCVI</a>
                      </p>
                    </li>
                    <li>
                      <p>
                        <a href="/#subcityDetail">Districts</a>
                      </p>
                    </li>
                    <li>
                      <p>
                        <a href="/#summery">City Summary</a>
                      </p>
                    </li>
                   
                  </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 mx-auto my-md-4 my-0 mt-4 mb-1">

                  <!-- Contact details -->
                  <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

                  <ul class="list-unstyled">
                    <li>
                      <p>
                        <i class="fa fa-home mr-3"></i>Addis Ababa, Ethiopia</p>
                    </li>
                    <li>
                      <p>
                        <i class="fa fa-envelope mr-3"></i> info@addisababacovid19vulnerabilityindex.com</p>
                    </li>
                    <li>
                      <p>
                        <i class="fa fa-phone mr-3"></i> +251 000 00 00 00</p>
                    </li>
                    <li>
                      <p>
                        <i class="fa fa-print mr-3"></i> +251 000 00 00 00</p>
                    </li>
                  </ul>

                </div>
                <!-- Grid column -->

             
              </div>
              <!-- Grid row -->

            </div>
          </div>

          <!-- Footer Links -->

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">Copyright &copy; May.2021
            <a href="https://alephtav.com/"> AlephTav</a>
          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->
</body>
</html>
 --}}

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-12 footer-info">
            <h3>    Vulnerability For Covid-19</h3>
            <p> Risk index that asses COVID-19 vulnerability at individual, community and special setting level in ADDIS ABABA
.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Community</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Individual</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Setting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Login</a></li>
            </ul>
          </div>

        {{--   <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> --}}

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Ethiopia <br>
              Addis Ababa,<br>
              Gullele <br><br>
              <strong>Phone:</strong> +2519 000 00 00 00<br>
              <strong>Email:</strong> info@addisababacovid19vulnerabilityindex.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        Copyright &copy; May.2021
         <strong><span></span></strong>. All Rights Reserved
      </div>
    
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  {{-- <script src="{{ asset('land/assets/vendor/jquery/jquery.min.js') }}"></script> 
  <script src="{{ asset('land/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('land/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('land/assets/vendor/php-email-form/validate.js') }}"></script>--}}
  <script src="{{ asset('land/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('land/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('land/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('land/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('land/assets/js/main.js') }}"></script>

</body>

</html>