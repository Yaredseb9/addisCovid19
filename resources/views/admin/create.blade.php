

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



<form id="userCreateForm" action="{{ route('admin.store') }}" method="POST" class="needs-validation  was-validated" novalidate>
    @csrf
    <div class="form-group row">
     <label class="col-sm-12 col-md-2 col-form-label">Name</label>
     <div class="col-sm-12 col-md-10">
      <input class="form-control" type="text" name='name' id="name" placeholder=" name" required="required">
  </div>
</div>
<div class="form-group row">
   <label class="col-sm-12 col-md-2 col-form-label">email</label>
   <div class="col-sm-12 col-md-10">
    <input class="form-control" type="mail" name='email' id="name" placeholder="Email" required="required" >
</div>
</div>
<div class="form-group row">
    <label class="col-sm-12 col-md-2 col-form-label">Role</label>
    <div class="col-sm-12 col-md-10">
     <select class="form-control" name="role" id="role" required="required">
      
      @if( ( Auth::User()->role === 'admin-subcity' ) )
        <option value="encoder">Encoder</option>
      @elseif(  ( Auth::User()->role === 'admin-office' ))

      @elseif( (Auth::User()->role === 'admin'))

      <option value="encoder">Encoder</option>
      <option value="expert">Expert</option>
      <option value="physcian">Physician</option>
      <option value="setting">Office</option>
      <option value="guest">Guest</option>
      <option value="admin"> Admin </option>
      <option value="admin-subcity"> Subcity Admin </option>
      @endif



  </select>
</div>	</div>



<div class="form-group row" id="subdiv">

    <label class="col-sm-12 col-md-2 col-form-label">Subcity</label>
    <div class="col-sm-12 col-md-10">
     <select class="form-control" name="sub" id="sub" required="required">
      <option></option>
        @foreach($subcities as $subkey=>$subcity) 

          @if( ( Auth::User()->role === "admin-subcity" ) && ( Auth::User()->manage == $subcity->id ) ) 
            <option  value="{{ str_replace(' ','_',$subcity->id) }}" >{{ str_replace(' ','_',$subcity->subcity_name) }} Subcity</option>
          @elseif( ( Auth::User()->role === "admin" ) ) 
            <option  value="{{ str_replace(' ','_',$subcity->id) }}"  >{{ str_replace(' ','_',$subcity->subcity_name) }} Subcity</option>
          @endif
        @endforeach
    </select>
  </div> 
</div>

<div id="wordiv">
   @foreach($subcities as $subkey=>$subcity)  
   <div class="{{ str_replace(' ','_',$subcity->id) }} box" id='word'>
    <div class="form-group row" >
        <label class="col-sm-12 col-md-2 col-form-label">Woreda</label>
        <div class="col-sm-12 col-md-10">
         <select class="form-control" name="wor" id="wor" >
           @foreach($woredas as $woredakey=>$woreda)
           @if($woreda->subcity_id == $subcity->id)


              <option value="{{ $woreda->id }}"> {{ $woreda->woreda_name }}</option>

           @endif
           @endforeach   


       </select>
   </div> </div>
</div>@endforeach

</div>

<div class="form-group row" id="hosdiv">
    <label class="col-sm-12 col-md-2 col-form-label">Helath center Name</label>
    <div class="col-sm-12 col-md-10">
        <select class="form-control" name='hos' id='hos'>
           <!--  <option>test</option> -->
            @foreach($heltcent as $helkey => $hc)
            <option value="{{ $hc->id }}">{{ $hc->hospital_name }} </option>
        @endforeach 
    </select>
    </div> </div>
<div class="form-group row" id="offdiv">
        <label class="col-sm-12 col-md-2 col-form-label">Oficce  Name</label>
        <div class="col-sm-12 col-md-10">
            <input class="form-control" type="text" name='hos' placeholder="The name of he office">
        </div> </div>


    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
       <button type="submit" class="btn btn-primary">Save</button>
   </div>
</form>


<script>
    $(document).ready(function(){
       //$(".box").hide();
        //$('#word').hide();
      $("select").change(function(){
        //$(".box").hide();
        $(this).find("option:selected").each(function(){
          var optionValue = $("#sub").find("option:selected").attr("value");
          if(optionValue && ($("#role").val() != "admin-subcity")){

            $(".box").not("." + optionValue).hide();
            $(".boxx").not("." + optionValue).hide();
            $("." + optionValue).show();
        } else{
            $(".box").hide();

        }
    });
    }).change();
     
  });
  jQuery(document).ready(function() {
  $('#word').hide();
});
</script>
<script>
    $("#role").change(function() {
      if ($(this).val() == "encoder") {
        $('#subdiv').show();
        $('#word').show();
    }
    else if  ($(this).val() == "admin-subcity") {
        $('#subdiv').show();
    }
    else {
        $('#subdiv').hide();
        $('#word').hide();


    }
});


    $("#role").change(function() {
      if ($(this).val() == "physcian") {
        $('#hosdiv').show();

        $('#hos').attr('required', '');
        $('#hos').attr('data-error', 'This field is required.');

    } else {
        $('#hosdiv').hide();

        $('#hos').removeAttr('required');
        $('#hos').removeAttr('data-error');

    }
});
    $("#role").trigger("change");

    $("#role").change(function() {
      if ($(this).val() == "office") {
        $('#offdiv').show();

        $('#office').attr('required', '');
        $('#office').attr('data-error', 'This field is required.');

    } else {
        $('#offdiv').hide();

        $('#office').removeAttr('required');
        $('#office').removeAttr('data-error');

    }
});
    $("#role").trigger("change");



</script>

