
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
            <form action="{{ route('indi.update',$indi->id) }}" method="POST"> 
        @csrf
        @method('PUT')
        
                        <div class="form-group row">
                             <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                             <div class="col-sm-12 col-md-10">
                                  <input class="form-control" type="text" name='name' placeholder="" value="{{ $indi->name }}">
                            </div>
                      </div>
                      <div class="form-group">
                       <label>Definition</label>
                       <textarea class="form-control" name= 'discription'>{{ $indi->discription }}</textarea>
                 </div> 
                 <div class="form-group row">
                       <label class="col-sm-12 col-md-2 col-form-label">Catagory</label>
                       <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" placeholder="" name = 'catagory' value="{{ $indi->catagory }}">>
                      </div>
                </div>



                <div class="form-group row">
                 <label class="col-sm-12 col-md-2 col-form-label">Input Range</label>
                 <div class="col-sm-12 col-md-10">
                      <input class="form-control" value="50" type="range">
                </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
           <button type="submit" class="btn btn-primary">Save Changes</button>
     </div>
</form>
