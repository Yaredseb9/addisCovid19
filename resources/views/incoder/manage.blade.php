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

<script src="{{ asset('src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<div class="pd-20 card-box mb-30">
	<div class="pd-20 card-box">
{{-- 		<div class="row"><h5 class="h4 text-blue mb-20">{{ $userInfo[0]->subcity_name }} - Woreda {{ $userInfo[0]->woreda_name }}</h5> <!-- <span class="h6  mb-20" >list of ketenas</span> --> </div> --}}

		@if ($errors->any())
		    <div class="alert alert-danger  alert-dismissible fade show">
		        <strong><i class="icon-copy fa fa-cross" aria-hidden="true"></i> Whoops!</strong> There were some problems with your input.<br><br>
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		          <span aria-hidden="true">×</span>
		        </button>
		    </div>
		@endif

		@if ($message = Session::get('success'))
		    <div class="alert alert-success alert-dismissible fade show" role="alert">
		        <strong><i class="icon-copy fa fa-check" aria-hidden="true"></i> Success !</strong> {{ $message }}.
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		          <span aria-hidden="true">×</span>
		        </button>
		     </div>
		@endif
		@if ($error = Session::get('error'))
		    <div class="alert alert-danger  alert-dismissible fade show">
		        <strong><i class="icon-copy fa fa-cross" aria-hidden="true"></i> Whoops!</strong> There were some problems with your input.<br><br>
		        <ul class="list-group">
		            {{ $error}}
		        </ul>
		        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		          <span aria-hidden="true">×</span>
		        </button>
		    </div>
		@endif
