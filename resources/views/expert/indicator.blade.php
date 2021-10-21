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
{{-- @include('inc.redirectRole') --}}


@extends('inc.layout')

@section('nave')
  @include('inc.navebar')
@endsection

@section('sidebar')
  @include('inc.sidebar')
@endsection

@section('content')

<div class="pd-20 card-box mb-30">
  <div class="pd-20 card-box height-100-p">
    <h5 class="h4">Indicators </h5>
    <a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
     <!-- <img src="vendors/images/modal-img1.jpg" alt="modal"> -->
  <!--   <div class="tab">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active text-blue" data-toggle="tab" href="#home" role="tab" aria-selected="true"> Community Level Indicators  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-blue" data-toggle="tab" href="#setInd" role="tab" aria-selected="false">Setting Level Indicators </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-blue" data-toggle="tab" href="#InvidIndi" role="tab" aria-selected="false">Individual Level Indicators </a>
        </li>
      </ul>
      <div class="tab-content">
 ========================================================================= home tab ================================================================================================================ 



<div class="tab-pane fade show active" id="home" role="tabpanel"> -->
            <a class="btn btn-primary" data-toggle="modal" id="mediumButton" data-target="#editModal" data-attr="{{ route('expert.create') }}" style="color:white"><i class="icon-copy dw dw-add-user"></i>New Indicators <i class="icon-copy dw dw-add-user"></i></a> 
{{-- <a class="text-secondary" data-toggle="modal" id="mediumButton" data-target="#editModal" data-attr="{{ route('expert.edit', $indicator->id) }}" title="Edit">
                                <i class="icon-copy dw dw-edit2"></i>
                                </a> --}}

         
            <div class="pull-right">
              <a href="#basic-form1" class="btn btn-secondary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button" type="submit"><i class="icon-copy dw dw-delete-3"></i> Trashed Indicators</a>

    </div>
   
      
    <div class="pd-20">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="icon-copy fa fa-check" aria-hidden="true"></i> Success !</strong> {{ $message }}.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
            @endif
        <table id="indicatorTable" class="data-table table table-striped nowrap">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Discription</th>
                    <th>Catagory</th>
                    <th class="datatable-nosort">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indicators as $key => $indicator)
                @if ($indicator -> status === 1)
              
                <tr>
                    <td>{{ $indicator->name }}</td>
                    <td>{{ \Str::limit($indicator->discription, 100) }}</td>
                    <td>{{ $indicator->catagory }}</td>
                    <td>
                        <div class="table-actions">
                            {{-- <form action="{{ route('softdel',$indicator->id) }}" method="POST"> 
                             <!-- <form action="{{ route('expert.destroy',$indicator->id) }}" method="POST"> -->
                                <!--  <a class="btn btn-info" href="{{ route('expert.show', $indicator->id) }}">Show</a>  --> --}}
                                <a class="btn btn-secondary text-white " data-toggle="modal" id="smallButton" data-target="#showModal" data-attr="{{ route('expert.show',$indicator->id) }}"  title="show"  >
                                <i class="icon-copy ion-arrow-expand"></i>
                                </a>  
                                <a class="btn btn-primary text-white  " data-toggle="modal" id="mediumButton" data-target="#editModal" data-attr="{{ route('expert.edit', $indicator->id) }}" title="Edit">
                                <i class="icon-copy dw dw-edit2"></i>
                                </a>
                                {{-- <input type="hidden" value="{{ $indicator->id }}" name="id">
                                @csrf
                                @method('POST')   --}}
                                <!-- <a href="#" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a> -->
                                <a class="btn btn-outline-danger text-red "  title="delete" data-color="#e95959" data-toggle="modal" data-target="#confirm-trush{{ $indicator->id }}" >
                                  <i class="icon-copy dw dw-delete-3"></i>
                                </a>
                                <div class="modal fade" id="confirm-trush{{ $indicator->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog  modal-md modal-dialog-centered">
                                      <div class="modal-content">
                                          <div class="modal-body text-center ">
                                              <h2 class="h2"><i class="icon-copy fa fa-trash fa-2x" aria-hidden="true"></i></h2>
                                              <h2 class="h3"> <small>Trush {{ $indicator->name }} ?</small></h2>
                                                Do you really want to delete user? 
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-outline-success btn-default" data-dismiss="modal">Cancel</button>
                                              <form action="{{ route('softdel',$indicator->id) }}" method="POST">
                                                @csrf
                                                @method('POST')   
                                                <input type="hidden" value="{{ $indicator->id }}" name="id">
                                                <button type="submit" class="btn btn-outline-danger btn-ok">Delete</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                                {{-- <button type="submit" class="btn btn-danger">Delete</button>
                              
                               
                 
                  
                            </form> --}}
                        </div>
                    </td>
                </tr>
              @endif
                @endforeach
            </tbody>
        </table>
     </div>
    </div>
