<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Scripts -->
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- test -->
  <!-- Google Font -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> -->
  <!-- CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}">


  <!-- Styles -->  
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('vendors/scripts/jQuery v3.2.1.min.js') }}"></script>
  <script src="{{ asset('vendors/scripts/core.js') }}"></script>
  <script src="{{ asset('vendors/scripts/script.min.js') }}"></script>
  <script src="{{ asset('vendors/scripts/process.js') }}"></script>
  <script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
  <script src="{{ asset('src/plugins/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('src/plugins/highcharts-6.0.7/code/highcharts.js') }}"></script>


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
<body class="hold-transition layout-top-nav">

  @yield("content")

<!-- Footer -->
        <footer class="page-footer font-small mdb-color lighten-3 pt-4">
          <div style="background-color: #21d192;">
            <div class="container">

              <!-- Grid row-->
              <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                  <h6 class="mb-0">Get connected with us on social networks!</h6>
                </div>
               
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
                <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                  <!-- Content -->
                  <h5 class="font-weight-bold text-uppercase mb-4">Covid 19 CCVI Addis Ababa</h5>
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

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                  <!-- Social buttons -->
                  <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

                  <!-- Facebook -->
                  <a type="button" class="btn-floating btn-fb">
                    <i class="fa fa-facebook-f fa-2x"></i>
                  </a>
                  <!-- Twitter -->
                  <a type="button" class="btn-floating btn-tw">
                    <i class="fa fa-twitter fa-2x"></i>
                  </a>
                  <!-- Google +-->
                  <a type="button" class="btn-floating btn-gplus">
                    <i class="fa fa-google-plus-g fa-2x"></i>
                  </a>
                  <!-- Dribbble -->
                  <a type="button" class="btn-floating btn-dribbble">
                    <i class="fa fa-dribbble fa-2x"></i>
                  </a>

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
