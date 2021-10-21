@php
if ((auth()->user()->role == 'admin') || (auth()->user()->role == 'admin-subcity') ) {
    header('Location: '.route('admin.index'));
    exit;
}

/*if (auth()->user()->role == 'expert') {
    header('Location: '.route('expert.index'));
    exit;
}*/
if (auth()->user()->role == 'encoder') {
    header('Location: '.route('incoder.index'));
    exit;
}

if (auth()->user()->role == 'guestcom') {
    header('Location: '.route('official.index'));
    exit;
}
if (auth()->user()->role == 'guesthel') {
    header('Location: '.route('official.index'));
    exit;
}
if (auth()->user()->role == 'guestboth') {
    header('Location: '.route('official.index'));
    exit;
}
if (auth()->user()->role == 'setting') {
    header('Location: '.route('official.index'));
    exit;
}
if (auth()->user()->role == 'setting') {
    header('Location: '.route('official.index'));
    exit;
}
@endphp
{{-- 
/*
 ************************************************************************
*************************  Expert Dashbord ***********************
************************************************************************ 
*/ --}}

{{-- @include('inc.redirectRole')
@include('inc.rediredtRole') --}}


@extends('inc.layout')

@section('nave')

  @include('inc.navebar')

@endsection

@section('sidebar')

  @include('inc.sidebar')

@endsection


@section('content')


<div class="pre-loader">
  <div class="pre-loader-box">
    <div class="loader-logo"><img src="imgs/alp1.svg" alt=""></div>
    <div class='loader-progress' id="progress_div">
      <div class='bar' id='bar1'></div>
    </div>
    <div class='percent' id='percent1'>0%</div>
    <div class="loading-text">
      Loading...
    </div>
  </div>
</div>

<div class="">
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong><i class="icon-copy fa fa-check" aria-hidden="true"></i> Success !</strong> {{ $message }}.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      @endif
  <div class="xs-pd-20-10 pd-ltr-20">
    
