@php
if ((auth()->user()->role == 'admin') || (auth()->user()->role == 'admin-subcity') ) {
    header('Location: '.route('admin.index'));
    exit;
}

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
{{-- /*************************************************************************
******************  Administrators User Management ***********************
*************************************************************************/ --}}

{{-- @include('inc.redirectRole') --}}

@extends('inc.layout')

@section('nave')

  @include('inc.navebar')

@endsection

@section('sidebar')

  @include('inc.sidebar')

@endsection


@section('content')


<!-- ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg -->

<div class="pd-20 card-box mb-30">
  <div class="pd-20 card-box height-100-p" style="overflow-y: scroll;">
    <div class="row">
    	<div class="col col-1"><h5 class="h4">Users</h5></div>
    	<div class="col col-7">
    		<a class="btn btn-primary" data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('admin.create') }}" style="color:white">
    		 <i class="icon-copy dw dw-add-user"></i> Add New user 
    		</a>
    	</div>
    

      <div class="pull-right">
              <a href="#basic-form1" class="btn btn-outline-danger scroll-click" rel="content-y"  data-toggle="collapse" role="button" type="submit" title="View users that are deleted"><i class="icon-copy dw dw-delete-3"></i> Trash</a>

    </div>
    </div>

     <!--  <div class="tab-content">
        <div class="tab-pane fade show active" id="home" role="tabpanel"> -->
          <div class="pd-20">
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
            <table id= "usertbl" class="data-table table table-striped ">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Mail</th>
                  <th>Assigned At</th>
               
                  <th class="datatable-nosort">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $key => $user)
                 @if ($user->status === 1)
               
                <tr>
                  <th scope="row">{{$i++}}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->role }}</td>
                  <td>{{ $user->email }}</td>
                  @if ($user->role ==='physcian')
                    <td>{{ $user ->hos_at }}</td> 
                  @elseif ($user ->role === 'encoder')
                    <td> {{ $user->woreda->woreda_name }}</td>
                    {{-- @dd($user) --}}
                  @elseif ($user ->role === 'admin-subcity')
                    {{-- <td> {{ $user->manage }}</td> --}}
                    <td> {{ $user->subcity->subcity_name }}</td>
                    {{-- @dd($user) --}}
                  @else
                    <td>{{ $user->assiged_at }}</td>
                  @endif
                  <td>
                    <div class="table-actions">
                      {{-- <form action="{{ route('softdeladmin',$user->id) }}" method="POST"> --}}
                        <!--  <a class="btn btn-info" href="{{ route('expert.show', $user->id) }}">Show</a>  -->
                       <!--   <a class="btn btn-info" href="{{ route('admin.show',$user->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('admin.edit',$user->id) }}">Edit</a> -->


                        <a class="btn btn-secondary text-white" data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ route('admin.show',$user->id) }}"  title="show" data-target="#smallModal" >
                          <i class="icon-copy ion-arrow-expand"></i></i>
                        </a>
                      @if(
                        ( Auth::User()->role === 'admin' ) || 
                        (( Auth::User()->role === 'admin-subcity' ) && ($user->role === 'encoder') && ($user->woreda->subcity_id === Auth::User()->manage)) ||
                        ( Auth::User()->id === $user->id )
                        )
                       
                      

                        <a class="btn btn-primary text-white " data-toggle="modal" id="mediumButton" data-target="#mediumModal" data-attr="{{ route('admin.edit', $user->id) }}" title="Edit">
                          <i class="icon-copy dw dw-edit2"></i>
                        </a>


                        <a class="btn btn-outline-danger text-red" data-toggle="modal" data-target="#confirm-trush{{ $user->id }}"> <i class="icon-copy dw dw-delete-3"></i></a>

                        <div class="modal fade" id="confirm-trush{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog  modal-sm modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-body text-center ">
                                      <h2 class="h2"><i class="icon-copy fa fa-trash fa-2x" aria-hidden="true"></i></h2>
                                      <h2 class="h3"> <small>Trush {{ $user->name }} ?</small></h2>
                                        Do you really want to delete user? 
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-outline-success btn-default" data-dismiss="modal">Cancel</button>
                                      <form action="{{ route('softdeladmin',$user->id) }}" method="POST">
                                        @csrf
                                        @method('POST')   
                                        <input type="hidden" value="{{ $user->id }}" name="id">
                                        <button type="submit" class="btn btn-outline-danger btn-ok">Delete</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                        </div>
                        @endif


                        <script type="text/javascript">
                         // $('#confirm-delete{{ $user->id }}').on('show.bs.modal', function(e) {
                             // $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
                         // });
                        </script>

                        {{-- <button class=" btn-flat btn-danger btn-sm remove-user" title="Move to trash" data-id="{{ $user->id }}" data-action="{{ route('softdeladmin',$user->id) }}"> <i class="icon-copy dw dw-delete-3"></i></button> --}}
                        {{--  <input type="hidden" value="{{ $user->id }}" name="id"> --}}
                
                      {{-- </form>  --}}
                    </div>
                  </td>
                </tr>

                @endif
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
  				<h4 class="modal-title" >User</h4>
  				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
  			</div>
  			<div class="modal-body" id="mediumBody">

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

        </div>
      </div>
    </div>
  </div>

