<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- test -->
  <!-- Google Font -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> -->
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}">
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
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"> </script> -->
  <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());
     
     gtag('config', 'UA-119386393-1');
  </script>
  <!-- end of test -->
  <script>
     $('.hidden p').click(function(){
       $(this).closest('.select').find('.input').text($(this).text());
       $(this).closest('.select').find('input').val($(this).attr('value'));
       $(this).closest('.select').trigger("change");
     });
     
     $('.select').change(function(){
       alert('hover slector changed to '+$(this).find('input').val());
     });
  </script>
  <style>
     .box{
     color: #1f2d3d;
     padding: 20px;
     display: none;
     margin-top: 20px;
     }
     .boxx{
     color: #1f2d3d;
     padding: 20px;
     margin-top: 20px;
     display: block;
     }
     * {
     font-family: arial;
     box-sizing: border-box;
     }
     p {
     margin: 0;
     }
     div.select {
     min-width: 120px;
     padding-right: 15px;
     margin-left: 10px;
     display: inline-block;
     border-radius: 15px;
     border: 1px solid #0B0000;
     position: relative;
     background: f8f9fa;
     }
     div.select p {
     padding: 5px;
     width: 100%;
     color: #000;
     }
     div.select:after {
     content: "▼";
     color: #000;
     position: absolute;
     right: 6px;
     top: 8px;
     font-size: 9px;
     }
     div.select .hidden {
     position: absolute;
     visibility: hidden;
     opacity: 0;
     transition: .1s;
     background: f8f9fa;
     border: 1px solid #000;
     border-radius: 15px;
     z-index: 10;
     width: 100%;
     color: #000;
     }
     div.select:hover .hidden {
     visibility: visible;
     opacity: 1;
     }
     div.select p:hover, div.select:hover {
     background: #ddd;
     }
  </style>
  <!-- Google Font: Source Sans Pro -->
  <!--  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!--  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="src/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="src/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="src/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="src/styles/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="src/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="src/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="src/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/a.png" alt="AlephTaveLogo" height="60" width="60">
    </div> -->

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
       
        <li class="nav-item d-none d-sm-inline-block">
          <h1> <img class="animation__shake" src="imgs/alp.jpg" alt="AlephTavLogo" class="rounded" height="70" width="70">
         Covid 19 CCVI   <small>Addis Ababa </small></h1>
          
        </li>
       <!--  <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link" href="#subcityDetail">Districts</a>
        </li>        
        <li class="nav-item d-none d-sm-inline-block">
          <a class="nav-link" href="#summery">Summery</a>
        </li>

@guest


        
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link"  href="{{ route('login') }}">
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
            @if( Auth::user()->role == "admin")
                <a class="dropdown-item" href="{{ route('admin.index') }}"> Admin Workplace </a>
            @elseif( Auth::user()->role == "expert")
                <a class="dropdown-item" href="{{ route('expert.index') }}"> Expert Workplace </a>
            @elseif( Auth::user()->role == "encoder")
                <a class="dropdown-item" href="{{ route('incoder.index') }}"> Encoder Workplace </a>
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
    </nav>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
    <!--  <main class="py-4">
       @yield('content')
       </main> -->
    <!-- Content Header (Page header) -->
   
    <style type="text/css">
       .css-1pfo3xg {
       box-sizing: border-box;
       margin: 0px auto;
       min-width: 0px;
       width: 100%;
       padding: 3.5rem 5rem;
       background-color: #f8f6f1);
       }
       .css-vxkfno {
       box-sizing: border-box;
       min-width: 0px;
       width: 50%;
       max-width: 60%;
       margin: auto;
       }
       .css-1v6x1ap {
       box-sizing: border-box;
       margin: 0px;
       min-width: 0px;
       padding-top: 1.5rem;
       padding-bottom: 1.5rem;
       }
       .Africa-module-heroText_3B6l {
       font-family: Botanika Mono;
       font-style: normal;
       font-weight: 300;
       font-size: 18px;
       line-height: 22px;
       text-align: center;
       letter-spacing: .1em;
       }
       .Africa-module-heroTitle_2HmZ {
       font-family: ZapfHumnst BT;
       font-style: normal;
       font-weight: 400;
       font-size: 48px;
       line-height: 54px;
       text-align: center;
       }
       .css-vurnku {
       box-sizing: border-box;
       margin: 0 0 10 0;
       min-width: 0px;
       }
    </style>
    <div class="row" style="background: #f8f6f1;">
      <div class="css-vxkfno ">
         <div class="Africa-module-heroText_3B6l css-1v6x1ap">
            THE ETIOPIAN COVID COMMUNITY VULNERABILITY INDEX (CCVI)
         </div>
         <h2 class="Africa-module-heroTitle_2HmZ css-vurnku">
            An index that assesses health, economic, and social impacts of COVID-19 in Addis Ababa
         </h2>
      </div>
    </div>
    

    <!-- ================== COUNTER ====================-->
    <div class=" margin" style="background: #f8f6f1;">
      <style type="text/css">
        .counter {
        background-color:#f8f6f1; /*#f5f5f5;*/
        padding: 20px 0;
        border-radius: 5px;
        }
        .count-title {
        font-size: 40px;
        font-weight: normal;
        margin-top: 10px;
        margin-bottom: 0;
        text-align: center;
        }
        .count-text {
        font-size: 13px;
        font-weight: normal;
        margin-top: 10px;
        margin-bottom: 0;
        text-align: center;
        }
        .fa-2x {
        margin: 0 auto;
        float: none;
        display: table;
        color: #273D3F;
        }
      </style>
