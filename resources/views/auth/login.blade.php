@extends('layout')
@section('content')
    <section id="breadcrumbs" class="breadcrumbs">
      
    </section><!-- End Breadcrumbs -->
<!-- ================== END OF NAV  ====================-->
    <!-- Content Wrapper. Contains page content -->
    <div class="" >
{{--     <style type="text/css">
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
            
         </div>
         <h2 class="Africa-module-heroTitle_2HmZ css-vurnku">
            Risk index that asses COVID-19 vulnerability at individual, community and special setting level in ADDIS ABABA
         </h2>
         <div class="Africa-module-heroText_3B6l css-1v6x1ap">
            
         </div>
      </div>
    </div> --}}
    

<br>
<br>
<br>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <!-- <div class="card-header">{{ __('Login') }}</div> -->
                @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="icon-copy fa fa-check" aria-hidden="true"></i> Success !</strong> {{ $message }}.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
            @endif
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('role') }}</label>

                            <div class="col-md-6">
                                <select id="role" type="select" class="form-control" name="role" required>
                                    <option value="expert">Expert</option>
                                    <option value="encoder">Encoder</option>
                                    <option value="admin">Admin</option>
                                </select>
                                 <input id="role" type="role" class="form-control @error('role') is-invalid @enderror" name="role" required autocomplete="current-role">

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div> -->                        

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                         <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                               <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif-->
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <img src="{{ asset('vendors/images/login-page-img.png') }}" alt="">
        </div>
        <div class="col-md-6">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
               <div class="weight-600 font-30 text-blue"> Welcome  !</div>
            </h4>
            <p class="font-18 ">We welcome you to our site and wisely notice that your anautorized login attempets are prohipited. avery login atempets are loged.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>


@endsection