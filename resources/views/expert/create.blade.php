

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



<form action="{{ route('expert.store') }}" method="POST"  class="needs-validation was-validated is-validated" novalidate>
  @csrf
  <input type="hidden" name="userid" value="{{ Auth::user()->id }}">
  <div class="form-group row">
      <label class="col-sm-12 col-md-2 col-form-label">Name</label>
      <div class="col-sm-12 col-md-10">
          <input class="form-control" type="text" name='name' placeholder="Indicator name" required>
      </div>
  </div>
  <div class="form-group">
    <label>Definition</label>
    <textarea class="form-control" name='discription' required></textarea>
  </div> 
  <div class="form-group row">
    <label class="col-sm-12 col-md-2 col-form-label">Catagory</label>
    <div class="col-sm-12 col-md-10">
        <!-- <input class="form-control" type="text" name='catagory' placeholder="Indicator Catagory"> -->
        <select class="form-control" name="catagory" >
          <option class="form-control" value="community" > Community </option>
          <option class="form-control" value="individual" > Individual </option>
        </select>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</form>