<!--       <div class="row">
        <br/>
        <div class="col text-center">
          <h2></h2>
          <p>covid-19 repored cases in ethiopia</p>
        </div>
      </div>

      <div class="row text-center">
        <div class="col">
          <div class="counter">
            <i class="fa fa-code fa-2x"></i>
            <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
            <p class="count-text ">Infected</p>
          </div>
        </div>
        <div class="col error">
          <div class="counter"style="color: red;">
            <i class="fa fa-coffee fa-2x" style="color: red;"></i>
            <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
            <p class="count-text ">Death</p>
          </div>
        </div>
        <div class="col" style="color: #ee8702;">
          <div class="counter">
            <i class="fa fa-lightbulb-o fa-2x" style="color: #ee8702;;"></i>
            <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
            <p class="count-text ">Critical</p>
          </div>
        </div>
        <div class="col " style="color: green;">
          <div class="counter">
            <i class="fa fa-bug fa-2x" style="color: green;"></i>
            <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
            <p class="count-text ">Recovery</p>
          </div>
        </div>
      </div> -->
      <div class="row">
        <br/>
        <div class="col text-center">
          <h2></h2>
          <p>CCIV data collection status</p>
        </div>
      </div>
      <div class="row text-center">
        <div class="col">
          <div class="counter">
            <i class="icon-copy dw dw-flow fa-2x"></i>
            <h2 class="timer count-title count-number" data-to="{{ count($indicatorsCommunity) }}" data-speed="1500"></h2>
            <p class="count-text ">Indicators</p>
          </div>
        </div>
