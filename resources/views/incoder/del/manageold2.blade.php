@extends('incoder.layout')

@section('content')

<!-- Default Basic Forms Start -->
<div class="pd-20 card-box mb-30">
	<div class="clearfix">
		<div class="pull-left">
			<h4 class="text-blue h4">Subcity Level Information</h4>
			<p class="mb-30">All subcitites</p>
		</div>
		<div class="pull-right">
			<a href="#basic-form1" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> View Indicator definition</a>
		</div>

	</div>
	<form action="{{ route('incoder.update',$incoder->id) }}}" method="POST">
    @csrf
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Sub city</label>
			<div class="col-sm-12 col-md-10">
				<select class="custom-select col-12" id="mysel" onchange="run()">
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
		@foreach ($data as $key => $value) 
		 <div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">Subcity</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" id ="mytxt" name = "mytxt"  />
			</div>
		</div> 
		<div class="form-group row">
			<label class="col-sm-12 col-md-2 col-form-label">{{ $value->name }}</label>
			<div class="col-sm-12 col-md-10">
				<input class="form-control" type="text" name = "{{ $value->name }}" placeholder=" ">
			</div>
		</div>
		@endforeach
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>



	</form>
</div>
<div class="pd-20 card-box mb-30">
	<div class="collapse collapse-box" id="basic-form1" >
		<div class="code-box">
			<div class="clearfix">

				<a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Definition</a>
			</div>

			<form>
				<div class="form-group row">


					<table class="table table-striped">
						<thead><tr>
							
							<th scope="col">No</th>
							<th scope="col"> Indicator </th>
							<th scope="col"> Definition </th></tr>
						</thead>
						@foreach ($data as $key => $value) 
						<tr>
							<th scope="row" >{{ ++$i }}</td>
								<td >{{ $value -> name }}</td>
								<td> {{ $value -> discription }} </td>
							</tr>
							@endforeach




						</div>
						<!-- Default Basic Forms End -->
@endsection

<script>
	/*function fillme(){
var select = document.getElementById('mysel');
var input = document.getElementById('mytxt');
select.onchange = function() {
    input.value = select.value;
}
}*/
function run() {
        document.getElementById("mytxt").value = document.getElementById("mysel").value;
    }
</script>