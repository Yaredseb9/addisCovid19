<!-- ==================  NAV  ====================-->
    <nav class=" navbar navbar-expand-lg navbar-light bg-white" style="-webkit-box-shadow: 0 0 28px rgba(0, 0, 0, .08);">
      <ul class="navbar-nav">
        <li class="nav-item ">
          <a href="/" style="color: #000000">
            <img class="animation__shake" src="{{ asset('imgs/new_logo.svg') }}" alt="AlephTavLogo" class="rounded" height="70" width="70">
            <h1 class="d-none d-sm-inline-block align-middle h3" style="margin-bottom: 0 !important">Vulnerability For Covid-19 </h1>
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
          <a class="nav-link" href="/risk">Individual</a>
        </li>
     <!--   <li class="nav-item ">
          <a class="nav-link" href="/#subcityDetail">Community</a>
        </li>  -->      
        <li class="nav-item ">
          <a class="nav-link" href="/settingrisk">Setting</a>
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
            @elseif( Auth::user()->role == "physcian")
                <a class="dropdown-item" href="{{ route('home') }}"> Physcian Dashboard </a>
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
    </nav>

<!-- ================== END OF NAV  ====================-->