@if(isset($myKetena))
{{-- ======================== for ketena ========================================== --}}
		<div class="tab">

			<h5> List of Ketena</h5>

			<div class="clear-fix row">
				<div class="col-md-2 col-sm-12">
					<ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">	

					@foreach($myKetena as $key => $ketena)
						<li class="nav-item">
							@if($key == 0)
							<a class="nav-link text-blue active" data-toggle="tab" href="#t{{ str_replace(' ','_',$ketena->ketana_name) }}" role="tab" aria-selected="true">{{ $ketena->ketana_name }}</a>
							@else
							<a class="nav-link text-blue" data-toggle="tab" href="#t{{ str_replace(' ','_',$ketena->ketana_name) }}" role="tab" aria-selected="true">{{ $ketena->ketana_name }}</a>
							@endif
						</li>
					@endforeach

					</ul>
				</div>
				<div class="col-md-10 col-sm-12">
					<div class="tab-content">
					@foreach($myKetena as $key => $ketena)
						@if($key == 0)
						
						<div class="tab-pane fade active show " id="t{{ str_replace(' ','_',$ketena->ketana_name) }}" role="tabpanel">
						@else
						<div class="tab-pane fade  " id="t{{ str_replace(' ','_',$ketena->ketana_name) }}" role="tabpanel">
						@endif
							<div class="pd-20">
								<form  action="{{ route('incoder.store','$ketena->id') }}" method="POST" >{{-- class="need-validated" novalidate --}}
								
								<input type="hidden" name="ketena_id" value="{{ $ketena->id }}">
								<input type="hidden" name="woreda_id" value="{{ $ketena->Woreda->id }}">
								
								
												
								
								<div class="bg-blue text-white" style="padding-left: 10px;border-radius: 5px 5px 0px 0px;">
								
									<div class="text-center"><hr><h2 class="h5  text-white">{{ $ketena->ketana_name }}</h2><hr></div>
									
									<div class="row form-group">
										
										<div class="col-md-6 col-sm-12 ">
											<div class="row form-group">
												<label class="col-sm-12 col-md-3 col-form-label text-md-right text-bold" for="population{{$ketena->id}}"> Population </label>
											
												
												<div class="col-sm-12 col-md-7 col-selfcenter text-md-center">				
													<input class="text-center text-bold" id="population{{$ketena->id}}" type="text" value="{{ $ketena->population }}" name="ketena_population"  required>
												</div>
											</div>
												
											
										</div>
										<div class="col-md-6 col-sm-12 ">
											<div class="row form-group">
												<label class="col-sm-12 col-md-3 col-form-label text-md-right text-bold" for="ketenaaarea{{$ketena->id}}"> Area <small>(Km<sup>2</sup>)</small></label>
												<div class="col-sm-12 col-md-7 col-selfcenter text-md-center">
													<input class="text-center text-bold" id="ketenaaarea{{$ketena->id}}" type="text" value="{{ $ketena->area }}" name="ketena_area"  required>
												
												</div>
											</div>
												
										</div>
										<script type="text/javascript">
											$("input[id='population{{$ketena->id}}']").TouchSpin({
												min: 0,
												max: 100000000000000000000000000,
												step: 1,
												decimals: 0,
											});

										</script>
										<script type="text/javascript">
											$("input[id='ketenaaarea{{$ketena->id}}']").TouchSpin({
												min: 0,
												max: 100000000000000000000000000,
												step: 1,
												decimals: 0,
											});

										</script>
									</div>
									
									<div class="row form-group">
										
										<div class="col-md-6 col-sm-12 ">
											<div class="row form-group">
												<label class="col-sm-12 col-md-3 col-form-label text-md-right text-bold" for="ketenahh{{$ketena->id}}"> HH </label>
											
												
												<div class="col-sm-12 col-md-7 col-selfcenter text-md-center">
													<input class="text-center text-bold" id="ketenahh{{$ketena->id}}" type="text" value="{{ $ketena->hh }}" name="ketena_hh"  required>
												</div>
											</div>
												
											
										</div>
										<div class="col-md-6 col-sm-12 ">
											<div class="row form-group">
												<label class="col-sm-12 col-md-3 col-form-label text-md-right text-bold" for="ketenaadult{{$ketena->id}}"> Adult  <small>(age>=18)</small></label>
												<div class="col-sm-12 col-md-7 col-selfcenter text-md-center">
													<input class="text-center text-bold" id="ketenaadult{{$ketena->id}}" type="text" value="{{ $ketena->adult }}" name="ketena_adult" required>
												
												</div>
											</div>
												
										</div>
										<script type="text/javascript">
											$("input[id='ketenahh{{$ketena->id}}']").TouchSpin({
												min: 0,
												max: 100000000000000000000000000,
												step: 1,
												decimals: 0,
											});

										</script>
										<script type="text/javascript">
											$("input[id='ketenaadult{{$ketena->id}}']").TouchSpin({
												min: 0,
												max: 100000000000000000000000000,
												step: 1,
												decimals: 0,
											});

										</script>
										
									</div>		
								</div>
								<div class="bg-light" style="padding-left: 10px">

									<div class="text-center"><h2 class="h6 ">{{ $ketena->ketana_name }} indicators</h2><hr></div>
									
								
								@php $track = 0; @endphp
								
									@foreach ($ketena_ri as $key => $data) 
									
									{{-- @if($data->ketena_id != $ketena->id)
										<?php continue; ?>
									@endif --}}

			                            @if(($data->ketena_id === $ketena->id ) and ($data->Ketena->subcity_id === $ketena->subcity_id ) and ($data->Ketena->woreda_id === $ketena->woreda_id ))
											@php $track++; @endphp
										
											@csrf
											@method('POST')
											<input type="hidden" name="data_id[]" value="{{$data->id}}">

											<input type="hidden" name="data_ketena_id[]" value="{{$data->Ketena->ketena_id}}">
											<input type="hidden" name="data_woreda_id[]" value="{{$data->Ketena->woreda_id}}">
											<input type="hidden" name="data_subcity_id[]" value="{{$data->Ketena->subcity_id}}">

											<input type="hidden" name="my_ketena_id[]" value="{{$ketena->id}}">
											<input type="hidden" name="my_woreda_id[]" value="{{$ketena->woreda_id}}">
											<input type="hidden" name="my_subcity_id[]" value="{{$ketena->subcity_id}}">

											<input type="hidden" name="indicator_id[]" value="{{$data->indicator_id}}">
											<input type="hidden" name="indicator_name[]" value="{{$data->Indicator->name}}">

											@if($track == 1)
	 									<div class="row">
	 										<div class="col-md-6 col-sm-12">
	 										@endif
	 										@if( $track <= 15)
	 											<div class="form-group row">
													<label class="col-sm-12 col-md-4 col-form-label text-md-right "  title="{{$data->Indicator->discription}}" data-toggle="tooltip" title="Tooltip on top" aria-hidden="true">{{ $data->Indicator->name }} <i class="icon-copy fa fa-question-circle text-blue"></i></label>
													<div class="col-sm-12 col-md-6">
														<input class="" id="indi{{$data->id}}" type="text" value="{{$data->value}}" name="value[]">
													</div>
												</div>

												<script type="text/javascript">

													$("input[id='indi{{$data->id}}']").TouchSpin({
														//verticalbuttons: true,
														//verticalupclass: 'fa fa-plus',
														//verticaldownclass: 'fa fa-minus',
														min: 0,
														max: 100000000000000000000000000,
														step: 1,
														decimals: 0,
													});

												</script>
											@endif
											@if($track == 16)
		 									</div>

	 										<div class="col-md-6 col-sm-12">
	 										@endif
	 										@if($track > 15)
	 											<div class="form-group row">
													<label class="col-sm-12 col-md-3 col-form-label text-md-right "  title="{{$data->Indicator->discription}}" data-toggle="tooltip" title="Tooltip on top" aria-hidden="true">{{ $data->Indicator->name }} <i class="icon-copy fa fa-question-circle text-blue"></i></label>
													<div class="col-sm-12 col-md-6">
														<input id="indi{{$data->id}}" type="text" value="{{$data->value}}" name="value[]">
													</div>
												</div>

												<script type="text/javascript">

													$("input[id='indi{{$data->id}}']").TouchSpin({
														//verticalbuttons: true,
														min: 0,
														max: 100000000000000000000000000,
														step: 1,
														decimals: 0,
													});

												</script>
											@endif
	 										
										
											@endif

										@endforeach
										</div>
									</div>

										<div class="col-xs-12 col-sm-12 col-md-12 text-center">
											<button type="submit" name="submitKetena" class="btn btn-primary">Submit</button>
										</div>

									</div>
								</form>

							</div>
						</div>
					@endforeach




					</div>
				</div>				
			</div>

		</div>
	</div>
{{-- ======================== end of for ketena ========================================== --}}
@endif

