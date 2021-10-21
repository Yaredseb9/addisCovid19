{{-- <!DOCTYPE html>
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
  {{-- <link href="{{ asset('land/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- public/fontawesome-free-5.15.3-web/css/all.css -->
  <link href="{{ asset('fontawesome-free-5.15.3-web/css/all.css') }}" rel="stylesheet">
 {{--  <link href="{{ asset('fontawesome-free-5.15.3-web/js/all.js') }}" rel="stylesheet"> 

  <link href="{{ asset('land/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('land/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('land/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('land/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('land/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('land/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('land/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('land/assets/vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('land/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top ">
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
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="/" class="logo mr-auto scrollto"><img src="{{ asset('land/assets/img/moh-et.png') }}" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/community">Community</a></li>
          <li><a href="/risk">Individual</a></li>
          <li><a href="/settingrisk">Setting</a></li>
          <li><a href="/login">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header --> 


  --}}

@extends('layout')
@section('content')
<!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome <span></span></h2>
          <p class="animate__animated animate__fadeInUp">This system used to map and visualize data that can indicate covid-19 venality in Addis Ababa. Analyzing data on web-based system that can give us vulnerability mapping with visualized output. This web-based system has covid-19 vulnerability index tools to analyze every data that can locate us the vulnerability index. </p>
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
          <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              {{-- <div class="icon"><i class="bx bxl-dribbble"></i></div> --}}
              <h2 class="title"><a href="/community">Community</a></h4>
              <p class="description">visulaize vulnerablity areas like subcities based on risk index also informaition with table and charts.</p>
            </div>
          </div>

          <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              {{-- <div class="icon"><i class="bx bx-file"></i></div> --}}
              <h2 class="title"><a href="/settingrisk">Setting</a></h4>
              <p class="description">Any individual diagnos themselves the system accept some inputs and based on that analyse and give advice this helps individual know their status and take action.</p>
            </div>
          </div>

          <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              {{-- <div class="icon"><i class="bx bx-tachometer"></i></div> --}}
              <h2 class="title"><a href="/risk">Individual</a></h4>
              <p class="description">This design consider companys in any field of area the system give advice based on the input data this use for knowing the status of the company and helps for decision.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class=" services">
      <div class="container" data-aos="fade-up">

        <div class="row content">
          <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <i class="fas fa-house-user"></i>
              <h4><a href="#">Stay At Home</a></h4>
              <p>Following stay-at-home orders reduces the risk even more by removing human contact, except with family members in the home. While there are other factors that impact how the virus spreads, isolating is one of the most important things someone can do to help avoid infection or becoming a carrier.</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <i class="fas fa-head-side-mask"></i>
              <h4><a href="#">Wear Mask</a></h4>
              <p>Your mask helps protect those around you. Masks are a simple barrier to help prevent your respiratory droplets from reaching others. Studies show that masks reduce the spray of droplets when worn over the nose and mouth. You should wear a mask, even if you do not feel sick.</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="fas fa-users-slash"></i>
              <h4><a href="#">Avoid Public Gathering</a></h4>
              <p>The risks of getting COVID-19 are higher in crowded and inadequately ventilated spaces where infected people spend long periods of time together in close proximity. These environments are where the virus appears to spread by respiratory droplets or aerosols more efficiently, so taking precautions is even more important.

              this is of getting covid sd are hoggerhe in creoweda adn inadiquertl ventilatind spaces where infectd people spend long periods of time together in close proximity. this enviroments are where the virus appears to spread by drespiratory droplets or aerosols more efficently, so taking precautions is even more importa</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="fas fa-people-arrows"></i>
              <h4><a href="#">Keep Social distance</a></h4>
              <p>Maintain at least a 1-metre distance between yourself and others to reduce your risk of infection when they cough, sneeze or speak. Maintain an even greater distance between yourself and others when indoors. The further away, the better.</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="500">
            <div class="icon-box">
              <i class="fas fa-handshake-alt-slash"></i>
              <h4><a href="#">No Hand Shaking</a></h4>
              <p>Hands touch too many surfaces and can quickly pick up viruses. Once contaminated, hands can transfer the virus to your face, from where the virus can move inside your body, making you feel unwell</p>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <i class="icofont-gym"></i>
              <h4><a href="#">Exercise Once A Day</a></h4>
              <p>Physical activity and relaxation techniques can be valuable tools to help you remain calm and continue to protect your health during this time. WHO recommends 150 minutes of moderate-intensity or 75 minutes of vigorous-intensity physical activity per week, or a combination of bot</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Clients Section ======= -->

    <!-- End Clients Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("{{ asset('land/assets/img/why-us.jpg') }}");' data-aos="fade-right">
            <a href="https://youtu.be/gwNm_Ensfrw" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch" data-aos="fade-left">

            <div class="content">
              <h3> <strong>Ministry of Health - Ethiopia</strong></h3>
              <p>
                Health Sector Development Programme (HSDP) (2010/11-2014/15) gives an overview of the performance of the health sector in the Ethiopian Fiscal Year (EFY) 2006(2013/2014), examining the progress made, the efforts that are underway and the challenges faced by the sectorin the promotion of health, and in the implementation, financing and governance of health services.
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li data-aos="fade-up" data-aos-delay="100">
                  <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> Where do coronaviruses come from? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse " data-parent=".accordion-list">
                    <p>
                      Coronaviruses are often found in bats, cats and camels. The viruses live in but do not infect the animals. Sometimes these viruses then spread to different animal species. The viruses may change (mutate) as they transfer to other species. Eventually, the virus can jump from animal species and begins to infect humans. In the case of COVID-19, the first people infected in Wuhan, China are thought to have contracted the virus at a food market that sold meat, fish and live animals – but they are still investigating. Although researchers don’t know exactly how people were infected, they already have evidence that the virus can be spread directly from person to person through close contact.
                    </p>
                  </div>
                </li>

                <li data-aos="fade-up" data-aos-delay="200">
                  <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> What are the symptoms of the novel coronavirus (COVID-19) infection? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                    <p>
                      The CDC says you may have coronavirus if you have these symptoms or combination of symptoms:
                        Fever or chills,
                        Cough,
                        Shortness of breath or difficulty breathing,
                        Tiredness,
                        Muscle or body aches,
                        Headaches,
                        New loss of taste or smell,
                        Sore throat,
                        Congestion or runny nose,
                        Nausea or vomiting,
                        Diarrhea,
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

  </main><!-- End #main -->
@endsection
 {{--  <!-- ======= Footer ======= -->
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
  <script src="{{ asset('land/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('land/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('land/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('land/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('land/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('land/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('land/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('land/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('land/assets/js/main.js') }}"></script>

</body>

</html> --}}
