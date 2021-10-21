@php
/*if ((auth()->user()->role == 'admin') || (auth()->user()->role == 'admin-subcity') ) {
    header('Location: '.route('admin.index'));
    exit;
}*/

if (auth()->user()->role == 'expert') {
    header('Location: '.route('expert.index'));
    exit;
}
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
*************************  Administrators Dashbord ***********************
************************************************************************ 
*/ --}}


{{-- @include('inc.redirectRole') --}}

@extends('inc.layout')

@section('nave')

  @include('inc.navebar')

@endsection

@section('sidebar')

  @include('inc.sidebar')

@endsection


@section('content')

<div class="">
	<div class="xs-pd-20-10 pd-ltr-20">
		<div class="title pb-20">
			<h2 class="h3 mb-0">Administrator Dashbord</h2>
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
			<div class="col-xl-6 col-lg-6 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<!-- 'adminUsers', 'expertUsers', 'encoderUsers' -->
							<div class="weight-700 font-24 text-dark">{{ $adminUsers->count() + $expertUsers->count() + $encoderUsers->count() + $physicianUsers->count()+ $settingUsers->count() + $gustUsers->count()}}</div>
							<div class="font-14 text-secondary weight-500">Total Users</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#00eccf" style="color: rgb(0, 236, 207);"><i class="icon-copy fa fa-user"></i></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row pb-10">
			<div class="col-xl-2 col-lg-2 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">{{ $adminUsers->count()  }}</div>
							<div class="font-14 text-secondary weight-500">Administrators</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#ff5b5b" style="color: rgb(255, 91, 91);"><span class="icon-copy fa fa-user"></span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">{{ $expertUsers->count() }}</div>
							<div class="font-14 text-secondary weight-500">Experts</div>
						</div>
						<div class="widget-icon">
							<div class="icon"><i class="icon-copy fa fa-user" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">{{$encoderUsers->count() }}</div>
							<div class="font-14 text-secondary weight-500">Incoders</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#09cc06" style="color: rgb(9, 204, 6);"><i class="icon-copy fa fa-user" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">{{$physicianUsers->count() }}</div>
							<div class="font-14 text-secondary weight-500">Physcians</div>
						</div>
						<div class="widget-icon">
							<div class="icon"><i class="icon-copy fa fa-user" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">{{ $settingUsers->count() }}</div>
							<div class="font-14 text-secondary weight-500">Settings</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#09cc06" style="color: rgb(9, 204, 6);"><i class="icon-copy fa fa-user" aria-hidden="true"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-2 col-lg-2 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">{{ $gustUsers->count() }}</div>
							<div class="font-14 text-secondary weight-500">Guests</div>
						</div>
						<div class="widget-icon">
							<div class="icon"><i class="icon-copy fa fa-user" aria-hidden="true"></i></div>
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
				

					<div class="clearfix row">
						<div class="col col-md-10 col-sm-12 pull-left">
							<h4 class="text-blue h4">Users List </h4>
							<p>This list include all users that are registerd.</p>
						</div>
						<div class="col col-md-2 col-sm-12 pull-right">
							<a href="" id="printUser"><span class="icon-copy ti-printer fa-2x"></span></a>
						</div>
					</div>
					
				<div class="pull-right mb-20">
						
						
					</div>
				<div class="table-responsive" id="userDiv">
					<table  id= "usertbl2" class="data-table table table-striped ">
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
								<td>{{$user->assiged_at}}</td>
								<td>{{$user->created_at}}</td>
							</tr>
							@endforeach

							@foreach($expertUsers as $key=>$user)
							<tr>
								<th scope="row">{{$i++}}</th>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->role}}</td>
								<td>{{$user->assiged_at}}</td>
								<td>{{$user->created_at}}</td>
							</tr>
							@endforeach

							@foreach($encoderUsers as $key=>$user)
							<tr>
								<th scope="row">{{$i++}}</th>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->role}}</td>
								<td>{{$user->woreda->woreda_name}}</td>
								<td>{{$user->created_at}}</td>
							</tr>
							@endforeach


							@foreach($physicianUsers as $key=>$user)
							<tr>
								<th scope="row">{{$i++}}</th>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->role}}</td>
								<td>{{$user->ass_hos}}</td>
								<td>{{$user->created_at}}</td>
							</tr>
							@endforeach


							@foreach($settingUsers as $key=>$user)
							<tr>
								<th scope="row">{{$i++}}</th>
								<td>{{$user->name}}</td>
								<td>{{$user->email}}</td>
								<td>{{$user->role}}</td>
								<td>{{$user->assiged_at}}</td>
								<td>{{$user->created_at}}</td>
							</tr>
							@endforeach

							@foreach($gustUsers as $key=>$user)
													
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
				<a data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('admin.create') }}" class="card-box d-block mx-auto pd-20 text-secondary">
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


 <!--***********edit user ************** -->
<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg modal-dialog-centered">
  		<div class="modal-content">
  			<div class="modal-header">
  				<h4 class="modal-title" id="mediumModal">User</h4>
  				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  			</div>
  			<div class="modal-body" id="mediumBody">
  				<div>
  				</div>
  			</div>
  		</div>
  	</div>
</div>
  <!--***********end edit -->


<script>
	  // display a modal (medium modal)
        $(document).on('click', '#mediumButton', function(event) {
          event.preventDefault();
          let href = $(this).attr('data-attr');
          $.ajax({
            url: href,
            beforeSend: function() {
              $('#loader').show();
            },
                // return the result
                success: function(result) {
                  $('#mediumModal').modal("show");
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
	
	  <script type="text/javascript">
        
      $(document).ready(function () {
      $('#usertbl2').DataTable();
      $('.dataTables_length').addClass('bs-select');
      });
    </script>
@endsection
