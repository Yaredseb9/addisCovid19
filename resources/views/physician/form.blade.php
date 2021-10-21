{{-- 
@include('inc.redirectRole') --}}
@extends('incoder.layout')

@section('content')

<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<h4 class="text-blue h4">Insert Data for subcity</h4>
						<p class="mb-30">Data/p>
					</div>
					<div class="wizard-content">
						<form class="tab-wizard wizard-circle wizard">
							<h5>Subcity  Info</h5>
							<section>
									<div class="col-md-6">
										<div class="form-group">
											<label>Select Subcity :</label>
											<select class="custom-select form-control">
												<option value="">Select subCity</option>
												<option value="Addisketema">Addis Ketema</option>
												<option value="Kaliti">Akaki Kality</option>
												<option value="Arada">Arada</option>
												<option value="Bole">Bole</option>
												<option value="Gullele">Gullele</option>
												<option value="Kirkos">Kirkos</option>
												<option value="Kolfe">Kolfe Keranio</option>
												<option value="Lemikura">Lemi Kura</option>
												<option value="Lideta">Lideta</option>
												<option value="Nifassilk">Nifas Silk Lafto</option>
												<option value="Yeka">Yeka</option>
											</select>
										</div>
									</div>
									
								
							</section>
							<!-- Step 2 -->
							<h5>Indicators</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										@foreach ($names as $name) 
   

										<div class="form-group">
											<label>{{ $name }}
</label>
											<input type="text" class="form-control">
										</div>
										 @endforeach
									</div>
									
							</section>
							<!-- Step 3 -->
							<h5>Interview</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Interview For :</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Interview Type :</label>
											<select class="form-control">
												<option>Normal</option>
												<option>Difficult</option>
												<option>Hard</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Interview Date :</label>
											<input type="text" class="form-control date-picker" placeholder="Select Date">
										</div>
										<div class="form-group">
											<label>Interview Time :</label>
											<input class="form-control time-picker" placeholder="Select time" type="text">
										</div>
									</div>
								</div>
							</section>
							<!-- Step 4 -->
							<h5>Remark</h5>
							<section>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Behaviour :</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Confidance</label>
											<input type="text" class="form-control">
										</div>
										<div class="form-group">
											<label>Result</label>
											<select class="form-control">
												<option>Select Result</option>
												<option>Selected</option>
												<option>Rejected</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Comments</label>
											<textarea class="form-control"></textarea>
										</div>
									</div>
								</div>
							</section>
						</form>
					</div>
				</div>



@endsection



