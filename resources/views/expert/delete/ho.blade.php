@gust
<?php redirect('http://www.paypal.com'); ?>
@endgust
@extends('expert.layout')

@section('content')

<!-- Large modal -->
					
						<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h5 class="h4">Indicators yared</h5>
							<a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
								<!-- <img src="vendors/images/modal-img1.jpg" alt="modal"> -->
								<div class="tab">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab" aria-selected="true">Community </a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Setting</a>
									</li>
									<li class="nav-item">
										<a class="nav-link text-blue" data-toggle="tab" href="#contact" role="tab" aria-selected="false">Individual</a>
									</li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane fade show active" id="home" role="tabpanel">
										<div class="pd-20">
											

											 @if ($message = Session::get('success'))
											     <div class="alert alert-success">
											     	<p>{{ $message }}</p>
											     	 </div>
											 @endif

											 <table class="data-table table nowrap">
											 	<thead>
											 		<tr>
											 			<th>Name</th>
											 			<th>Definition</th>
											 			<th class="datatable-nosort">Actions</th>
											 		</tr>
											 	</thead>
											 	<tbody>
											 	 @foreach ($data as $key => $value)
											 	 	<tr>
											 	 		<td>{{ $value->name }}</td>
											 	 		<td>{{ \Str::limit($value->discription, 100) }}</td>
											 	 		<td>
															<div class="table-actions">
																 <!--  <form action="{{ route('posts.destroy',$value->id) }}" method="POST">    -->
                   												 <!-- <a class="btn btn-info" href="{{ route('posts.show',$value->id) }}">Show</a>    
                    										<a class="btn btn-primary" href="{{ route('posts.edit',$value->id) }}">Edit</a> -->   
                   											 @csrf
                    										@method('DELETE')      
                    							<!-- <button type="submit" class="btn btn-danger">Delete</button> --> 
             <!--    </form> -->
									<a href="#" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
									<a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
																</div>
														</td>
													</tr>
												 @endforeach
        							</tbody>
   								 </table> 
   								  <a class="btn btn-success" data-toggle="modal" data-target="#bd-example-modal-lg" href="{{ route('expert.create') }}"> Add New Indicator</a> 
   						 {!! $data->links() !!} 
										</div>
									</div>
							</a>
							<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Indicator</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<table class="data-table table nowrap">
											 	<thead>
											 		<tr>
											 			<th>Name</th>
											 			<th>Definition</th>
											 			<th class="datatable-nosort">Actions</th>
											 		</tr>
											 	</thead>
											 	<tbody>
											 		</tbody>
											 	</table>

										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											<button type="button" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

@endsection