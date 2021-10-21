
@extends('layout')

@section('nave')

  @include('inc.navebar')

@endsection

@section('sidebar')

  @include('inc.sidebar')

@endsection

@section('content')
<div class="xs-pd-20-10 pd-ltr-20">

	<div class="title pb-20">
		<h2 class="h3 mb-0"> Overview</h2>
	</div>

	<div class="row pb-10">
		<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
			<div class="card-box height-100-p widget-style3">
				<div class="d-flex flex-wrap">
					<div class="widget-data">
						<div class="weight-700 font-24 text-dark">75</div>
						<div class="font-14 text-secondary weight-500">Total Community Indicators</div>
					</div>
					<div class="widget-icon">
						<div class="icon" data-color="#00eccf"><i class="icon-copy dw dw-calendar1"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
			<div class="card-box height-100-p widget-style3">
				<div class="d-flex flex-wrap">
					<div class="widget-data">
						<div class="weight-700 font-24 text-dark">124</div>
						<div class="font-14 text-secondary weight-500">Total Individual Indicators</div>
					</div>
					<div class="widget-icon">
						<div class="icon" data-color="#ff5b5b"><span class="icon-copy ti-heart"></span></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
			<div class="card-box height-100-p widget-style3">
				<div class="d-flex flex-wrap">
					<div class="widget-data">
						<div class="weight-700 font-24 text-dark">40+</div>
						<div class="font-14 text-secondary weight-500">Total Setting Indicators</div>
					</div>
					<div class="widget-icon">
						<div class="icon"><i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
			<div class="card-box height-100-p widget-style3">
				<div class="d-flex flex-wrap">
					<div class="widget-data">
						<div class="weight-700 font-24 text-dark">50</div>
						<div class="font-14 text-secondary weight-500">Total Advcies</div>
					</div>
					<div class="widget-icon">
						<div class="icon" data-color="#09cc06"><i class="icon-copy fa fa-money" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
			<div class="pd-20 card-box height-100-p">
				<h5 class="h4">Indicators yared </h5>
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
        <!--<form action="{{ route('posts.destroy',$value->id) }}" method="POST">    -->

                            - <a class="btn btn-info" href="{{ route('posts.show',$value->id) }}">Show</a>    
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
                                                <a class="btn" data-toggle="modal" data-target="#bd-example-modal-lg" href=""> Add New Indicator</a> 
                                               <i class="icon-copy dw dw-add-user"></i> {!! $data->links() !!} 
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
                                                 @if ($errors->any())
                                                 <div class="alert alert-danger">
                                                      <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                      <ul>
                                                           @foreach ($errors->all() as $error)
                                                           <li>{{ $error }}</li>
                                                           @endforeach
                                                     </ul>
                                               </div>
                                               @endif
                                               <form action="{{ route('expert.store') }}" method="POST">
                                                @csrf
                                                <div class="form-group row">
                                                     <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                                                     <div class="col-sm-12 col-md-10">
                                                          <input class="form-control" name ="name" type="text" placeholder="Indicator name">
                                                    </div>
                                              </div>
                                              <div class="form-group">
                                               <label>Definition</label>
                                               <textarea name ="discription" class="form-control"></textarea>
                                         </div>	
                                         <div class="form-group row">
                                               <label class="col-sm-12 col-md-2 col-form-label">Catagory</label>
                                               <div class="col-sm-12 col-md-10">
                                                    <input name= "catagory" class="form-control" type="text" placeholder="Indicator Catagory">
                                              </div>
                                        </div>



                                        <div class="form-group row">
                                         <label class="col-sm-12 col-md-2 col-form-label">Input Range</label>
                                         <div class="col-sm-12 col-md-10">
                                              <input class="form-control" value="50" type="range">
                                        </div>
                                  </div>
                                  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                             </div>
                       </form>

                 </div>

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
</div>

<div class="col-lg-6 col-md-12 col-sm-12 mb-30">
  <div class="pd-20 card-box">
       <h5 class="h4 text-blue mb-20">Advices</h5>
       <div class="tab">
            <ul class="nav nav-tabs customtab" role="tablist">
                 <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#home2" role="tab" aria-selected="true">Community</a>
                </li>
                <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#profile2" role="tab" aria-selected="false">Setting</a>
                </li>
                <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#contact2" role="tab" aria-selected="false">Individual</a>
                </li>
          </ul>
          <div class="tab-content">
           <div class="tab-pane fade show active" id="home2" role="tabpanel">
                <div class="pd-20">
                     LCommunity advices goes here
               </div>
         </div>
         <div class="tab-pane fade" id="profile2" role="tabpanel">
          <div class="pd-20">
               setting advices goes here
         </div>
   </div>
   <div class="tab-pane fade" id="contact2" role="tabpanel">
    <div class="pd-20">
         Individual advics
   </div>
</div>
</div>
</div>
</div>
</div>


@endsection