@if(isset($myWoreda))
{{-- ======================== for woreda ========================================== --}}
		<div class="tab">

			<h5> Woreda</h5>

			<div class="clear-fix row">
				<div class="col-md-2 col-sm-12">


@if(Auth::user()->role == "admin-subcity")
					<ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">	

					@foreach($myWoreda as $key => $ketena)
						<li class="nav-item">
							@if($key == 0)
							<a class="nav-link text-blue active" data-toggle="tab" href="#t{{ str_replace(' ','_',$ketena->woreda_name) }}" role="tab" aria-selected="true"><small>{{ $ketena->woreda_name }}</small></a>
							@else
							<a class="nav-link text-blue" data-toggle="tab" href="#t{{ str_replace(' ','_',$ketena->woreda_name) }}" role="tab" aria-selected="true"><small>{{ $ketena->woreda_name }}</small></a>
							@endif
						</li>
					@endforeach
					</ul>
@else
					<ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">	

						<li class="nav-item">
							<a class="nav-link text-blue active" data-toggle="tab" href="#t{{ str_replace(' ','_',$userInfo[0]->woreda_name) }}" role="tab" aria-selected="true"> {{ $userInfo[0]->woreda_name }}</a>						
						</li>

					</ul>
@endif

				</div>
				<div class="col-md-10 col-sm-12">
					<div class="tab-content">
					@foreach($myWoreda as $key => $ketena)
						@if($key == 0)
						
							<div class="tab-pane fade active show " id="t{{ str_replace(' ','_',$ketena->woreda_name) }}" role="tabpanel">
						@else
							<div class="tab-pane fade  " id="t{{ str_replace(' ','_',$ketena->woreda_name) }}" role="tabpanel">
						@endif
							<div class="pd-20">
								<form  action="{{ route('incoder.store','$ketena->id') }}" method="POST" >{{-- class="need-validated" novalidate --}}
								
								{{-- <input type="hidden" name="ketena_id" value="{{ $ketena->id }}"> --}}
								<input type="hidden" name="woreda_id" value="{{ $ketena->id }}">
								
								
												
								
								<div class="bg-blue text-white" style="padding-left: 10px;border-radius: 5px 5px 0px 0px;">
								
									<div class="text-center"><hr><h2 class="h5  text-white">{{ $ketena->woreda_name }}</h2><hr></div>
									
									<div class="row form-group">
										
										<div class="col-md-6 col-sm-12 ">
											<div class="row form-group">
												<label class="col-sm-12 col-md-3 col-form-label text-md-right text-bold" for="population{{$ketena->id}}"> Population </label>
											
												
												<div class="col-sm-12 col-md-7 col-selfcenter text-md-center">				
													<input class="text-center text-bold" id="population{{$ketena->id}}" type="text" value="{{ $ketena->population }}" name="ketena_population"  required>
												</div>
											</div>
												
											
										</div>
										<div class="col-md-6 col-sm-12 ">
											<div class="row form-group">
												<label class="col-sm-12 col-md-3 col-form-label text-md-right text-bold" for="ketenaaarea{{$ketena->id}}"> Area <small>(Km<sup>2</sup>)</small></label>
												<div class="col-sm-12 col-md-7 col-selfcenter text-md-center">
													<input class="text-center text-bold" id="ketenaaarea{{$ketena->id}}" type="text" value="{{ $ketena->area }}" name="ketena_area"  required>
												
												</div>
											</div>
												
										</div>
										<script type="text/javascript">
											$("input[id='population{{$ketena->id}}']").TouchSpin({
												min: 0,
												max: 100000000000000000000000000,
												step: 1,
												decimals: 0,
											});

										</script>
										<script type="text/javascript">
											$("input[id='ketenaaarea{{$ketena->id}}']").TouchSpin({
												min: 0,
												max: 100000000000000000000000000,
												step: 1,
												decimals: 0,
											});

										</script>
									</div>
									
									<div class="row form-group">
										
										<div class="col-md-6 col-sm-12 ">
											<div class="row form-group">
												<label class="col-sm-12 col-md-3 col-form-label text-md-right text-bold" for="ketenahh{{$ketena->id}}"> HH </label>
											
												
												<div class="col-sm-12 col-md-7 col-selfcenter text-md-center">
													<input class="text-center text-bold" id="ketenahh{{$ketena->id}}" type="text" value="{{ $ketena->hh }}" name="ketena_hh"  required>
												</div>
											</div>
												
											
										</div>
										<div class="col-md-6 col-sm-12 ">
											<div class="row form-group">
												<label class="col-sm-12 col-md-3 col-form-label text-md-right text-bold" for="ketenaadult{{$ketena->id}}"> Adult  <small>(age>=18)</small></label>
												<div class="col-sm-12 col-md-7 col-selfcenter text-md-center">
													<input class="text-center text-bold" id="ketenaadult{{$ketena->id}}" type="text" value="{{ $ketena->adult }}" name="ketena_adult" required>
												
												</div>
											</div>
												
										</div>
										<script type="text/javascript">
											$("input[id='ketenahh{{$ketena->id}}']").TouchSpin({
												min: 0,
												max: 100000000000000000000000000,
												step: 1,
												decimals: 0,
											});

										</script>
										<script type="text/javascript">
											$("input[id='ketenaadult{{$ketena->id}}']").TouchSpin({
												min: 0,
												max: 100000000000000000000000000,
												step: 1,
												decimals: 0,
											});

										</script>
										
									</div>		
								</div>
								<div class="bg-light" style="padding-left: 10px">

									<div class="text-center"><h2 class="h6 ">{{ $ketena->ketana_name }} indicators</h2><hr></div>
									
								
								@php $track = 0; @endphp
								
									@foreach ($woreda_ri as $key => $data) 

			                            @if(($data->Woreda->subcity_id === $ketena->subcity_id ) and ($data->woreda_id === $ketena->id ))
											@php $track++; @endphp
										
											@csrf
											@method('POST')
											<input type="hidden" name="data_id[]" value="{{$data->id}}">

											<input type="hidden" name="data_ketena_id[]" value="{{$data->Woreda->ketena_id}}">
											<input type="hidden" name="data_woreda_id[]" value="{{$data->Woreda->id}}">
											<input type="hidden" name="data_subcity_id[]" value="{{$data->Woreda->subcity_id}}">

											<input type="hidden" name="my_ketena_id[]" value="{{$ketena->id}}">
											<input type="hidden" name="my_woreda_id[]" value="{{$ketena->id}}">
											<input type="hidden" name="my_subcity_id[]" value="{{$ketena->subcity_id}}">

											<input type="hidden" name="indicator_id[]" value="{{$data->indicator_id}}">
										
											<input type="hidden" name="indicator_name[]" value="{{$data->Indicator->name}}">

											@if($track == 1)
	 									<div class="row">
	 										<div class="col-md-6 col-sm-12">
	 										@endif
	 										@if( $track <= 15)
	 											<div class="form-group row">
													<label class="col-sm-12 col-md-4 col-form-label text-md-right "  title="{{$data->Indicator->discription}}" data-toggle="tooltip" title="Tooltip on top" aria-hidden="true">{{ $data->Indicator->name }} <i class="icon-copy fa fa-question-circle text-blue"></i></label>
													<div class="col-sm-12 col-md-6">
														<input class="" id="indi{{$data->id}}" type="text" value="{{$data->woreda_value}}" name="value[]">
													</div>
												</div>

												<script type="text/javascript">

													$("input[id='indi{{$data->id}}']").TouchSpin({
														//verticalbuttons: true,
														//verticalupclass: 'fa fa-plus',
														//verticaldownclass: 'fa fa-minus',
														min: 0,
														max: 100000000000000000000000000,
														step: 1,
														decimals: 0,
													});

												</script>
											@endif
											@if($track == 16)
		 									</div>

	 										<div class="col-md-6 col-sm-12">
	 										@endif
	 										@if($track > 15)
	 											<div class="form-group row">
													<label class="col-sm-12 col-md-3 col-form-label text-md-right "  title="{{$data->Indicator->discription}}" data-toggle="tooltip" title="Tooltip on top" aria-hidden="true">{{ $data->Indicator->name }} <i class="icon-copy fa fa-question-circle text-blue"></i></label>
													<div class="col-sm-12 col-md-6">
														<input id="indi{{$data->id}}" type="text" value="{{$data->woreda_value}}" name="value[]">
													</div>
												</div>

												<script type="text/javascript">

													$("input[id='indi{{$data->id}}']").TouchSpin({
														//verticalbuttons: true,
														min: 0,
														max: 100000000000000000000000000,
														step: 1,
														decimals: 0,
													});

												</script>
											@endif
	 										
										
											@endif

										@endforeach
										</div>
									</div>

										<div class="col-xs-12 col-sm-12 col-md-12 text-center">
											<button value="submitWoreda" type="submit" name="submitWoreda" class="btn btn-primary">Submit</button>
										</div>

									</div>
								</form>

							</div>
						</div>
					@endforeach




					</div>
				</div>				
			</div>

		</div>
	</div>
{{-- ======================== end of for woreda ========================================== --}}
@endif

