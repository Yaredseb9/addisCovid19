
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
            <form action="{{ route('admin.update',$admin->id) }}" method="POST" class="needs-validation was-validated is-validated" novalidate> 
        @csrf
        @method('PUT')
        
                        <div class="form-group row">
                             <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                             <div class="col-sm-12 col-md-10">
                                  <input class="form-control" type="text" name='name' placeholder="" value="{{ $admin->name }}">
                            </div>
                      </div>
                      <div class="form-group row">
                       <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                       <div class="col-sm-12 col-md-10">
                       <input class="form-control" type="text" name= 'mail' value="{{ $admin->email }}">
                 </div> 
             </div>
                 <div class="form-group row">
                       <label class="col-sm-12 col-md-2 col-form-label">Role</label>
                       <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" placeholder="" name = 'role' value="{{ $admin->role }}">
                      </div>
                </div>

                   @if ($admin -> role == "encoder")
                     <div class="form-group row">
                       <label class="col-sm-12 col-md-2 col-form-label">Assigned At</label>
                       <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" placeholder="" name = 'assignedat' value="{{ $admin->woreda->woreda_name }}">
                      </div>
                </div>
                @endif
                   <!--  <div class="form-group row">
                       <label class="col-sm-12 col-md-2 col-form-label">Assigned</label>
                       <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" placeholder="" name = 'ass' value="{{ $admin->assiged_at }}">>
                      </div>
                </div> -->



            
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
           <button type="submit" class="btn btn-primary">Save Changes</button>
     </div>
</form>
