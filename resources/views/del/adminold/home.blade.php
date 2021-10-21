
@if(is_null(Auth::user()))
   <script>window.location = "/";</script>
@elseif(Auth::user()->role == 'expert')
  <script>window.location = "/expert";</script>
@elseif(Auth::user()->role == 'encoder')
  <script>window.location = "/encoder";</script>
@else




@extends('layout')

@section('nave')

  @include('inc.navebar')

@endsection

@section('sidebar')

  @include('inc.sidebar')

@endsection


@section('content')


<!-- ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg -->
<div class="pd-20 card-box mb-30">
  <div class="pd-20 card-box height-100-p">
    <div class="row">
    	<div class="col col-1"><h5 class="h4">Users</h5></div>
    	<div class="col col-7">
    		<a class="btn " data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('admin.create') }}">
    		 <i class="icon-copy dw dw-add-user"></i> Add New user 
    		</a>
    	</div>
    </div>
    <a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
     <!-- <img src="vendors/images/modal-img1.jpg" alt="modal"> -->
    <div class="tab">
<!--       <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab" aria-selected="true"> Community Level Indicators  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-blue" data-toggle="tab" href="#setInd" role="tab" aria-selected="false">Setting Level Indicators </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-blue" data-toggle="tab" href="#InvidIndi" role="tab" aria-selected="false">Individual Level Indicators </a>
        </li>
      </ul> -->
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
                  <th>Role</th>
                  <th>Mail</th>
                  <th>Discription</th>
                  <th class="datatable-nosort">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $key => $user)
               
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->role }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ \Str::limit($user->discription, 100) }}</td>
                  <td>
                    <div class="table-actions">
                      <form action="{{ route('admin.destroy',$user->id) }}" method="POST">
                        <!--  <a class="btn btn-info" href="{{ route('expert.show', $user->id) }}">Show</a>  -->
                        <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ route('admin.show',$user->id) }}"  title="show" data-target="#smallModal" >
                          <i class="icon-copy ion-arrow-expand"></i></i>
                        </a>  
                        <a class="text-secondary" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('expert.edit', $user->id) }}" title="Edit">
                          <i class="icon-copy dw dw-edit2"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        <!-- <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a> -->
                        <button type="submit" title="delete" data-color="#e95959" style="border: none;">
                          <i class="icon-copy dw dw-delete-3"></i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
      </table> 
       
      {!! $users->links() !!} 
    </div>
  </div>
</a>

<!-- 
  <!***********edit user ************** -->
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

  <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
     <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="smallModal">User</h4>
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body" id="smallBody">
      <div>

      </div>


    </div></div></div>

  </div>

<!----------------end ----------------------->


    <div class="tab-pane fade " id="setInd" role="tabpanel">
      <div class="pd-20">


       @if ($message = Session::get('success'))
       <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
  <!-- <div class="pull-right">
                <a class="btn btn-success text-light" data-toggle="modal" id="mediumButton" data-target="#mediumModal"
                    data-attr="{{ route('expert.create') }}" title="new Indicator"> <i class="fas fa-plus-circle"></i>
                </a>
              </div> -->
              <table class="data-table table nowrap">
                <thead>
                  <tr> <th> Setting Level Indcators </th> </tr>
                 <tr>
                  <th>Name</th>
                  <th>Discription</th>
                  <th class="datatable-nosort">Actions</th>
                </tr>
              </thead>
              <tbody>
               @foreach ($users as $key => $user)
               <tr>
                <td>{{ $user->name }}</td>
                <td>{{ \Str::limit($user->discription, 100) }}</td>
                <td>
                 <div class="table-actions">


                  <form action="{{ route('expert.destroy',$user->id) }}" method="POST">

                    <!--  <a class="btn btn-info" href="{{ route('expert.show', $user->id) }}">Show</a>  -->
                    <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ route('expert.show',$user->id) }}"  title="show" data-target="#smallModal" >
                     <i class="icon-copy ion-arrow-expand"></i></i>
                   </a>  

                   <a class="text-secondary" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('expert.edit', $user->id) }}" title="Edit">
                    <i class="icon-copy dw dw-edit2"></i>
                  </a>
                  @csrf
                  @method('DELETE')
                  <!-- <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a> -->
                  <button type="submit" title="delete" data-color="#e95959" style="border: none;">
                    <i class="icon-copy dw dw-delete-3"></i>
                  </button>

                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table> 
      <a class="btn btn-success" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('expert.create') }}"> Add New Indicators</a> 
      {!! $users->links() !!} 
    </div>
  </div>
