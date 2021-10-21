<!-- 
@include('inc.redirectRole')
 -->
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

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><i class="icon-copy fa fa-check" aria-hidden="true"></i> Success !</strong> {{ $message }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
     </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger  alert-dismissible fade show">
        <strong><i class="icon-copy fa fa-cross" aria-hidden="true"></i> Whoops!</strong> There were some problems with your input.<br><br>
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
    </div>
@endif


		<div class="row justify-content-center">
			<div class="col-xl-3 col-lg-3 col3md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<!-- 'adminUsers', 'expertUsers', 'encoderUsers' -->
							<div class="weight-700 font-24 text-dark">{{ $setting_complete->count() + $setting_on_progress->count()}}</div>
							<div class="font-14 text-secondary weight-500">Total Assessements</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#00eccf" style="color: rgb(0, 236, 207);"><i class="icon-copy fa fa-pencil" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<!-- 'adminUsers', 'expertUsers', 'encoderUsers' -->
							<div class="weight-700 font-24 text-dark">{{ $setting_complete->count() }}</div>
							<div class="font-14 text-secondary weight-500">Complete Assessements</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#02ee02" style="color: rgb(0, 236, 207);"><i class="icon-copy fa fa-pencil" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<!-- 'adminUsers', 'expertUsers', 'encoderUsers' -->
							<div class="weight-700 font-24 text-dark">{{ $setting_on_progress->count() }} on progress</div>
							<div class="progress" style="height: 25px;">
							  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$progress}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><b>{{$progress}}%</b></div>
							</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#ffffff" ><i class="icon-copy fa fa-pencil" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>


	<div class="row clearfix progress-box">
		<div class="col-lg-8 col-md-6 col-sm-12 mb-30 card-box">
			<h2 class="mb-30 h4">History </h2>
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">No.</th>
			      <th scope="col">Calculated At</th>
			      <th scope="col">Risk Value</th>{{-- 
			      <th scope="col">Suggestion</th> --}}
			      

			    </tr>
			  </thead>
			  <tbody>

			  	@foreach($setting_complete as $key=>$complete)
			    <tr>
			      <th scope="row">{{$key+1}}</th>
			      <th scope="row">{{date('M D d o ', strtotime($complete->calculated_at))}}</th>
			      <th scope="row">
			      				@if($complete->level_ri_infection == 'Low')
									<small class="badge badge-pill badge-light">infection {{ $complete->level_ri_infection }}</small>
								@elseif($complete->level_ri_infection == 'Moderate')
									<small class="badge badge-pill badge-info">infection {{ $complete->level_ri_infection }}</small>
								@elseif($complete->level_ri_infection == 'High')
									<small class="badge badge-pill badge-warning">infection {{ $complete->level_ri_infection }}</small>
								@elseif($complete->level_ri_infection == 'Very High')
									<small class="badge badge-pill badge-danger">infection {{ $complete->level_ri_infection }}</small>
								@endif
			      				@if($complete->level_ri_hospitalization == 'Low')
									<small class="badge badge-pill badge-light">hospitalizaton {{ $complete->level_ri_hospitalization }}</small>
								@elseif($complete->level_ri_hospitalization == 'Moderate')
									<small class="badge badge-pill badge-info">hospitalizaton {{ $complete->level_ri_hospitalization }}</small>
								@elseif($complete->level_ri_hospitalization == 'High')
									<small class="badge badge-pill badge-warning">hospitalizaton {{ $complete->level_ri_hospitalization }}</small>
								@elseif($complete->level_ri_hospitalization == 'Very High')
									<small class="badge badge-pill badge-danger">hospitalizaton {{ $complete->level_ri_hospitalization }}</small>
								@endif
			      				@if($complete->level_ri_death == 'Low')
									<small class="badge badge-pill badge-light">mortality {{ $complete->level_ri_death }}</small>
								@elseif($complete->level_ri_death == 'Moderate')
									<small class="badge badge-pill badge-info">mortality {{ $complete->level_ri_death }}</small>
								@elseif($complete->level_ri_death == 'High')
									<small class="badge badge-pill badge-warning">mortality {{ $complete->level_ri_death }}</small>
								@elseif($complete->level_ri_death == 'Very High')
									<small class="badge badge-pill badge-danger">mortality {{ $complete->level_ri_death }}</small>
								@endif
											
			      {{-- <th scope="row">suggestion and advice</th> --}}
			     
			    </tr>
			 	@endforeach
			   
			  </tbody>
			</table>

		</div>
		<div class="col-md-4 mb-20">
			<a href="{{route('formdata')}}" class="card-box d-block mx-auto pd-20 text-secondary">
				<div class="img pb-30">
					<img src="{{ asset('/imgs/setting-check.png') }}" alt="">
				</div>
				<div class="content">
					<h3 class="h4">Assessement</h3>
					<p class="max-width-200 ">You can take assessemet</p>
				</div>
			</a>
		</div>
	</div>
 
@endsection