@if(isset($mySubcity))
{{-- ======================== for woreda ========================================== --}}
		<div class="tab">

			<h5> Subcity</h5>

			<div class="clear-fix row">
				<div class="col-md-2 col-sm-12">
					<ul class="nav flex-column vtabs nav-tabs customtab" role="tablist">	

						<li class="nav-item">
							<a class="nav-link text-blue active" data-toggle="tab" href="#t{{ str_replace(' ','_',$userInfo[0]->subcity_name) }}" role="tab" aria-selected="true"> {{ $userInfo[0]->subcity_name }}</a>						
						</li>

					</ul>
				</div>
				<div class="col-md-10 col-sm-12">
					<div class="tab-content">
					@foreach($mySubcity as $key => $ketena)
						@if($key == 0)
						
						<div class="tab-pane fade active show " id="t{{ str_replace(' ','_',$userInfo[0]->subcity_name) }}" role="tabpanel">
						@else
						<div class="tab-pane fade  " id="t{{ str_replace(' ','_',$userInfo[0]->subcity_name) }}" role="tabpanel">
						@endif
							<div class="pd-20">
								<form  action="{{ route('incoder.store','$ketena->id') }}" method="POST" >{{-- class="need-validated" novalidate --}}
								
								{{-- <input type="hidden" name="ketena_id" value="{{ $ketena->id }}"> --}}
								<input type="hidden" name="woreda_id" value="{{ $ketena->id }}">
								
								
												
								
								<div class="bg-blue text-white" style="padding-left: 10px;border-radius: 5px 5px 0px 0px;">
								
									<div class="text-center"><hr><h2 class="h5  text-white">{{ $userInfo[0]->subcity_name }}</h2><hr></div>
									
									<div class="row form-group">
										
										<div class="col-md-6 col-sm-12 ">
											<div class="row form-group">
												<label class="col-sm-12 col-md-3 col-form-label text-md-right text-bold" for="population{{$ketena->id}}"> Population </label>
											
												
												<div class="col-sm-12 col-md-7 col-selfcenter text-md-center">				
													<input class="text-center text-bold" id="population{{$ketena->id}}" type="text" value="{{ $ketena->population }}" name="ketena_population"  required>
												</div>
											</div>
												
											
										</div>
										<div class="col-md-6 col-sm-12 ">
											<div class="row form-group">
												<label class="col-sm-12 col-md-3 col-form-label text-md-right text-bold" for="ketenaaarea{{$ketena->id}}"> Area <small>(Km<sup>2</sup>)</small></label>
												<div class="col-sm-12 col-md-7 col-selfcenter text-md-center">
													<input class="text-center text-bold" id="ketenaaarea{{$ketena->id}}" type="text" value="{{ $ketena->area }}" name="ketena_area"  required>
												
												</div>
											</div>
												
										</div>
										<script type="text/javascript">
											$("input[id='population{{$ketena->id}}']").TouchSpin({
												min: 0,
												max: 100000000000000000000000000,
												step: 1,
												decimals: 0,
											});

										</script>
										<script type="text/javascript">
											$("input[id='ketenaaarea{{$ketena->id}}']").TouchSpin({
												min: 0,
												max: 100000000000000000000000000,
												step: 1,
												decimals: 0,
											});

										</script>
									</div>
									
									<div class="row form-group">
										
										<div class="col-md-6 col-sm-12 ">
											<div class="row form-group">
												<label class="col-sm-12 col-md-3 col-form-label text-md-right text-bold" for="ketenahh{{$ketena->id}}"> HH </label>
											
												
												<div class="col-sm-12 col-md-7 col-selfcenter text-md-center">
													<input class="text-center text-bold" id="ketenahh{{$ketena->id}}" type="text" value="{{ $ketena->hh }}" name="ketena_hh"  required>
												</div>
											</div>
												
											
										</div>
										<div class="col-md-6 col-sm-12 ">
											<div class="row form-group">
												<label class="col-sm-12 col-md-3 col-form-label text-md-right text-bold" for="ketenaadult{{$ketena->id}}"> Adult  <small>(age>=18)</small></label>
												<div class="col-sm-12 col-md-7 col-selfcenter text-md-center">
													<input class="text-center text-bold" id="ketenaadult{{$ketena->id}}" type="text" value="{{ $ketena->adult }}" name="ketena_adult" required>
												
												</div>
											</div>
												
										</div>
										<script type="text/javascript">
											$("input[id='ketenahh{{$ketena->id}}']").TouchSpin({
												min: 0,
												max: 100000000000000000000000000,
												step: 1,
												decimals: 0,
											});

										</script>
										<script type="text/javascript">
											$("input[id='ketenaadult{{$ketena->id}}']").TouchSpin({
												min: 0,
												max: 100000000000000000000000000,
												step: 1,
												decimals: 0,
											});

										</script>
										
									</div>		
								</div>
								<div class="bg-light" style="padding-left: 10px">

									<div class="text-center"><h2 class="h6 ">{{ $ketena->ketana_name }} indicators</h2><hr></div>
									
								
								@php $track = 0; @endphp

								
									@foreach ($subcity_ri as $key => $data) 

			                            @if($data->Subcity->subcity_id === $ketena->subcity_id )
											@php $track++; @endphp
										
											@csrf
											@method('POST')
											<input type="hidden" name="data_id[]" value="{{$data->id}}">

											<input type="hidden" name="data_ketena_id[]" value="{{$data->Subcity->ketena_id}}">
											<input type="hidden" name="data_woreda_id[]" value="{{$data->Subcity->id}}">
											<input type="hidden" name="data_subcity_id[]" value="{{$data->subcity_id}}">

											<input type="hidden" name="my_ketena_id[]" value="{{$ketena->id}}">
											<input type="hidden" name="my_woreda_id[]" value="{{$ketena->id}}">
											<input type="hidden" name="my_subcity_id[]" value="{{$ketena->subcity_id}}">

											<input type="hidden" name="indicator_id[]" value="{{$data->indicator_id}}">
											<input type="hidden" name="indicator_name[]" value="{{$data->Indicator->name}}">

											@if($track == 1)
	 									<div class="row">
	 										<div class="col-md-6 col-sm-12">
	 										@endif
	 										@if( $track <= 15)
	 											<div class="form-group row">
													<label class="col-sm-12 col-md-4 col-form-label text-md-right "  title="{{$data->Indicator->discription}}" data-toggle="tooltip" title="Tooltip on top" aria-hidden="true">{{ $data->Indicator->name }} <i class="icon-copy fa fa-question-circle text-blue"></i></label>
													<div class="col-sm-12 col-md-6">
														<input class="" id="indi{{$data->id}}" type="text" value="{{$data->subcity_value}}" name="value[]">
													</div>
												</div>

												<script type="text/javascript">

													$("input[id='indi{{$data->id}}']").TouchSpin({
														//verticalbuttons: true,
														//verticalupclass: 'fa fa-plus',
														//verticaldownclass: 'fa fa-minus',
														min: 0,
														max: 100000000000000000000000000,
														step: 1,
														decimals: 0,
													});

												</script>
											@endif
											@if($track == 16)
		 									</div>

	 										<div class="col-md-6 col-sm-12">
	 										@endif
	 										@if($track > 15)
	 											<div class="form-group row">
													<label class="col-sm-12 col-md-3 col-form-label text-md-right "  title="{{$data->Indicator->discription}}" data-toggle="tooltip" title="Tooltip on top" aria-hidden="true">{{ $data->Indicator->name }} <i class="icon-copy fa fa-question-circle text-blue"></i></label>
													<div class="col-sm-12 col-md-6">
														<input id="indi{{$data->id}}" type="text" value="{{$data->subcity_value}}" name="value[]">
													</div>
												</div>

												<script type="text/javascript">

													$("input[id='indi{{$data->id}}']").TouchSpin({
														//verticalbuttons: true,
														min: 0,
														max: 100000000000000000000000000,
														step: 1,
														decimals: 0,
													});

												</script>
											@endif
	 										
										
											@endif

										@endforeach
										</div>
									</div>

										<div class="col-xs-12 col-sm-12 col-md-12 text-center">
											<button value="submitSubcity" type="submit" name="submitSubcity" class="btn btn-primary">Submit</button>
										</div>

									</div>
								</form>

							</div>
						</div>
					@endforeach




					</div>
				</div>				
			</div>

		</div>
	</div>
{{-- ======================== end of for woreda ========================================== --}}
@endif
</div>




<!-- bootstrap-touchspin js -->
	<script src="src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="vendors/scripts/advanced-components.js"></script>
@endsection