</a>

<!-- 
  <!***********edit indicator ************** -->
  <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
     <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="mediumModal">Indicator</h4>
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body" id="mediumBody">
      <div>

      </div>


    </div></div></div>

  </div>

  <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
     <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="smallModal">Indicator</h4>
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body" id="smallBody">
      <div>

      </div>


    </div></div></div>

  </div>

 <!-----------------------end------------------------->
 <div class="tab-pane fade " id="InvidIndi" role="tabpanel">
      <div class="pd-20">


       @if ($message = Session::get('success'))
       <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>
      @endif
  <!-- <div class="pull-right">
                <a class="btn btn-success text-light" data-toggle="modal" id="mediumButton" data-target="#mediumModal"
                    data-attr="{{ route('expert.create') }}" title="new Indicator"> <i class="fas fa-plus-circle"></i>
                </a>
              </div> -->
              <table class="data-table table nowrap">
                <thead>
                  <tr> <th> Individual Level Indcators </th> </tr>
                 <tr>
                  <th>Name</th>
                  <th>Discription</th>
                  <th class="datatable-nosort">Actions</th>
                </tr>
              </thead>
              <tbody>
               @foreach ($users as $key => $indi)
               <tr>
                <td>{{ $indi->name }}</td>
                <td>{{ \Str::limit($indi->discription, 100) }}</td>
                <td>
                 <div class="table-actions">


                  <form action="{{ route('indi.destroy',$indi->id) }}" method="POST">

                    <!--  <a class="btn btn-info" href="{{ route('expert.show', $user->id) }}">Show</a>  -->
                    <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ route('indi.show',$indi->id) }}"  title="show" data-target="#smallModal" >
                     <i class="icon-copy ion-arrow-expand"></i></i>
                   </a>  

                   <a class="text-secondary" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('indi.edit', $indi->id) }}" title="Edit">
                    <i class="icon-copy dw dw-edit2"></i>
                  </a>
                  @csrf
                  @method('DELETE')
                  <!-- <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a> -->
                  <button type="submit" title="delete" data-color="#e95959" style="border: none;">
                    <i class="icon-copy dw dw-delete-3"></i>
                  </button>

                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table> 
      <a class="btn btn-success" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('indi.create') }}"> Add New Indicators</a> 
      {!! $users->links() !!} 
    </div>
  </div>
</a>

<!-- 
  <!***********edit indicator ************** -->
  <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
     <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="mediumModal">Indicator</h4>
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body" id="mediumBody">
      <div>

      </div>


    </div></div></div>

  </div></div>

  <div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
     <div class="modal-content">
      <div class="modal-header">
       <h4 class="modal-title" id="smallModal">Indicator</h4>
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
     </div>
     <div class="modal-body" id="smallBody">
      <div>

      </div>


    </div></div></div>

  </div>

</div></a>
</div>










<script>
        // display a modal (small modal)
        $(document).on('click', '#smallButton', function(event) {
          event.preventDefault();
          let href = $(this).attr('data-attr');
          $.ajax({
            url: href,
            beforeSend: function() {
              $('#loader').show();
            },
                // return the result
                success: function(result) {
                  $('#smallModal').modal("show");
                  $('#smallBody').html(result).show();
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





<!-- ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg -->

























@endsection
@endif