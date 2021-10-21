@extends('inc.layout')

@section('nave')

@include('inc.navebar')

@endsection

@section('sidebar')

@include('inc.sidebar')

@endsection

@section('content')

		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="title">
							<h4>History Assessements</h4>
						</div>
						{{-- <nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">UI Timeline</li>
							</ol>
						</nav> --}}
					</div>
				</div>
			</div>
			<div class="container pd-0">
				<div class="timeline mb-30">
					<ul>
						@foreach($settingvalues as $key=>$data)
						<li>
							<div class="timeline-date">
								{{date('M D d o ', strtotime($data->calculated_at))}}
							</div>
							<div class="timeline-desc card-box">
								<div class="pd-20">
									<h4 class="mb-10 h4">Based on your inpute your enviroment was assessed </h4>
									<p>
	{{-- 									       if($ri_infection < 8){
            $level_ri_infection = "Low";
        }elseif ($ri_infection < 15) {
            $level_ri_infection = "Moderate";
        }elseif ($ri_infection < 22) {
            $level_ri_infection = "High";
        }elseif ($ri_infection >= 22) {
            $level_ri_infection = "Very High" 
             Primary Secondary Success Danger Warning Info Light Dark 
               your overall risk to be infected with covid-19 is 00 It means that you have xxx vulnerablity for infection 
your overall risk to be hospitalized with covid-19 is 00 it means that your have xxx vulnerablity for hospitalization
your overall risk of mortality due to covid-19 is 00 it means that your have xxx risk of mortality
             --}}

										<h4 class="h6">
											 your overall risk to be infected with covid-19 is {{ $data->ri_infection}} It means that you have 
											@if($data->level_ri_infection == 'Low')
												<span class="badge badge-pill badge-light">{{ $data->level_ri_infection }}</span>
											@elseif($data->level_ri_infection == 'Moderate')
												<span class="badge badge-pill badge-info">{{ $data->level_ri_infection }}</span>
											@elseif($data->level_ri_infection == 'High')
												<span class="badge badge-pill badge-warning">{{ $data->level_ri_infection }}</span>
											@elseif($data->level_ri_infection == 'Very High')
												<span class="badge badge-pill badge-danger">{{ $data->level_ri_infection }}</span>
											@endif
											 vulnerablity for infection.
										</h4>
										<h4 class="h6">
											your overall risk to be hospitalized with covid-19 is {{ $data->ri_hospitalization}} it means that your have 
											@if($data->level_ri_hospitalization == 'Low')
												<span class="badge badge-pill badge-light">{{ $data->level_ri_hospitalization }}</span>
											@elseif($data->level_ri_hospitalization == 'Moderate')
												<span class="badge badge-pill badge-info">{{ $data->level_ri_hospitalization }}</span>
											@elseif($data->level_ri_hospitalization == 'High')
												<span class="badge badge-pill badge-warning">{{ $data->level_ri_hospitalization }}</span>
											@elseif($data->level_ri_hospitalization == 'Very High')
												<span class="badge badge-pill badge-danger">{{ $data->level_ri_hospitalization }}</span>
											@endif 
											 vulnerablity for hospitalization.
										</h4>
										<h4 class="h6">
											your overall risk of mortality due to covid-19 is {{ $data->ri_death}} it means that your have 
											@if($data->level_ri_death == 'Low')
												<span class="badge badge-pill badge-light">{{ $data->level_ri_death }}</span>
											@elseif($data->level_ri_death == 'Moderate')
												<span class="badge badge-pill badge-info">{{ $data->level_ri_death }}</span>
											@elseif($data->level_ri_death == 'High')
												<span class="badge badge-pill badge-warning">{{ $data->level_ri_death }}</span>
											@elseif($data->level_ri_death == 'Very High')
												<span class="badge badge-pill badge-danger">{{ $data->level_ri_death }}</span>
											@endif  
											 risk of mortality.
										</h4></p>
								</div>
							</div>
						</li>
						@endforeach	
						@if(!isset($key))
						<li>
							<div class="timeline-date">
								0
							</div>
							<div class="timeline-desc card-box">
								<div class="pd-20">
									<h4 class="mb-10 h4">No assessement done please fill the form .</h4>
									<p><a href="{{ route('formdata') }}">clik here to fill the form</a>.</p>
								</div>
							</div>
						</li>
						@endif
					</ul>
				</div>
			</div>
		</div>
@endsection