<!--         <div class="col error">
          <div class="counter">
           <i class="icon-copy dw dw-city fa-2x"></i>
            <h2 class="timer count-title count-number" data-to="9" data-speed="1500"></h2>
            <p class="count-text ">Subcity</p>
          </div>
        </div>
        <div class="col">
          <div class="counter">
            <i class="icon-copy dw dw-city-hall fa-2x"></i>
            <h2 class="timer count-title count-number" data-to="50" data-speed="1500"></h2>
            <p class="count-text ">Woreda</p>
          </div>
        </div> -->
        <div class="col">
          <div class="counter">
            <i class="fa fa-lightbulb-o fa-2x"></i>
            <h2 class="timer count-title count-number" data-to="{{ count($ketenas) }}" data-speed="1500"></h2>
            <p class="count-text ">Ketena</p>
          </div>
        </div>
        <div class="col " style="color: green;">
          <div class="counter">
            <i class="icon-copy dw dw-file-39 fa-2x"></i>
            <h2 class="timer count-title count-number" data-to="{{ count($indicatorsData) }}" data-speed="1500"></h2>
            <p class="count-text ">Data Collected</p>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        (function ($) {
          $.fn.countTo = function (options) {
            options = options || {};
            
            return $(this).each(function () {
              // set options for current element
              var settings = $.extend({}, $.fn.countTo.defaults, {
                from:            $(this).data('from'),
                to:              $(this).data('to'),
                speed:           $(this).data('speed'),
                refreshInterval: $(this).data('refresh-interval'),
                decimals:        $(this).data('decimals')
              }, options);
              
              // how many times to update the value, and how much to increment the value on each update
              var loops = Math.ceil(settings.speed / settings.refreshInterval),
                increment = (settings.to - settings.from) / loops;
              
              // references & variables that will change with each update
              var self = this,
                $self = $(this),
                loopCount = 0,
                value = settings.from,
                data = $self.data('countTo') || {};
              
              $self.data('countTo', data);
              
              // if an existing interval can be found, clear it first
              if (data.interval) {
                clearInterval(data.interval);
              }
              data.interval = setInterval(updateTimer, settings.refreshInterval);
              
              // initialize the element with the starting value
              render(value);
              
              function updateTimer() {
                value += increment;
                loopCount++;
                
                render(value);
                
                if (typeof(settings.onUpdate) == 'function') {
                  settings.onUpdate.call(self, value);
                }
                
                if (loopCount >= loops) {
                  // remove the interval
                  $self.removeData('countTo');
                  clearInterval(data.interval);
                  value = settings.to;
                  
                  if (typeof(settings.onComplete) == 'function') {
                    settings.onComplete.call(self, value);
                  }
                }
              }
              
              function render(value) {
                var formattedValue = settings.formatter.call(self, value, settings);
                $self.html(formattedValue);
              }
            });
          };
          
          $.fn.countTo.defaults = {
            from: 0,               // the number the element should start at
            to: 0,                 // the number the element should end at
            speed: 1000,           // how long it should take to count between the target numbers
            refreshInterval: 100,  // how often the element should be updated
            decimals: 0,           // the number of decimal places to show
            formatter: formatter,  // handler for formatting the value before rendering
            onUpdate: null,        // callback method for every time the element is updated
            onComplete: null       // callback method for when the element finishes updating
          };
          
          function formatter(value, settings) {
            return value.toFixed(settings.decimals);
          }
        }(jQuery));
        
        jQuery(function ($) {
          // custom formatting example
          $('.count-number').data('countToOptions', {
          formatter: function (value, options) {
            return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
          }
          });
          
          // start all the timers
          $('.timer').each(count);  
          
          function count(options) {
          var $this = $(this);
          options = $.extend({}, options || {}, $this.data('countToOptions') || {});
          $this.countTo(options);
          }
        });
      </script>
    </div>
    <!-- ================== END COUNTER ====================-->

    <!-- ================== SVG MAP ====================-->
    <div class="row justify-content-center align-items-end ">
      <hr />
      <div class="align-middle">
        @foreach($indicatorsCommunity as $key => $value )
        <button type="button" class="btn btn-outline-dark ">{{ $value->name }}</button> 
        @endforeach
      </div>
    </div>
    <!-- card tools -->
    <div class="container justify-content-center">
      <div class="well justify-content-center">
        <center>
<!--           <svg version="1.1" id="Layer_1"  x="0px" y="0px" width="100%" height="300px" viewBox="0 0 200 200" enable-background="new 0 0 200  200" xml:space="preserve">
            <polygon class="firststarone" points="100,54.267 56.951,50.769 49.854,54.911 50.884,46.76 44.752,41.291 52.823,39.751 56.129,32.229 60.087,39.429 
              68.262,40.249 62.639,46.239 " />
            <polygon class="firststar" points="100,10 40,198 190,78 10,78 160,198"
              style="fill:lime;stroke:purple;stroke-width:5;fill-rule:evenodd;" />
          </svg> -->

          <img src="imgs/subcity.jpg">
        </center>
      </div>
    </div>
    <script type="text/javascript">
      $('.firststarone').tooltip({title:'some title', container:'body'});
      $('.firststar').tooltip({title:'some title', container:'body'});
    </script>
    <!-- ================== END SVG MAP ====================-->





