
    <div class="row mx-auto">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $admin->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $admin->email }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Role:</strong>
                {{ $admin->role }}
            </div>
        </div>
        @if ($admin -> role == "encoder")
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Encoder At:</strong>
                {{ $admin->woreda->woreda_name }}
            </div>
        </div>
        @endif
                         
        @if ($admin -> role == "physcian")
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Physician At:</strong>
                {{ $admin->ass_hos }}
            </div>
        </div>
        @endif
        <!-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Assigned:</strong>
                {{ $admin->assiged_at }}
            </div>
        </div> -->
       
    </div>
  </div>
 
