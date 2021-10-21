{{-- ************************************************************************************************ --}}
{{-- **************************** OFFICEALS DASHBORD  *********************************************** --}}
{{-- ************************************************************************************************ --}}
{{-- 
@include('inc.redirectRole') --}}

@extends('inc/layout')

@section('nave')

  @include('inc.navebar')

@endsection

@section('sidebar')

  @include('inc.sidebar')

@endsection

@section('content')



{{-- ************************************************************************************************ --}}
{{-- ************* DASHBORD CONTENT BASED ON SIDE NAVE SELECTION  *********************************** --}}
{{-- ************************************************************************************************ --}}


{{-- ************************************************************************************************ --}}
{{-- ************  CONTENT RETRIVED FROM DB BASED ON WOREDA SELECTION  ****************************** --}}
{{-- ************************************************************************************************ --}}

	@if(isset($indicatorsData))
		<style type="text/css">
    .highcharts-credits{display: none;}  
    </style>
  <script src="{{ asset('src/plugins/highcharts-6.0.7/code/highcharts.js') }}"></script>
  <script src="{{ asset('src/plugins/apexcharts/apexcharts.min.js') }}"></script>

  <div class="col-lg-12 col-md-12 col-sm-12 mb-30 card-box">
    <div class=" pd-20  mb-30">
      <a class="float-right" data-toggle="collapse" href="#dataTabel" role="button" aria-expanded="false" aria-controls="dataTabel"><i class="icon-copy fa fa-toggle-down" aria-hidden="true"></i></a>
      <h2 class="mb-30 h4 floatright">Within {{ $selected[0]->subcity_name }} - {{ $selected[0]->woreda_name }} Ketena data table</h2> 
    
    </div>
    

    <div class="table-responsive show" id="dataTabel">
      <table id="tableKetenaData" class="table table-striped  table-bordered data-table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Ketena name</th>
            <th scope="col">Indicator </th>
            <th scope="col">Infection ri</th>
            <th scope="col">Hospitalization ri</th>
            <th scope="col">Fatality ri</th>
          </tr>
        </thead>
        <tbody>
          @if($indicatorsData->count() == 0)
          @else
            @foreach($indicatorsData as $key=>$ind)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{ $ind->Ketena->ketana_name }}</td>
              <td>{{ $ind->Indicator->name }}</td>
              <td>{{ $ind->risk_index_infection }}</td>
              <td>{{ $ind->risk_index_hospital }}</td>
              <td>{{ $ind->risk_index_death }}</td>
              {{-- 
              <td>{{ $ind->indicator_name }}</td>
              <td>{{ $ind->value }}</td> --}}
            </tr>
            @endforeach
          @endif

        </tbody>
      </table>
      <br>
    </div>

</div>
    <!-- End of data table -->

    <script type="text/javascript">
      $(document).ready( function () {
        $('#tableKetenaData').DataTable();
    } );
    </script>
    <!-- data graph -->

    <div class="col-lg-12 col-md-12 col-sm-12 mb-30 card-box">
      
      <div class=" pd-20  mb-30">
        <a class="float-right" data-toggle="collapse" href="#chartKetena" role="button" aria-expanded="false" aria-controls="chartKetena"><i class="icon-copy fa fa-toggle-down" aria-hidden="true"></i></a>
        <h2 class="mb-30 h4 floatright">Graph</h2> 
        <div id="chartKetena" class="show"></div>
      </div>
 @if($indicatorsData->count() == 0)
 @else
      {{-- ************** SCRIPT FOR GRAPH ************************************************** --}}
      <script type="text/javascript">


       
