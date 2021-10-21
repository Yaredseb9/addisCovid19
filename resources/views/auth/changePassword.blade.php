@extends('layout')
@section('content')
    <section id="breadcrumbs" class="breadcrumbs">
      
    </section><!-- End Breadcrumbs -->
<!-- ================== END OF NAV  ====================-->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" >
   {{--  <style type="text/css">
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
    </div>
     --}}

<br>
<br>
<br>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                <div class="text-center">
                    <div class="card-header text-center">
                        <h2> Change Password</h2>
                        after changing the password you need to login
                    </div>

                    @if ($errors->all())
                    <div class="alert alert-danger  alert-dismissible fade show max-width-700 mx-auto" role="alert">
                        <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error !</strong> 
                        @foreach ($errors->all() as $error)

                                    {{ $error }}

                                 @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                    @endif
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('changepass') }}">
                        @csrf 
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Current Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Password</label>
                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">New Confirm Password</label>
                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Password
                                </button>
                            </div>
                        </div>
                    </form>
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
            <img src="{{ asset('vendors/images/login-page-img.png')}}" alt="">
        </div>
        <div class="col-md-6">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
               <div class="weight-600 font-30 text-blue"> Password Changing  !</div>
            </h4>
            <p class="font-18 ">Frequent password changing is highly recommened. we advice you to use very complex passwords. Avery  atempets are loged.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis ea iure fugiat, veniam non quaerat mollitia animi error corporis.</p>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@endsection