

{{-- @include('inc.redirectRole') --}}

@extends('inc.layout')

@section('nave')

  @include('inc.navebar')

@endsection

@section('sidebar')

  @include('inc.sidebar')

@endsection

@section('content')

<script src="{{ asset('src/plugins/highcharts-6.0.7/code/highcharts.js') }}"></script>

@if ($errors->any())
    <div class="alert alert-danger  alert-dismissible fade show">
        <strong><i class="icon-copy fa fa-cross" aria-hidden="true"></i> Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
    </div>
@endif

@if ($message = Session::get('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong><i class="icon-copy fa fa-check" aria-hidden="true"></i> Success !</strong> {{ $message }}.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
@endif

<div class="card-box row">
  	<div class="  col-md-12 col-sm-12">
  			<h3 class="modal-header"> Subcity review</h3>
  	</div>

  <div class="alert alert-info  alert-dismissible fade show justify-content-md-center col-md-12  text-center">
      <strong><i class="icon-copy fa fa-info" aria-hidden="true"></i> Info!</strong> You Can select subcity that you need to reveiw.<br> Detail Subcity Data is displayed using both graph and table<br>
       
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
  </div>
<div class="col-md-12 col-sm-12">
  <form action="{{ route('subreview.store',1) }}" method="POST"> 
          @csrf
          @method('POST')
  <!-- ================== SUBCYTY DETAIL ====================-->
    <div class="col-sm-12">
        <div class=" col-md-12 col-sm-12 form-group">
        <label for="cityreview">Write Your Review</label>
        <textarea id="cityreview" name="city_review" class="form-controlcol-md-12 col-sm-12 textarea_editor " rows="10" value=""></textarea>
      </div>  
      
    </div>
    <!-- ================== TOGLE SUBCYTY TOP ==================== -->
    <div class="form-group col-12">
      <!-- <label for="exampleSelectRounded0"> Districts Of Addis Ababa</label> -->
      <select class="form-control form-control-lg selectpicker" id="exampleSelectRounded0" name="city_id" required="required" >
        <option value="" selected="selected">Please select Subcity To Review</option>
        @foreach($subcities as $key=>$subcity)
        <option  value="{{ $subcity->id}}"  >{{ str_replace(' ','_',$subcity->subcity_name) }} Districts</option>
        @endforeach
      </select>

    </div>
      <div class="row">
      <div class="col-md-8"></div>
      <div class="col-md-4"><button type="submit" class="form-control btn btn-primary" style="color: white">Post Review</button></div>
      
    </div>
  </form>
</div>

  <!-- ================== TOGLE SUBCYTY TOP ==================== -->

  <!-- ================== A.A. SUBCYTY  ====================-->    
  <!-- ================== A.A. SUBCYTY  ====================-->  
  @foreach($subcities_new as $subkey=>$subcity)  
  <div class="div{{ $subcity->id}} box col-md-12 col-sm-12" >
  <!-- ================== SUBCYTY REVIEW ====================================--> 
    <div class="row ">
      <div class=" col-md-12 col-sm-12">
        <h2>{{ str_replace(' ','_',$subcity->subcity_name) }} Perspective</h2>
        
        <div class="card-tools">
          <hr>
        </div>
        
        {{-- <div class="d-none d-sm-inline-block max-heigh-500px" >
          <p><h3> Population : {{$subcity->population}}   </h3></p>
          @foreach($indicators as $inkey=>$indicator)
            @if($inkey <= 5)
              <p><b> {{ $indicator->name}} :  </b> total {{ \Str::limit($indicator->discription,50)}}</p>
            @elseif($inkey == 6)
            <div class="row justify-content-right">
              <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#moreIndicators" aria-expanded="false" aria-controls="moreIndicators">More</button>
            </div>
              
            @endif
          @endforeach
          <div class="collapse" id="moreIndicators" >
            @foreach($indicators as $inkey=>$indicator)
              @if($inkey >= 6)
                <p><b> {{ $indicator->name}} :  </b> total {{ \Str::limit($indicator->discription,50)}}</p>
              @endif
            @endforeach
          </div>
        </div> --}}
      </div>
     {{--  <div class="col-md-1 col-sm-12"></div> --}}
      <div class="col-md-12 col-sm-12">
        @if($subcity->review != "")
        <?php echo $subcity->review; ?>
        @else

          <p>No Review for Subcity</p>
        @endif
        <hr style="border-width: medium;">

{{-- 
        <div class=" pd-20  mb-30">
          <div id="chart{{ str_replace(' ','_',$subcity->subcity_name) }}"></div>
        </div>

        <script type="text/javascript">

          woreda_ind_value = new Array();
          data_series = new Array();
          woreda= new Array();

          @foreach($woreda_new as $workey=>$woreda)

            @if($subcity->id == $woreda->subcity_id)  
            woreda.push( '{{$woreda->woreda_name}}' );
            @endif

          @endforeach          
              @foreach($indicators as $indkey=>$indicator)
              woreda_ind_value = new Array();
                @foreach($woreda_new as $workey=>$woreda)
        

                  @if($subcity->id == $woreda->subcity_id)
                    @foreach($woreda_ri_new as $rikey=>$woreda_data)

                      @if( ($woreda_data->woreda_id == $woreda->id) && ($indicator->id == $woreda_data->indicator_id) && ($subcity->id == $woreda_data->Woreda->subcity_id))

                        woreda_ind_value.push({{$woreda_data->woreda_value}});

                      @endif
                    @endforeach
                  
                  @endif
                @endforeach
              data_series.push({
                name : '{{$indicator->name}}',
                data : woreda_ind_value
              });
              @endforeach

          Highcharts.chart('chart{{ str_replace(' ','_',$subcity->subcity_name) }}', {
            chart: {
              type: 'column'
            },
            title: {
              text: false
            },
            subtitle: {
              text: 'woreda indicators value comparission'
            },
            xAxis: {
              categories: woreda,
              crosshair: true
            },
            yAxis: {
              min: 0,
              title: {
                text: 'Population count '
              }
            },
            tooltip: {
              headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
              pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
              '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
              footerFormat: '</table>',
              shared: true,
              useHTML: true
            },
            plotOptions: {
              column: {
                pointPadding: 0.2,
                borderWidth: 0
              }
            },

            series: data_series
          });
         
        </script> --}}

    {{-- =====================  test graph ====================== --}}
{{--     <div class="col-lg-12 col-md-12 col-sm-12 mb-30 card-box"> --}}
      
{{--       <div class=" pd-20  mb-30">
        <a class="float-right" data-toggle="collapse" href="#chartKetena{{ str_replace(' ','_',$subcity->subcity_name) }}" role="button" aria-expanded="false" aria-controls="chartKetena{{ str_replace(' ','_',$subcity->subcity_name) }}"><i class="icon-copy fa fa-toggle-down" aria-hidden="true"></i></a>
        <h2 class="mb-30 h4 floatright">Graph</h2> --}}
        <div id="chartKetena{{ str_replace(' ','_',$subcity->subcity_name) }}" class="show"></div>
      

      {{-- ************** SCRIPT FOR GRAPH ************************************************** --}}
      <script type="text/javascript">


       
@php
        $ketena = "";
        foreach($woreda_new as $key=>$ind){
          //dd($ind);
          if($ind->subcity_id == $subcity->id){
            if($ketena == ""){$ketena = array();}

            if( !in_array($ind->woreda_name, $ketena)){
              array_push($ketena, $ind->woreda_name);

              }
            }
          }
          //dd($ketena);

if($ketena != ""){          
       
        $data_inf = array();
        $data_hosp = array();
        $data_death = array();

        foreach($ketena as $ket){
          $inf = 0.0;
          $hosp = 0.0;
          $death = 0.0;
          foreach($woreda_ri_new as $key=>$ind){
            if($ket == $ind->Woreda->woreda_name){
              if($ind->risk_index_infection != 'unavailable'){
                $inf += $ind->risk_index_infection;
              }
              if($ind->risk_index_hospital != 'unavailable'){
                $hosp += $ind->risk_index_hospital;
              }
              if($ind->risk_index_death != 'unavailable'){
                $death += $ind->risk_index_death;
              }
            }
          }
          array_push($data_inf, $inf);
          array_push($data_hosp,$hosp);
          array_push($data_death,$death);

        }
            /*if(ketenas.indexOf('{{$ind->ketana_name}}') === -1){
              ketenas.push('{{$ind->ketana_name}}'); 
            }
            if(indicators.indexOf('{{$ind->indicator_name}}') === -1){
              indicators.push('{{$ind->indicator_name}}'); 
            }                      
*/
          } 
@endphp

        


        
@if($ketena != "")
        Highcharts.chart('chartKetena{{ str_replace(' ','_',$subcity->subcity_name) }}', {
          chart: {
            type: 'column'
          },
          title: {
            text: '{{ $subcity->subcity_name }}'
          },
          subtitle: {
            text: ' Woreda Data Comparission'
          },
          xAxis: {
            categories: [@foreach($ketena as $ket) '{{$ket}}', @endforeach],
            crosshair: true
          },
          yAxis: {
            min: 0,
            title: {
              text: 'Indicator value'
            }
          },
          tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
          },
          plotOptions: {
            column: {
              pointPadding: 0.2,
              borderWidth: 0
            }
          },

          series: [{
            name: 'infection risk index',
            data: [@foreach($data_inf as $ket) {{$ket}}, @endforeach]
          },
          {
            name: 'Hospitalization risk index',
            data: [@foreach($data_hosp as $ket) {{$ket}}, @endforeach]

          },
          {
            name: 'fetality risk index',
            data: [@foreach($data_death as $ket) {{$ket}}, @endforeach]

          }]
        });
@endif
      </script>

{{--     </div> --}}

    {{-- ===================== end of test graph ====================== --}}

      </div>

    </div>
    <!-- ================== END SUBCYTY REVIEW ====================--> 
    <!-- ================== SUBCYTY TABLE ====================--> 

    <div class=" col-md-12 col-sm-12 " style="overflow-x: scroll;">
      <hr>
      <h2>Table</h2>
      <table id="table{{$subcity->id}}" class="table table-striped table-bordered ">

        <thead>
          
          <tr>
            <th>Woreda</th>
            <th>Indicator Name</th>
            <th>Value</th>
            <th>Risk Index Infecion</th>
            <th>Risk Index Hospitalization</th>
            <th>Risk Index Death</th>
          </tr>
        </thead>

        <tbody>

        @foreach($woreda_ri_new as $rikey=>$woreda_data)
          @if($woreda_data->Woreda->subcity_id == $subcity->id)
            <tr>

              <td>{{$woreda_data->Woreda->woreda_name}}</td>
              <td>{{$woreda_data->Indicator->name}}</td>
              <td>{{$woreda_data->woreda_value}}</td>
              <td @if($woreda_data->risk_index_infection == 'unavailable') class="table-secondary"  @endif>
                {{$woreda_data->risk_index_infection}}
              </td>
              <td @if($woreda_data->risk_index_hospital == 'unavailable') class="table-secondary"  @endif>
                {{$woreda_data->risk_index_hospital}}
              </td>
              <td @if($woreda_data->risk_index_death == 'unavailable') class="table-secondary"  @endif>
                {{$woreda_data->risk_index_death}}
              </td>
            </tr>  
          @endif      
        @endforeach

        </tbody>

        <thead>
          <tr>
            <th>Woreda</th>
            <th>Indicator Name</th>
            <th>Value</th>
            <th>Risk Index Infecion</th>
            <th>Risk Index Hospitalization</th>
            <th>Risk Index Death</th>
          </tr>
        </thead>
      </table>
    </div>
    <!-- ================================= END SUBCYTY TABLE =====================================--> 
  </div>
  <!-- =================================== END A.A. SUBCYTY  ======================================-->  
    <script type="text/javascript">
      $(document).ready( function () {
        $('#table{{$subcity->id}}').DataTable();
    } );
    </script>
@endforeach
  
  <!-- right col -->
</div>
<!-- /.row (main row) -->
<!-- <div class="css-1fi4hi4">
  <h4 class="css-jqx6kg">Methods: Constructing the Index</h4>
  <div style="height: 300px; overflow: hidden; transition: all 1s ease 0s; position: relative;">
    <p class="css-fqx5i6">The index covers 756 regions in 48 countries. It is inspired by the US COVID-19 Community Vulnerability Index but has been adjusted based on learnings from the pandemic and Africa-specific factors. The seven themes of vulnerability are based on sub themes using indicators pulled from DHS, IHME, WorldPop, Malaria Atlas, UNHCR, Uppsala Conflict, World Bank, and Facility data. For Epidemiological vulnerability, little subnational data on non-communicable diseases could be found. For Healthcare Systems vulnerability, only limited detailed sub-national data is available on facility capacity and staffing. Nine countries lack vulnerability scores relative to every other region in Africa (South Sudan, Sudan, Somalia, Central African Republic, Libya, Tunisia, Algeria, Botswana, Djibouti) because they lacked recent DHS data. A full description of the methods is available in this <a href="https://covid-static-assets.s3.amazonaws.com/Africa+CCVI+methodology.pdf" target="_blank" style="color: rgb(243, 121, 62);">PDF</a>. <br>Caveats COVID-19 is a new disease, and most of what is known about it is based on data from middle- and high-income countries. Much remains unknown about how the pandemic will unfold in Africa. The index has been constructed using the best available information from Africa and elsewhere on what factors will mediate the impact of the virus. A second caveat to consider is that whereas country-level data is ubiquitous, subnational data is far harder to obtain. For a full discussion of caveats, please see the Methods <a href="https://covid-static-assets.s3.amazonaws.com/Africa+CCVI+methodology.pdf" target="_blank" style="color: rgb(243, 121, 62);">PDF</a>. We are continuously working to improve the index, please see the changelog in the Methods document.</p>
    <div style="position: absolute; bottom: 0px; width: 100%; height: 50px; background: rgba(0, 0, 0, 0) linear-gradient(rgba(255, 255, 255, 0) 0%, rgb(39, 61, 63) 100%) repeat scroll 0% 0%;">
      
    </div>
  </div>
</div>
<div class="css-1fi4hi4">
  <div class="css-1yrmf69"></div>
  <div class="css-1u7szkk">
    <span style="font-family: Libre Franklin; font-weight: bold; font-size: 16px; color: white; cursor: pointer;">
      SEE MORE 
      <span>
        <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIxLjEuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IgoJIHZpZXdCb3g9IjAgMCAxMCA3IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMCA3OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGw6bm9uZTtzdHJva2U6I0ZGRkZGRjtzdHJva2Utd2lkdGg6Mjt9Cjwvc3R5bGU+CjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik05LDFMNSw1TDEsMSIvPgo8L3N2Zz4K" style="margin: 2px 10px;" width="15">
      </span>
    </span>
  </div>
</div> -->

</div><!-- /.container-fluid -->
<!-- /.content-wrapper -->

<!-- Control Sidebar -->

<!-- /.control-sidebar -->

<!-- ./wrapper 
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>-->
<script>
  $(document).ready(function(){
      $("select").change(function(){

          $(this).find("option:selected").each(function(){
              var optionValue = $(this).attr("value");
              
              if(optionValue){
                /*alert($("#hidden_".optionValue).value)
                  $(".wysihtml5-editor").innerHTML = $("#hidden_".optionValue).value;*/
 
                  $(".box").not(".div" + optionValue).hide();
                  $(".boxx").not(".div" + optionValue).hide();
                  $(".div" + optionValue).show();
              } else{
                  $(".box").hide();
               
              }
          });
      }).change(); 
      $(".div10").hide();
  });
 
</script>



@endsection