@php
        $ketena = "";
        foreach($indicatorsData as $key=>$ind){

          if($ketena == ""){$ketena = array();}

          if( !in_array($ind->Ketena->ketana_name, $ketena)){
            array_push($ketena, $ind->Ketena->ketana_name);

          }
        }
       
        $data_inf = array();
        $data_hosp = array();
        $data_death = array();

        foreach($ketena as $ket){
          $inf = 0.0;
          $hosp = 0.0;
          $death = 0.0;
          foreach($indicatorsData as $key=>$ind){
            if($ket == $ind->Ketena->ketana_name){
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
@endphp

        


        

        Highcharts.chart('chartKetena', {
          chart: {
            type: 'column'
          },
          title: {
            text: '{{ $selected[0]->woreda_name }}'
          },
          subtitle: {
            text: ' ketena Data Comparission'
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
      </script>
@endif
    </div>
    <!-- end of data graph -->


{{-- ************************************************************************************************ --}}
{{-- ***************  CONTENT IF NO WOREDA IS SELECTED  ********************************************* --}}
{{-- ************************************************************************************************ --}}
    @else
    <div class="pd-ltr-20">
      <div class="card-box pd-20 height-100-p mb-30">
        <div class="row align-items-center">
          <div class="col-md-4">
            <img src="vendors/images/banner-img.png" alt="">
          </div>
          <div class="col-md-8">
            <h4 class="font-20 weight-500 mb-10 text-capitalize">
              Welcome back <div class="weight-600 font-30 text-blue">{{ Auth::user()->name }}!</div>
            </h4>
            <p class="font-18 max-width-600">This privelage is given to you to view collected data at ketena level. You can select woreda level to see woreda level detail data. </p>
          </div>
        </div>
      </div>
    </div>

      <div class="row clearfix progress-box">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
          <div class="card-box pd-30 height-100-p">
            <div class="progress-box text-center">
               <input type="text" class="knob total" value="60" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#1b00ff" data-angleOffset="180" readonly>
              <h5 class="text-blue padding-top-10 h5">Total Data</h5>
              <span class="d-block">{{ round($noAllData, 2) }}  Data in Addis Ababa. <i class="fa fa-line-chart text-blue"></i></span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
          <div class="card-box pd-30 height-100-p">
            <div class="progress-box text-center">
               <input type="text" class="knob encoded" value="70" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#00e091" data-angleOffset="180" readonly>
              <h5 class="text-light-green padding-top-10 h5">Encoded Data</h5>
              <span class="d-block">{{ round(((($indicatorsDataEncoded ) / ($indicatorsDataEncoded + $indicatorsDataNotEncoded)) * 100), 2) }}% Data Collected <i class="fa text-light-green fa-line-chart"></i></span>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
          <div class="card-box pd-30 height-100-p">
            <div class="progress-box text-center">
               <input type="text" class="knob notEncoded" value="90" data-width="120" data-height="120" data-linecap="round" data-thickness="0.12" data-bgColor="#fff" data-fgColor="#ffc107" data-angleOffset="180" readonly>
              <h5 class=" padding-top-10 h5" style="color:#ffc107">Data Not Encoded</h5>
              <span class="d-block">{{ round(((($indicatorsDataNotEncoded ) / ($indicatorsDataEncoded + $indicatorsDataNotEncoded)) * 100), 2) }}% Not Collected <i class="fa  fa-line-chart" style="color:#ffc107"></i></span>
            </div>
          </div>
        </div>
      </div>
      <script src="../src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
      <script type="text/javascript">
        $(".total").knob();
        $({animatedVal: 0}).animate({animatedVal: {{ round($noAllData, 2) }} }, {
          duration: 3000,
          easing: "swing",
          step: function() {
            $(".total").val(Math.ceil(this.animatedVal)).trigger("change");
          }
        });
        $(".encoded").knob();
        $({animatedVal: 0}).animate({animatedVal: {{ round(((($indicatorsDataEncoded ) / ($indicatorsDataEncoded + $indicatorsDataNotEncoded)) * 100), 2) }} }, {
          duration: 3000,
          easing: "swing",
          step: function() {
            $(".encoded").val(Math.ceil(this.animatedVal)).trigger("change");
          }
        });
        $(".notEncoded").knob();
        $({animatedVal: 0}).animate({animatedVal: {{ round(((($indicatorsDataNotEncoded ) / ($indicatorsDataEncoded + $indicatorsDataNotEncoded)) * 100), 2) }} }, {
          duration: 3000,
          easing: "swing",
          step: function() {
            $(".notEncoded").val(Math.ceil(this.animatedVal)).trigger("change");
          }
        });

        $(".dial5").knob();
      </script>

	@endif
    @foreach($subcities as $key=>$city)
      <div class="pd-ltr-20">
        <div class="pd-20 card-box height-100-p">
          <h4 class="mb-15 text-blue h4"> {{ $city->subcity_name }} Subcity</h4>
          {{-- <p>Woredas </p> --}}
          <div class="btn-list">
          @foreach($woredas as $key=>$woreda)
            
            @if($woreda->subcity_id == $city->id)
              @if(isset($woreda_id) && $woreda_id == $woreda->id)
                <a type="button" class="btn btn-outline-info active" href="{{ route('official.show',$woreda->id) }}" >{{-- <i class="fa fa-linkedin"></i> --}} {{ $woreda->woreda_name }}</a>
              @else
               <a type="button" class="btn btn-outline-info" href="{{ route('official.show',$woreda->id) }}" >{{-- <i class="fa fa-linkedin"></i> --}} {{ $woreda->woreda_name }}</a>
              @endif
            @endif
            
          @endforeach
          </div>
        </div>
      </div>
    @endforeach
@endsection