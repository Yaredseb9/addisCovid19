
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
    		<a class="btn btn-success" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('admin.create') }}">
    		 <i class="icon-copy dw dw-add-user"></i> Add New user 
    		</a>
    	</div>
    </div>
<!--     <a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg" type="button"> -->
     <!-- <img src="vendors/images/modal-img1.jpg" alt="modal"> -->
    <!-- <div class="tab"> -->
<!--       <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a clss="nav-link active text-blue" data-toggle="tab" href="#home" role="tab" aria-selected="true"> Community Level Indicators  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-blue" data-toggle="tab" href="#setInd" role="tab" aria-selected="false">Setting Level Indicators </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-blue" data-toggle="tab" href="#InvidIndi" role="tab" aria-selected="false">Individual Level Indicators </a>
        </li>
      </ul> -->
     <!--  <div class="tab-content">
        <div class="tab-pane fade show active" id="home" role="tabpanel"> -->
          <div class="pd-20">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
              <p>{{ $message }}</p>
            </div>
            @endif
            <table id= "usertbl" class="data-table table table-striped ">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Mail</th>
               
                  <th class="datatable-nosort">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $key => $user)
               
                <tr>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->role }}</td>
                  <td>{{ $user->email }}</td>
                  
                  <td>
                    <div class="table-actions">
                      <form action="{{ route('admin.destroy',$user->id) }}" method="POST">
                        <!--  <a class="btn btn-info" href="{{ route('expert.show', $user->id) }}">Show</a>  -->
                       <!--   <a class="btn btn-info" href="{{ route('admin.show',$user->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('admin.edit',$user->id) }}">Edit</a> -->

                        <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ route('admin.show',$user->id) }}"  title="show" data-target="#smallModal" >
                          <i class="icon-copy ion-arrow-expand"></i></i>
                        </a>  
                        <a class="text-secondary" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('admin.edit', $user->id) }}" title="Edit">
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
       
  
    </div>
</div></div>

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

  <script type="text/javascript">
        
      $(document).ready(function () {
      $('#usertbl').DataTable();
      $('.dataTables_length').addClass('bs-select');
      });
    </script>



<!-- ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg -->

























@endsection
