

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



<form action="{{ route('admin.store') }}" method="POST">
                        @csrf
                        <div class="form-group row">
                             <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                             <div class="col-sm-12 col-md-10">
                                  <input class="form-control" type="text" name='name' placeholder=" name">
                            </div>
                      </div>
                      <div class="form-group">
                       <label>Role</label>
                       <textarea class="form-control" name='role'></textarea>
                 </div>	
                 <div class="form-group row">
                       <label class="col-sm-12 col-md-2 col-form-label">email</label>
                       <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name='email' placeholder="Email">
                      </div>
                </div>

                <!-- <div class="form-group row">
                 <label class="col-sm-12 col-md-2 col-form-label">Input Range</label>
                 <div class="col-sm-12 col-md-10">
                      <input class="form-control" value="50" type="range">
                </div> -->
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
           <button type="submit" class="btn btn-primary">Save</button>
     </div>
   </form>