
    <div class="row mx-auto">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $expert->name }}
            </div>
        </div>
<!--         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>mail:</strong>
                {{ $expert->email }}
            </div>
        </div> -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Discription:</strong>
                {{ $expert->discription }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Catagory:</strong>
                {{ $expert->catagory }}
            </div>
        </div>
        @if($expert->catagory == null )
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Catagory:</strong>
                {{ $expert->catagory }}
            </div>
        </div>
        @endif
        
    </div>
  </div>
 
