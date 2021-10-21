@php
if ((auth()->user()->role == 'admin') ) {
    header('Location: '.route('admin.index'));
    exit;
}

if (auth()->user()->role == 'expert') {
    header('Location: '.route('expert.index'));
    exit;
}
/*if (auth()->user()->role == 'encoder') {
    header('Location: '.route('incoder.index'));
    exit;
}*/

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
{{-- @include('inc.redirectRole') --}}

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





			<div class="row clearfix progress-box">

				<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<div class="progress-box text-center">
							 <input type="text" class="knob total" value="60" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#1b00ff" data-angleOffset="180" readonly>
							<h5 class="text-blue padding-top-10 h5">Total Data</h5>
							<span class="d-block">
								@if($noAllData  == 0)  
									0
								@else 
									{{ round(((($indicatorsDataEncoded->count() + $indicatorsDataNotEncoded->count()) / $noAllData) * 100), 2) }}
								@endif
								% Out Of All Data in Addis Ababa. <i class="fa fa-line-chart text-blue"></i></span>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<div class="progress-box text-center">
							 <input type="text" class="knob encoded" value="70" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#00e091" data-angleOffset="180" readonly>
							<h5 class="text-light-green padding-top-10 h5">Encoded Data</h5>
							<span class="d-block">
								@if( ( $indicatorsDataEncoded->count() + $indicatorsDataNotEncoded->count() )  == 0)  
									0
								@else
									{{ round(((($indicatorsDataEncoded->count() ) / ($indicatorsDataEncoded->count() + $indicatorsDataNotEncoded->count())) * 100), 2) }}
								@endif
								% Out Of Data You Have to Encode <i class="fa text-light-green fa-line-chart"></i></span>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12 mb-30">
					<div class="card-box pd-30 height-100-p">
						<div class="progress-box text-center">
							 <input type="text" class="knob notEncoded" value="90" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#ffc107" data-angleOffset="180" readonly>
							<h5 class=" padding-top-10 h5" style="color:#ffc107">Data Not Encoded</h5>
							<span class="d-block">
								@if( ( $indicatorsDataEncoded->count() + $indicatorsDataNotEncoded->count() )  == 0)  
									0
								@else
									{{ round(((($indicatorsDataNotEncoded->count() ) / ($indicatorsDataEncoded->count() + $indicatorsDataNotEncoded->count())) * 100), 2) }}
								@endif
								% Out Of Data You Have to Encode <i class="fa  fa-line-chart" style="color:#ffc107"></i></span>
						</div>
					</div>
				</div>
				</div>


	<!-- <script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script> -->
	<!-- <script src="../vendors/scripts/process.js"></script> -->
<!-- 	<script src="../vendors/scripts/layout-settings.js"></script> -->
	<script src="{{ asset('src/plugins/jQuery-Knob-master/jquery.knob.min.js') }}"></script>
	<script type="text/javascript">
		$(".total").knob();
		$({animatedVal: 0}).animate({animatedVal: {{ round(((($indicatorsDataEncoded->count() + $indicatorsDataNotEncoded->count()) / $noAllData) * 100), 2) }} }, {
			duration: 3000,
			easing: "swing",
			step: function() {
				$(".total").val(Math.ceil(this.animatedVal)).trigger("change");
			}
		});
		$(".encoded").knob();
		$({animatedVal: 0}).animate({

			@if( ( $indicatorsDataEncoded->count() + $indicatorsDataNotEncoded->count() )  == 0)  
			animatedVal: 0
			@else
			animatedVal: {{ round(((($indicatorsDataEncoded->count() ) / ($indicatorsDataEncoded->count() + $indicatorsDataNotEncoded->count())) * 100), 2) }}
			@endif

		}, {
			duration: 3000,
			easing: "swing",
			step: function() {
				$(".encoded").val(Math.ceil(this.animatedVal)).trigger("change");
			}
		});
		$(".notEncoded").knob();
		$({animatedVal: 0}).animate({

			@if( ( $indicatorsDataEncoded->count() + $indicatorsDataNotEncoded->count() )  == 0)  
			animatedVal: 0
			@else
			animatedVal: {{ round(((($indicatorsDataNotEncoded->count() ) / ($indicatorsDataEncoded->count() + $indicatorsDataNotEncoded->count())) * 100), 2) }}
			@endif
			 }, {
			duration: 3000,
			easing: "swing",
			step: function() {
				$(".notEncoded").val(Math.ceil(this.animatedVal)).trigger("change");
			}
		});

		$(".dial5").knob();
	</script>


	<div class="row clearfix progress-box">
		<div class="col-lg-8 col-md-6 col-sm-12 mb-30 card-box">
			<h2 class="mb-30 h4">Data summary </h2>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">No.</th>
			      <th scope="col">Indicator Name</th>
			      <th scope="col">Ketena</th>
			      <th scope="col">Value</th>
			      <th scope="col">Date Encoded</th>

			    </tr>
			  </thead>
			  <tbody>

			  	@foreach($indicatorsDataEncoded as $key=>$data)
			    <tr>
			      <th scope="row">{{ $i++ }}</th>
			      <th scope="row">{{ $data->indicator_name }}</th>
			      <th scope="row">{{ $data->ketena_id }}</th>
			      <th scope="row">{{ $data->value }}</th>
			      <th scope="row">{{ $data->updated_at }}</th>
			    </tr>
			    @endforeach
			  	@foreach($indicatorsDataNotEncoded as $key=>$data)
			    <tr class="btn-warning">
			      <th scope="row">{{ $i++ }}</th>
			      <th scope="row">{{ $data->indicator_name }}</th>
			      <th scope="row">{{ $data->ketena_id }}</th>
			      <th scope="row">Not encoded</th>
			      <th scope="row">{{ $data->updated_at }}</th>
			    </tr>
			    @endforeach
			  </tbody>
			</table>

		</div>
		<div class="col-md-4 mb-20">
			<a href="{{route('manage_ketena')}}" class="card-box d-block mx-auto pd-20 text-secondary">
				<div class="img pb-30">
					<img src="{{ asset('imgs/edit-table.svg') }}" alt="">
				</div>
				<div class="content">
					<h3 class="h4">Encode Data</h3>
					<p class="max-width-200 ">You can encode data here</p>
				</div>
			</a>
		</div>
	</div>
 
@endsection