</div>


<div class="clearfix"></div>
<!------------------Tash ------------------------------------>
<div class="pd-10 card-box mb-10">
  <div class="collapse collapse-box" id="basic-form1" >
    <div class="code-box">
      <div class="clearfix">
         @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <a href="#basic-form1" class="btn btn-primary btn-sm pull-right" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-eye-slash"></i> Hide Trash</a>
      </div>

     
        <div class="form-group row">


          <table class="table table-striped">
            <thead>
              
              <th scope="col">No</th>
              <th scope="col"> Indicator </th>
              <th scope="col"> Definition </th>
            </thead>
        @foreach ($indicators as $key => $indicator)
                @if ($indicator -> status === 0)
                <tr>
                  <td>{{ $indicator->name }}</td>
                    <td>{{ \Str::limit($indicator->discription, 100) }}</td>
                    <td>{{ $indicator->catagory }}</td>
                    <td>
                        <div class="table-actions">
                            {{-- <form action="{{ route('expert.destroy',$indicator->id) }}" method="POST">
                             
                                <input type="hidden" value="{{ $indicator->id }}" name="id">
                               
                                        @csrf
                    @method('DELETE')  --}} 
                    <!-- <button type="submit" class="btn btn-danger">Delete</button> -->

                                <a class="btn btn-danger text-white" title="delete" data-color="#e95959" data-toggle="modal" data-target="#confirm-delet{{ $indicator->id }}">
                                <i class="icon-copy dw dw-delete-3"></i>
                                </a>

                                <div class="modal fade" id="confirm-delet{{ $indicator->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog  modal-sm modal-dialog-centered ">
                                      <div class="modal-content bg-danger">
                                          <div class="modal-body text-center ">
                                              <h2 class="h2"><i class="icon-copy fa fa-trash fa-2x" aria-hidden="true"></i></h2>
                                              <h2 class="h3"> <small>Trush {{ $indicator->name }} ?</small></h2>
                                                Do you really want to delete user? 
                                          </div>
                                          <div class="modal-footer bg-danger">
                                              <button type="button" class="btn btn-success btn-default" data-dismiss="modal">Cancel</button>
                                              <form action="{{ route('expert.destroy',$indicator->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')   
                                                <input type="hidden" value="{{ $indicator->id }}" name="id">
                                                <button type="submit" class="btn btn-primary ">Delete</button>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                                </div>
                             
                               
                 
                   
                           {{--  </form> --}}
                        </div>
                    </td>
@endif
                </tr>

                
@endforeach


            
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ***********edit indicator ************** -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="mediumModal">Indicator - Edit</h4>
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
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="smallModal">Indicator - Detail</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" id="smallBody">
                <div>
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
                  $('#showModal').modal("show");
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
                  $('#editModal').modal("show");
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
  $(document).ready( function () {
    $('#indicatorTable').DataTable();
} );
</script>



      @endsection