<!----------------end ----------------------->

 
  
<!------------------Trash Modal ------------------------------------>
<div class="pd-10 card-box mb-10">
 
  <div class="collapse collapse-box" id="basic-form1"  style="overflow-y: scroll;">
    <div class="code-box">
      <div class="clearfix">
        {{--  @if ($message = Session::get('success'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="icon-copy fa fa-check" aria-hidden="true"></i> Success !</strong> {{ $message }}.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
        @endif --}}

        <a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Trash</a>
      </div>

     
        <div class="form-group row">


         <table id= "usertbl" class="data-table table table-striped ">
              <thead>
                <tr class="table-danger">
                  <th colspan="5"> Deleted User Account that can be restored </th>
                </tr>
                  
                <tr>
                                   
                  <th>Name</th>
                  <th>Role</th>
                  <th>Mail</th>
                  <th>Assigned At</th> 
               
                  <th class="datatable-nosort">Actions</th>
                            
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $key => $user)

                  @if( ( Auth::User()->role === 'admin' ) || 
                    (( Auth::User()->role === 'admin-subcity' ) && ($user->role === 'encoder') && ($user->woreda->subcity_id === Auth::User()->manage)) ||
                    ( Auth::User()->id === $user->id ))
                 @if ($user -> status === 0)
               
                <tr>
                  
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->role }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->assiged_at }}</td>
                  
                  <td>
                    <div class="table-actions">

                        <a class="btn btn-danger text-white" data-toggle="modal" data-target="#confirm-delete{{ $user->id }}"> <i class="icon-copy fa fa-user-times" aria-hidden="true"></i>
                        </a>
                        
                        <div class="modal fade" id="confirm-delete{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                          <div class="modal-dialog  modal-sm modal-dialog-centered   ">
                              <div class="modal-content bg-danger text-white">
                                  <div class="modal-body text-center ">
                                      <h2 class="h2 text-white"><i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i></h2>
                                      <h2 class="h3 text-white"> <small>Trush {{ $user->name }} ?</small></h2>

                                        Do you really want to delete user? 
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-success btn-default" data-dismiss="modal">Cancel</button>
                                      <form action="{{ route('admin.destroy',$user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')   
                                        <input type="hidden" value="{{ $user->id }}" name="id">
                                        <button type="submit" class="btn btn-light text-red">Delete</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                        </div>

                        <form action="{{ route('restoreadmin',$user->id) }}" method="POST">
                            <input type="hidden" value="{{ $user->id }}" name="id">
                            @csrf
                            <button  class="btn btn-success " type="submit" title="Restore"  > 
                              <i class="icon-copy ti-reload"></i>
                            </button>
                        </form>
                      
                    </td>
                  
                </tr>
                @endif
              @endif
            @endforeach

            </tbody>
          </table> 
        </div>
      </div>
    </div>
  </div>
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

  <script type="text/javascript">
        
      $(document).ready(function () {
      $('#usertbl').DataTable();
      $('.dataTables_length').addClass('bs-select');
      });
    </script>


  

      <!-- add sweet alert js & css in footer -->
{{--   <script src="{{ asset('src/plugins/sweetalert2/sweetalert2.all.js') }}"></script>
  <script src="{{ asset('src/plugins/sweetalert2/sweet-alert.init.js') }}"></script>

  <script type="text/javascript">
    $("body").on("click",".remove-user",function(){
      var current_object = $(this);
      swal({
          title: "Are you sure?",
          text: "You Can Restore this User account from the trash",
          type: "error",
          showCancelButton: true,
          dangerMode: true,
          cancelButtonClass: '#DD6B55',
          confirmButtonColor: '#dc3545',
          confirmButtonText: 'Delete!',
      },function (result) {
          if (result) {
              var action = current_object.attr('data-action');
              var token = jQuery('meta[name="csrf-token"]').attr('content');
              var id = current_object.attr('data-id');
              $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
              $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
              $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
              $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
              $('body').find('.remove-form').submit();
          }
      });
  });
  </script> --}}
{{-- 
  
  <script type="text/javascript">
   $("body").on("click",".remove-user", function() {
      swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: 'Yes, delete it!'
      }).then(function() {

        swal(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      })
    });
  </script> --}}
<!-- ggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg -->

















@endsection