<!-- ================== SUBCYTY DETAIL ====================-->
<!-- Main row -->
<div class="card-body" style="background-color: #f5f5f5;">
  <a id="subcityDetail"></a>
  <!-- ================== TOGLE SUBCYTY TOP ==================== -->
  <div class="form-group col-3">
    <!-- <label for="exampleSelectRounded0"> Districts Of Addis Ababa</label> -->
    <select class="form-control form-control-lg" id="exampleSelectRounded0" >
      @foreach($subcities as $key=>$subcity)
      <option  value="{{ str_replace(' ','_',$subcity->subcity_name) }}"  >{{ str_replace(' ','_',$subcity->subcity_name) }} Districts</option>

      @endforeach
    </select>
  </div>
  <!-- ================== TOGLE SUBCYTY TOP ==================== -->

  <!-- ================== A.A. SUBCYTY  ====================-->    
  <!-- ================== A.A. SUBCYTY  ====================-->  
  @foreach($subcities as $subkey=>$subcity)  
  <div class="{{ str_replace(' ','_',$subcity->subcity_name) }} box">
  <!-- ================== SUBCYTY REVIEW ====================--> 


    <div class="row ">
      <div class=" col col-3">
        <h2>{{ str_replace(' ','_',$subcity->subcity_name) }} Perspective</h2>
        
        <div class="card-tools">
         <!--  <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
          </button> -->
        </div>
        <div class="">
          <hr>
          @foreach($indicatorsCommunity as $inkey=>$indicator)
          <p><b> {{ $indicator->name}} :  </b> total {{ $indicator->name}}</p>
          @endforeach
        </div>
          
        <!-- /.card-tools -->
      </div>
      <!-- /.card-header -->
      <div class="card-body cpl col-9">
        <p>{{$subcity->review}}</p>
        <hr style="border-width: medium;">
        <p>{{$subcity->review}}</p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- ================== END SUBCYTY REVIEW ====================--> 
    <!-- ================== SUBCYTY TABLE ====================--> 

    <div class="card-body">
      <table id="table{{$subcity->id}}" class="data-table table  table-striped  table-bordered">
    
        <thead>
          <tr>
            <th>Woreda</th>

        @foreach($indicatorsCommunity as $inkey=>$indicator)
            <th>{{ $indicator->name }}</th>
        @endforeach
            <th>RI</th>
            <th>Vulnerability</th>
          </tr>
        </thead>
        <tbody>
      @foreach($woredas as $woredakey=>$woreda)
        @if($woreda->subcity_id == $subcity->id)
          <tr>

            <td>{{$woreda->woreda_name}}</td>
            @php
            $overall_ri = 0;
          
            @endphp
            @foreach($indicatorsCommunity as $inkey=>$indicator)
            
                <td>{{$woreda->id}}-{{$indicator->indicator_id}}-{{ $ri_detail['test'][$woreda->id][$indicator->indicator_id]['sum_value'] }}</td>
                
                @php
                //echo($woreda->woreda_name."-".$indicator->name);
                 $overall_ri += $ri_detail['test'][$woreda->id][$indicator->indicator_id]['ri']; 
                @endphp

            @endforeach
           <!--  
            IF(overall_ri>23.3,"VERY HIGH", IF($overall_ri>15.5,"HIGH",IF($overall_ri>=7.8,"MODERATE", "LOW"))) 
          -->
                <td>
                {{ $overall_ri }}
                </td>
                
                @if($overall_ri>23.3)
                  <td class="text-danger">VERY HIGH </td>
                @elseif($overall_ri>15.5)
                  <td class="text-warning">HIGH </td>
                @elseif($overall_ri>7.8)
                  <td class="text-primary">MODERATE</td>
                @else
                  <td class="text-success">LOW</td>
                @endif
          </tr>  
        @endif      
      @endforeach
      

        </tbody>

        <thead>
          <tr>
            <th>Woreda</th>

        @foreach($indicatorsCommunity as $inkey=>$indicator)
            <th>{{ $indicator->name }}</th>
        @endforeach
            <th>RI</th>
            <th>Vulnerability</th>
          </tr>
        </thead>
      </table>
    </div>
    

    <script type="text/javascript">
        
      $(document).ready(function () {
      $('#example2').DataTable();
      $('.dataTables_length').addClass('bs-select');
      });
    </script>
    <!-- ================== END SUBCYTY TABLE ====================--> 
  </div>
  <!-- ================== END A.A. SUBCYTY  ====================-->  
  <!-- ================== END A.A. SUBCYTY  ====================-->  
    <script type="text/javascript">
      $(document).ready( function () {
        $('#table{{$subcity->id}}').DataTable();
    } );
    </script>
@endforeach





  <div class="card">
    <a id="summery"></a>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
  </div>
  
  <!-- right col -->