<!--     <div class="title pb-20">
      <h2 class="h3 mb-0">Expert Dashbord</h2>
    </div> -->
      <div class="title pb-20 pt-20">
        <h4 class="h4 mb-0">Quick Start</h4>
      </div>
    <div class="row">
      
      <div class="col-md-6 mb-20">
          <div class="card-box  pd-20 mb-20" data-bgcolor="#265ed7" style="background-color: rgb(69, 90, 100);">
            {{-- <a class="btn btn-primary" data-toggle="modal" id="mediumButton" data-target="#editModal" data-attr="{{ route('expert.create') }}" style="color:white"><i class="icon-copy dw dw-add-user"></i>New Indicators <i class="icon-copy dw dw-add-user"></i></a>  --}}
            <div class="d-flex justify-content-between pb-20 text-white">
              <a href="#"{{-- data-toggle="modal" id="addIndBtn" data-target="#addInd"  data-attr="{{ route('expert.create') }}" --}} >
                <div class="icon h1 text-white">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                </div>
              </a>
              <div class=" text-right">
                <div class="icon" data-color="#00eccf" style="color: rgb(0, 236, 207);"><i class="icon-copy dw dw-flow fa-2x"></i></div>
              </div>
            </div>
            <div class="d-flex justify-content-between align-items-end">
              <div class="text-white">
                <div class="font-14">Total Indicators</div>
                <div class="font-24 weight-500">{{ $indicators->count() }}</div>
              </div>
              <div class="max-width-150" style="position: relative;">
              <div class="resize-triggers"><div class="expand-trigger"><div style="width: 151px; height: 71px;"></div></div><div class="contract-trigger"></div></div></div>
            </div>
          </div>
      </div>
      
      <div class="col-md-6 mb-20">
          <div class="card-box  pd-20 mb-20" data-bgcolor="#001652" style="background-color: rgb(69, 90, 100);">
            
            <div class="d-flex justify-content-between pb-20 text-white">
              <a href="/subreview">
                <div class="icon h1 text-white">
                  <i class="ti-write" aria-hidden="true"></i>
                </div>
              </a>
              <div class=" text-right">
                <div class="icon" data-color="#00eccf" style="color: rgb(0, 236, 207);"><i class="icon-copy dw dw-city fa-2x"></i></div>
              </div>
            </div>

            <div class="d-flex justify-content-between align-items-end">
              <div class="text-white">
                <div class="font-14"> Subsities</div>
                <div class="font-24 weight-500">{{$nullRevSubcities->count() + $notNullRevSubcities->count()}}</div>
              </div>
              <div class="max-width-150" style="position: relative;">
              <div class="resize-triggers"><div class="expand-trigger"><div style="width: 151px; height: 71px;"></div></div><div class="contract-trigger"></div></div></div>
            </div>

          </div>
      </div>
    </div>

    <div class="row pb-10">

      <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
          <div class="d-flex flex-wrap">
            <div class="widget-data">
              <!-- 'adminUsers', 'expertUsers', 'encoderUsers' -->
              <div class="weight-700 font-24 text-dark">{{ $indicators->count()}}</div>
              <div class="font-14 text-secondary weight-500">Total Indicators</div>
            </div>
            <div class="widget-icon">
              <div class="icon" data-color="#00eccf" style="color: rgb(0, 236, 207);"><i class="icon-copy dw dw-flow"></i></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
          <div class="d-flex flex-wrap">
            <div class="widget-data">
              <div class="weight-700 font-24 text-dark">{{ $notNullRevSubcities->count()  }}</div>
              <div class="font-14 text-secondary weight-500">No. of Reviewed Subcitys</div>
            </div>
            <div class="widget-icon">
              <div class="icon" data-color="green" ><span class="icon-copy dw dw-city"></span></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-6 mb-20">
        <div class="card-box height-100-p widget-style3">
          <div class="d-flex flex-wrap">
            <div class="widget-data">
              <div class="weight-700 font-24 text-dark">{{ $nullRevSubcities->count() }}</div>
              <div class="font-14 text-secondary weight-500">No. of Unreviewed Subcitys</div>
            </div>
            <div class="widget-icon">
              <div class="icon" data-color="#ff5b5b"><span class="icon-copy dw dw-city"></span></div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="row">
      <!-- Subcity table -->
      <div class="col-lg-8 col-md-6 col-sm-12 mb-30 card-box">
        <br>
        <div class="row">
          <div class="col pull-left">
            <h2 class="mb-30 h4">Indicator table</h2>
          </div>
          
          <div class="col col-md-2 col-sm-12 pull-right">
            <a href="" id="printIndicators"><span class="icon-copy ti-printer fa-2x"></span></a>
          </div>
          
        </div>
        <script type="text/javascript">
          $('#printIndicators').on('click', function () {

          DocumentContainer = document.getElementById('indicatorsTable');
            var WindowObject = window.open('', "PrintWindow", "width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
            WindowObject.document.writeln(DocumentContainer.innerHTML);
            WindowObject.document.close();
            WindowObject.focus();
            WindowObject.print();
            WindowObject.close();
            }
          );
        </script>
        <div class="table-responsive" id="indicatorsTable">
          <table class="table table-striped table-responsive" >
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Indicator name</th>
                <th scope="col">Description</th>
                <th scope="col">Catagory</th>
                <th scope="col">Added Date</th>
              </tr>
            </thead>
            <tbody>

              @foreach($indicators as $key=>$ind)
              <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$ind->name}}</td>
                <td>{{$ind->discription}}</td>
                <td>{{$ind->catagory}}</td>
                <td>{{$ind->created_at}}</td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
      </div><!-- End of Subcity table -->
      <!-- Subcity Status -->
      <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
          <div class="card-box pd-30 pt-10 height-100-p">
            <h2 class="mb-30 h4">Subcity Status</h2>
            <div class="browser-visits">
              <ul>
                @foreach($nullRevSubcities as $key=>$city)
                <li class="d-flex flex-wrap align-items-center">
                  <div class="icon"><i class="icon-copy dw dw-city fa-2x"></i></div>
                  <div class="browser-name">{{ $city->subcity_name }}</div>
                  <a href="/subreview">
                    <div class="visit">
                      <span class="badge badge-pill badge-warning">unreviewed <i class="icon-copy fi-x"></i></span>
                    </div>
                  </a>
                </li>
                @endforeach

                @foreach($notNullRevSubcities as $key=>$city)
                <li class="d-flex flex-wrap align-items-center">
                  <div class="icon"><i class="icon-copy dw dw-city fa-2x"></i></div>
                  <div class="browser-name">{{ $city->subcity_name }}</div>
                  <div class="visit">
                    <a tabindex="0" class="badge badge-pill badge-success" role="button" data-toggle="popover" data-html="true" data-trigger="focus" title="Review" data-content="{{ $city->review}}">reviewed <i class="icon-copy fi-check"></i> </a>

                  </div>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div><!-- End of Subcity Status -->
      
    </div>
   </div>
</div>
<!-- *********** Modal indicator ************** -->
<div class="modal fade" id="addInd" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mediumModal">Indicator - Add New</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" id="mediumBody">
                <div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    // display a modal (medium modal)
        $(document).on('click', '#addIndBtn', function(event) {
          event.preventDefault();
          let href = $(this).attr('data-attr');
          $.ajax({
            url: href,
            beforeSend: function() {
              $('#loader').show();
            },
                // return the result
                success: function(result) {
                  $('#addInd').modal("show");
                  $('#mediumBody').html(result).show();
                },
                complete: function() {
                  $('#loader').hide();
                },
                error: function(jqXHR, testStatus, error) {
                  console.log(error);
                  alert("Page " + href + " cannot open. Error:" + error);
                  $('#loader').hide();
                },
                timeout: 8000
              })
        });

      
</script>

  
@endsection
