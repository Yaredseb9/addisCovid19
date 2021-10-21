
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
	<div class="xs-pd-20-10 pd-ltr-20">
		
		<div class="title pb-20">
			<h2 class="h3 mb-0">Administrator Dashbord</h2>
		</div>
		<div class="row pb-10">
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<!-- 'adminUsers', 'expertUsers', 'encoderUsers' -->
							<div class="weight-700 font-24 text-dark">{{ $adminUsers->count() + $expertUsers->count() + $encoderUsers->count() }}</div>
							<div class="font-14 text-secondary weight-500">Total Users</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#00eccf" style="color: rgb(0, 236, 207);"><i class="icon-copy fa fa-user"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">{{ $adminUsers->count()  }}</div>
							<div class="font-14 text-secondary weight-500">Administrator Users</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#ff5b5b" style="color: rgb(255, 91, 91);"><span class="icon-copy fa fa-user"></span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">{{ $expertUsers->count() }}</div>
							<div class="font-14 text-secondary weight-500">Expert Users</div>
						</div>
						<div class="widget-icon">
							<div class="icon"><i class="icon-copy fa fa-user" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">{{$encoderUsers->count() }}</div>
							<div class="font-14 text-secondary weight-500">Incoder Users</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#09cc06" style="color: rgb(9, 204, 6);"><i class="icon-copy fa fa-user" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
<!-- 		<div class="title pb-20 pt-20">
			<h2 class="h3 mb-0">Quick Start</h2>
		</div> -->
		<div class="row">
			<div class="col-md-8 mb-20 pd-20 card-box">
				<div class="clearfix mb-20">
					<div class="pull-left">
						<h4 class="text-blue h4">Users List</h4>
						<p>This list include all users that are registerd.</p>
					</div>
				</div>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Name</th>
								<th scope="col">Email</th>
								<th scope="col">Role</th>
								<th scope="col">Assigned At </th>
								<th scope="col">Registration Date</th>
							</tr>
						</thead>
						<tbody>

							@foreach($adminUsers as $key=>$user)
							<tr>
								<th scope="row">{{$i++}}</th>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->role}}</td>
								<td>User Admin</td>
								<td>{{$user->created_at}}</td>
							</tr>
							@endforeach

							@foreach($expertUsers as $key=>$user)
							<tr>
								<th scope="row">{{$i++}}</th>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->role}}</td>
								<td>Indicator & Review</td>
								<td>{{$user->created_at}}</td>
							</tr>
							@endforeach

							@foreach($encoderUsers as $key=>$user)
							<tr>
								<th scope="row">{{$i++}}</th>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->role}}</td>
								<td>{{$user->assiged_at}}</td>
								<td>{{$user->created_at}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>

			</div>
			<div class="col-md-4 mb-20">
				<a href="#" class="card-box d-block mx-auto pd-20 text-secondary">
					<div class="img pb-30">
						<img src="/imgs/user-add.svg" alt="">
					</div>
					<div class="content">
						<h3 class="h4">Add Users</h3>
						<p class="max-width-200 ">You can manage users here</p>
					</div>
				</a>
			</div>
		</div>	
	</div>
</div>

	
@endsection