</div>
<!-- /.row (main row) -->
<!-- <div class="css-1fi4hi4">
  <h4 class="css-jqx6kg">Methods: Constructing the Index</h4>
  <div style="height: 300px; overflow: hidden; transition: all 1s ease 0s; position: relative;">
    <p class="css-fqx5i6">The index covers 756 regions in 48 countries. It is inspired by the US COVID-19 Community Vulnerability Index but has been adjusted based on learnings from the pandemic and Africa-specific factors. The seven themes of vulnerability are based on sub themes using indicators pulled from DHS, IHME, WorldPop, Malaria Atlas, UNHCR, Uppsala Conflict, World Bank, and Facility data. For Epidemiological vulnerability, little subnational data on non-communicable diseases could be found. For Healthcare Systems vulnerability, only limited detailed sub-national data is available on facility capacity and staffing. Nine countries lack vulnerability scores relative to every other region in Africa (South Sudan, Sudan, Somalia, Central African Republic, Libya, Tunisia, Algeria, Botswana, Djibouti) because they lacked recent DHS data. A full description of the methods is available in this <a href="https://covid-static-assets.s3.amazonaws.com/Africa+CCVI+methodology.pdf" target="_blank" style="color: rgb(243, 121, 62);">PDF</a>. <br>Caveats COVID-19 is a new disease, and most of what is known about it is based on data from middle- and high-income countries. Much remains unknown about how the pandemic will unfold in Africa. The index has been constructed using the best available information from Africa and elsewhere on what factors will mediate the impact of the virus. A second caveat to consider is that whereas country-level data is ubiquitous, subnational data is far harder to obtain. For a full discussion of caveats, please see the Methods <a href="https://covid-static-assets.s3.amazonaws.com/Africa+CCVI+methodology.pdf" target="_blank" style="color: rgb(243, 121, 62);">PDF</a>. We are continuously working to improve the index, please see the changelog in the Methods document.</p>
    <div style="position: absolute; bottom: 0px; width: 100%; height: 50px; background: rgba(0, 0, 0, 0) linear-gradient(rgba(255, 255, 255, 0) 0%, rgb(39, 61, 63) 100%) repeat scroll 0% 0%;">
      
    </div>
  </div>
</div>
<div class="css-1fi4hi4">
  <div class="css-1yrmf69"></div>
  <div class="css-1u7szkk">
    <span style="font-family: Libre Franklin; font-weight: bold; font-size: 16px; color: white; cursor: pointer;">
      SEE MORE 
      <span>
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIxLjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCAxMCA3IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMCA3OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGw6bm9uZTtzdHJva2U6I0ZGRkZGRjtzdHJva2Utd2lkdGg6Mjt9Cjwvc3R5bGU+CjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik05LDFMNSw1TDEsMSIvPgo8L3N2Zz4K" style="margin: 2px 10px;" width="15">
      </span>
    </span>
  </div>
</div> -->

</div><!-- /.container-fluid -->
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper 
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>-->
<script>
  $(document).ready(function(){
      $("select").change(function(){
          $(this).find("option:selected").each(function(){
              var optionValue = $(this).attr("value");
              if(optionValue){
  
                  $(".box").not("." + optionValue).hide();
                  $(".boxx").not("." + optionValue).hide();
                  $("." + optionValue).show();
              } else{
                  $(".box").hide();
               
              }
          });
      }).change();
  });
</script>
<!-- jQuery 
<script src="plugins/jquery/jquery.min.js"></script>-->
<!-- jQuery UI 1.11.4 
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>-->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS 
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline 
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap 
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart 
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker 
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote 
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars 
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App 
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes 
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) 
  <script src="dist/js/pages/dashboard.js"></script>
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes 
  <script src="dist/js/demo.js"></script>
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE 
  <script src="dist/js/adminlte.js"></script>
  
  <!-- OPTIONAL SCRIPTS 
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes 
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
<script>
  window.onload = function () {
  
  var options = {
    animationEnabled: true,
    title: {
      text: "Covid Comparission In Addis Abeba subcities"
    },
    axisY: {
      title: "Growth Rate (in %)",
      suffix: "%"
    },
    axisX: {
      title: "Sub cities"
    },
    data: [{
      type: "column",
      yValueFormatString: "#,##0.0#"%"",
      dataPoints: [
        { label: "Addis Ketema", y: 10.09 },  
        { label: "Akaki", y: 9.40 },  
        { label: "Arada", y: 8.50 },
        { label: "Bole", y: 7.96 }, 
        { label: "Gulelle", y: 7.80 },
        { label: "Kirkos ", y: 7.56 },
        { label: "Kolfe", y: 7.20 },
        { label: "Lemmi kura", y: 6 },
        { label: "Lideta", y: 7.1 },
        { label: "Nefas-selk Lafto", y: 11 },
        { label: "Yeka", y: 10 }
        
      ]
    }]
  };
  $("#chartContainer").CanvasJSChart(options);
  
  }
</script>


<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>

<footer class="main-footer">
  <strong>
    <p align="center">Copyright &copy; May.2021 <a href="#">AlephTav</a>.
  </strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0.0
  </div>
  </p>
</footer>
<style type="text/css">
  #myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 20px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: rgba(0,0,0,.5); /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 10px 14px 10px 14px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

#myBtn:hover {
  background-color: #555; /* Add a dark-grey background on hover */
}
</style>
 <button onclick="topFunction()" id="myBtn" title="Go to top">Top <i class="fa fa-long-arrow-up"></i></button> 
<script type="text/javascript">
  //Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 
</script>

</body>
</html>
