@extends('layout')

@section('content')



    <!-- ======= Breadcrumbs ======= -->

    <section id="breadcrumbs" class="breadcrumbs">

      {{-- <center>{{$selected_subcity[0]->subcity_name}}</center> --}}



    </section><!-- End Breadcrumbs -->

{{--         <!-- ================== TOGLE SUBCYTY TOP ==================== -->

  <div class="form-group col-md-3 col-sm-12">

    <select class=" selectpicker form-control form-control-lg text-left" data-style="btn-outline-secondary " data-size="6">

      <option value="sectionAddis-Ababa" selected="selected"> Addis Ababa</option>

      <optgroup label="Subcities">

        @foreach($subcities_new as $key=>$subcity)



        <option  value="section{{ str_replace(' ','_',$subcity->subcity_name) }}" >{{ $subcity->subcity_name }} Districts</option>

        

        @endforeach

      </optgroup>

    </select>

  </div>

  <!-- ================== END TOGLE SUBCYTY TOP ============================ --> --}}



    <div class="" style="overflow-x: clip;" >

  <!-- ================== Info Dev  ====================-->

{{-- 

    <style type="text/css">

       .css-1pfo3xg {

       box-sizing: border-box;

       margin: 0px auto;

       min-width: 0px;

       width: 100%;

       padding: 3.5rem 5rem;

       background-color: #f8f6f1);

       }

       .css-vxkfno {

       box-sizing: border-box;

       min-width: 0px;

       width: 50%;

       max-width: 60%;

       margin: auto;

       }

       .css-1v6x1ap {

       box-sizing: border-box;

       margin: 0px;

       min-width: 0px;

       padding-top: 1.5rem;

       padding-bottom: 1.5rem;

       }

       .Africa-module-heroText_3B6l {

       font-family: Botanika Mono;

       font-style: normal;

       font-weight: 300;

       font-size: 18px;

       line-height: 22px;

       text-align: center;

       letter-spacing: .1em;

       }

       .Africa-module-heroTitle_2HmZ {

       font-family: ZapfHumnst BT;

       font-style: normal;

       font-weight: 400;

       font-size: 48px;

       line-height: 54px;

       text-align: center;

       }

       .css-vurnku {

       box-sizing: border-box;

       margin: 0 0 10 0;

       min-width: 0px;

       }

        .century {

       font-family: Century gothic;

       font-style: normal;

       font-weight: 400;

       font-size: 24px;

       line-height: 54px;

       text-align: center;

       }

    </style>

    <div class="row" style="background: #f8f6f1;">

      <div class="css-vxkfno ">

         <div class="Africa-module-heroText_3B6l css-1v6x1ap">

            

         </div>

         <h2 class="Africa-module-heroTitle_2HmZ">

            Risk index that asses COVID-19 vulnerability at individual, community and special setting level in ADDIS ABABA

         </h2>

         <div class="Africa-module-heroText_3B6l css-1v6x1ap">

            

         </div>

      </div>

    </div> --}}

  <!-- ================== END OF Info Dev  ====================-->

    



    <!-- ================== COUNTER ====================-->

    {{-- <div class=" margin" style="background: #f8f6f1;">

      <style type="text/css">

        .counter {

        background-color:#f8f6f1; /*#f5f5f5;*/

        padding: 20px 0;

        border-radius: 5px;

        }

        .count-title {

        font-size: 40px;

        font-weight: normal;

        margin-top: 10px;

        margin-bottom: 0;

        text-align: center;

        }

        .count-text {

        font-size: 13px;

        font-weight: normal;

        margin-top: 10px;

        margin-bottom: 0;

        text-align: center;

        }

        .fa-2x {

        margin: 0 auto;

        float: none;

        display: table;

        color: #273D3F;

        }

      </style>

      <div class="row">

        <br/>

        <div class="col text-center">

          <h2></h2>

          <p>CCIV data collection status</p>

        </div>

      </div>

      <div class="row text-center">

        <div class="col">

          <div class="counter">

            <i class="icon-copy dw dw-flow fa-2x"></i>

            <h2 class="timer count-title count-number" data-to="{{ count($indicatorsCommunity) }}" data-speed="1500"></h2>

            <p class="count-text ">Indicators</p>

          </div>

        </div>

        <div class="col">

          <div class="counter">

            <i class="fa fa-lightbulb-o fa-2x"></i>

            <h2 class="timer count-title count-number" data-to="{{ count($ketenas) }}" data-speed="1500"></h2>

            <p class="count-text ">Ketena</p>

          </div>

        </div>

        <div class="col " style="color: green;">

          <div class="counter">

            <i class="icon-copy dw dw-file-39 fa-2x"></i>

            <h2 class="timer count-title count-number" data-to="{{ count($indicatorsData) }}" data-speed="1500"></h2>

            <p class="count-text ">Data Collected</p>

          </div>

        </div>

      </div>

      <script type="text/javascript">

        (function ($) {

          $.fn.countTo = function (options) {

            options = options || {};

            

            return $(this).each(function () {

              // set options for current element

              var settings = $.extend({}, $.fn.countTo.defaults, {

                from:            $(this).data('from'),

                to:              $(this).data('to'),

                speed:           $(this).data('speed'),

                refreshInterval: $(this).data('refresh-interval'),

                decimals:        $(this).data('decimals')

              }, options);

              

              // how many times to update the value, and how much to increment the value on each update

              var loops = Math.ceil(settings.speed / settings.refreshInterval),

                increment = (settings.to - settings.from) / loops;

              

              // references & variables that will change with each update

              var self = this,

                $self = $(this),

                loopCount = 0,

                value = settings.from,

                data = $self.data('countTo') || {};

              

              $self.data('countTo', data);

              

              // if an existing interval can be found, clear it first

              if (data.interval) {

                clearInterval(data.interval);

              }

              data.interval = setInterval(updateTimer, settings.refreshInterval);

              

              // initialize the element with the starting value

              render(value);

              

              function updateTimer() {

                value += increment;

                loopCount++;

                

                render(value);

                

                if (typeof(settings.onUpdate) == 'function') {

                  settings.onUpdate.call(self, value);

                }

                

                if (loopCount >= loops) {

                  // remove the interval

                  $self.removeData('countTo');

                  clearInterval(data.interval);

                  value = settings.to;

                  

                  if (typeof(settings.onComplete) == 'function') {

                    settings.onComplete.call(self, value);

                  }

                }

              }

              

              function render(value) {

                var formattedValue = settings.formatter.call(self, value, settings);

                $self.html(formattedValue);

              }

            });

          };

          

          $.fn.countTo.defaults = {

            from: 0,               // the number the element should start at

            to: 0,                 // the number the element should end at

            speed: 1000,           // how long it should take to count between the target numbers

            refreshInterval: 100,  // how often the element should be updated

            decimals: 0,           // the number of decimal places to show

            formatter: formatter,  // handler for formatting the value before rendering

            onUpdate: null,        // callback method for every time the element is updated

            onComplete: null       // callback method for when the element finishes updating

          };

          

          function formatter(value, settings) {

            return value.toFixed(settings.decimals);

          }

        }(jQuery));

        

        jQuery(function ($) {

          // custom formatting example

          $('.count-number').data('countToOptions', {

          formatter: function (value, options) {

            return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');

          }

          });

          

          // start all the timers

          $('.timer').each(count);  

          

          function count(options) {

          var $this = $(this);

          options = $.extend({}, options || {}, $this.data('countToOptions') || {});

          $this.countTo(options);

          }

        });

      </script>

    </div> 

--}}

    <!-- ===================== END COUNTER ===========================================-->

    <!-- ===================== SUBCITY MAP ========================================== -->

    <div class="container justify-content-center" >

      <br>

      <div class="row text-center">

        <div class="col"></div>

          <div class="form-group col-md-7 col-sm-12">

{{--             <select class=" selectpicker form-control form-control-lg text-left" data-style="btn-outline-secondary " data-size="6">

              <option value="sectionAddis-Ababa" > Addis Ababa</option>

              <optgroup label="Subcities">

                @foreach($subcities_new as $key=>$subcity)



                <option  value="section{{ str_replace(' ','_',$subcity->subcity_name) }}"@if($subcity->subcity_name == $selected_subcity[0]->subcity_name)  selected="selected" @endif>{{ $subcity->subcity_name }} Districts</option>

                

                @endforeach

              </optgroup>

            </select> --}}

            <div class="btn-group">

              

              <div class="btn-group dropdown">

                <button type="button" class="btn btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">  <b>Addis Ababa Woredas</b><span class="caret"></span> </button>

                <div class="dropdown-menu">

                  <a class="dropdown-item " href="/community">Addis Ababa</a>

                  <a class="dropdown-item active" href="/community/AddisAbabaWoreda">Addis Ababa - Woreda</a>

                  @foreach($subcities_new as $key=>$subcity)

                    <a class="dropdown-item {{-- @if($subcity->subcity_name == $selected_subcity[0]->subcity_name) active @endif --}}" href="{{ $subcity->id }}">{{ $subcity->subcity_name }} Districts</a>



                  {{-- <option  value="section{{ str_replace(' ','_',$subcity->subcity_name) }}"@if($subcity->subcity_name == $selected_subcity[0]->subcity_name)  selected="selected" @endif>{{ $subcity->subcity_name }} Districts</option> --}}

                  

                  @endforeach



                  

                  {{-- <a class="dropdown-item" href="#">Dropdown link</a> --}}

                </div>

              </div>

            </div>

          </div>

        <div class="col"></div>

      </div>

      <div class="row form-group text-center">

        <div class="col"></div>

        

          

                  <div class="text-center col-md-7 btn-group btn-group-toggle " data-toggle="buttons">

{{--                     

                       btn-light or secondary  

                    <button type="button" class="btn btn-light btn-outline-secondary ">All Risk Index</button>

                    <button type="button" class="btn btn-light btn-outline-secondary ">Infection Risk Index</button>

                    <button type="button" class="btn btn-light btn-outline-secondary ">Hospitalazation Risk Index</button>

                    <button type="button" class="btn btn-light btn-outline-secondary ">Death Risk Index</button>

                     --}}

                <label class="btn btn-outline-secondary active" style=" margin: 0 6px 0 0; font-size: smaller; margin-right: 6px">

                  <input type="radio" name="options" value="all" id="all" autocomplete="off" checked="checked"> All Risk Index

                </label>

                <label class="btn btn-outline-secondary" style=" margin: 0 6px 0 0; font-size: smaller; margin-right: 6px">

                  <input type="radio" name="options" value="infection" id="infection" autocomplete="off"> Infection

                </label>

                <label class="btn btn-outline-secondary" style=" margin: 0 6px 0 0; font-size: smaller; margin-right: 6px">

                  <input type="radio" name="options" value="hospitalization" id="hospital" autocomplete="off"> Hospitalazation

                </label>

                    

                <label class="btn btn-outline-secondary" style=" margin: 0 6px 0 0; font-size: smaller; margin-right: 6px">

                  <input type="radio" name="options" value="death" id="death" autocomplete="off"> Mortality

                </label>

                    

                  </div>

                  <div class="col"></div>

               

          

        

        

      </div>

      <div class="row btn-list justify-content-center">

        @foreach($indicators as $key=>$value)

        <button class="indi_toggle btn btn-sm btn-outline-secondary " title="{{$value->discription}}" value="{{ $value->name }}" {{--  data-toggle="button" aria-pressed="false" autocomplete="off" --}}>{{$value->name}}</button>

        @endforeach

        

      </div>

      <div class=" well justify-content-center col-md-12 col-sm-12 ">

        

          <style type="text/css">

            /* .st0{fill:#7cb5ec;} #2B37AA*/

           /* .very-high-ri{fill:#88415B;}*/



           



            

            .NaN-ri{fill:gray;}

            /* #88415B #C75469 #F5976E #EDE58A #C9E9D5 */

            .verylow-total-ri{fill: #C9E9D5}

            .low-total-ri{fill:#EDE58A;}

            .moderate-total-ri{fill:#F5976E;}

            .high-total-ri{fill:#C75469;}

            .veryhigh-total-ri{fill:#88415B;}

            /*  #446C9B  #6489B5 #90B4D6 #B3D3F0  */

            .low-inf-ri{ fill:  #B3D3F0; }

            .moderate-inf-ri{ fill: #90B4D6; }

            .high-inf-ri{ fill: #6489B5; }

            .veryhigh-inf-ri{ fill: #446C9B; }

            /*  #B48816 #CDB01A #E9D04D #F5EA6B  */

            .low-hosp-ri{ fill:  #F5EA6B; }

            .moderate-hosp-ri{ fill: #E9D04D; }

            .high-hosp-ri{ fill: #CDB01A; }

            .veryhigh-hosp-ri{ fill: #B48816; }

            /*  #B93F46 #E3555E #FA868D #FFBAC2 */

            .low-death-ri{ fill:  #FFBAC2; }

            .moderate-death-ri{ fill: #FA868D; }

            .high-death-ri{ fill: #E3555E; }

            .veryhigh-death-ri{ fill: #B93F46; }



            .pathHovered:hover {

              stroke:black;

              stroke-width:1.5; /*fill: #fd7e14; *//* Add a dark-grey background on hover stroke-width="19.1"*/

            }

            .pathMapActive{

              stroke: #28E601;

              stroke-width:1.7;

            }

            .tooltip-inner {

              background-color: #ffffff; 

              color: #000000; 

              border: 1px solid #fd7e14; 

              padding: 5px;

              font-size: 14px;

              text-align: left; 

            }

            .tooltip-inner span{

              text-align: center;

            }

            .tooltip-inner li{

              list-style-type: none; /* Remove bullets */

              padding: 0; /* Remove padding */

              margin: 0; /* Remove margins */

            }





            /* Tooltip on top */

            .tooltip.top > .tooltip-arrow {

              border-top: 5px solid green;

            }

            /* Tooltip on bottom */

            .tooltip.bottom > .tooltip-arrow {

              border-bottom: 5px solid blue;

            }

            /* Tooltip on left */

            .tooltip.left > .tooltip-arrow {

              border-left: 5px solid red;

            }

            /* Tooltip on right */

            .tooltip.right > .tooltip-arrow {

              border-right: 5px solid black;

            }

          </style>



  <div class="row">

   



        <div class="col-md-3 col-sm-3">

          <div class="d-none d-sm-block">

            @foreach($woreda_new as $key=>$subcity)

            {{-- <div class="chartMap" id="chart{{ str_replace(' ','-',$subcity->woreda_name) }}">

              <div id="chartMap{{ str_replace(' ','_',$subcity->woreda_name) }}" class="show">

               

              </div>

            </div> --}}

                      <div id="chartKetena{{ str_replace(' ','_',$subcity->subcity_name) }}" class="show"></div>




      {{-- ************** SCRIPT FOR GRAPH ************************************************** --}}

      <script type="text/javascript">





       

@php

        $ketena = "";

        foreach($woreda_new as $key=>$ind){

          //dd($ind);

          //if($ind->subcity_id == $subcity->id){

            if($ketena == ""){$ketena = array();}



            if( !in_array($ind->woreda_name, $ketena)){

              array_push($ketena, $ind->woreda_name);



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

            // if(!is_numeric($city_data->risk_index_infection)){dd($city_data->risk_index_infection);}

              

              if(is_numeric($ind->risk_index_infection)){

                $inf += $ind->risk_index_infection;

              }

              if(is_numeric($ind->risk_index_hospital)){

                $hosp += $ind->risk_index_hospital;

              }

              if(is_numeric($ind->risk_index_death)){

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

            type: 'spline'

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

              text: 'Risk Index Value'

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
@break
            @endforeach

          </div>

          

          

        </div>

        {{-- woreda map --}}

        <div class="col-md-7 col-sm-7">

          @include( "maps.Addis_Ababa_Woreda")

        </div>

        {{-- end of woreda map --}}

          <style type="text/css">

            .index_guide{

              display: flex; align-items: center; flex-direction: row; margin: 1px 0px;



            }

            .index_guide .text{

              justify-content: left; display: flex; flex: 1 1 0%; margin: 2px 0px 0px 10px;

            }



          </style>

        <div class="col-md-2  d-none d-sm-block " style="font-size: smaller;margin-top: 60px;">



          {{-- for all --}}

          <div id="all_legend">

            <div >Vulnerability Index</div>

            <div class="index_guide">

              <svg width="15" height="15">

                <circle class='NaN-ri'  r="7" cx="6.5" cy="8.5"></circle>

              </svg>

              <div class="text">

                <div >Unavailable</div>

              </div>

            </div>

            <div class="index_guide">

              <svg width="15" height="15">

                <circle fill="#88415B" r="7" cx="6.5" cy="8.5"></circle>

              </svg>

              <div class="text">

                <div >Very High</div>

              </div>

            </div>

            <div class="index_guide">

              <svg width="15" height="15">

                <circle fill="#C75469" r="7" cx="6.5" cy="8.5"></circle>

              </svg>

              <div class="text">

                <div>High</div>

              </div>

            </div>

            <div class="index_guide">

              <svg width="15" height="15">

                <circle fill="#F5976E" r="7" cx="6.5" cy="8.5"></circle>

              </svg>

              <div class="text">

                <div>Moderate</div>

              </div>

            </div>

            <div class="index_guide">

              <svg width="15" height="15">

                <circle fill="#EDE58A" r="7" cx="6.5" cy="8.5"></circle>

              </svg>

              <div class="text">

                <div>Low</div>

              </div>

            </div>

            <div class="index_guide">

              <svg width="15" height="15">

                <circle fill="#C9E9D5" r="7" cx="6.5" cy="8.5"></circle>

              </svg>

              <div class="text">

                <div>Very Low</div>

              </div>

            </div>

          </div>

          {{-- for infection --}}

          <div id="infection_legend">

            <div>Vulnerability Index</div>

            <div class="index_guide">

              <svg width="15" height="15">

                <circle class='NaN-ri'  r="7" cx="6.5" cy="8.5"></circle>

              </svg>

              <div class="text">

                <div >Unavailable</div>

              </div>

            </div>

            <div>

              <div class="index_guide">

                <svg width="15" height="15">

                  <circle fill="#446C9B" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div >Very High</div>

                </div>

              </div>

              <div class="index_guide">

                <svg width="15" height="15">

                  <circle fill="#6489B5" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div >High</div>

                </div>

              </div>

              <div class="index_guide">

                <svg width="15" height="15">

                  <circle fill="#90B4D6" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div >Moderate</div>

                </div>

              </div>

              <div class="index_guide">

                <svg width="15" height="15">

                  <circle fill="#B3D3F0" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div >Low</div>

                </div>

              </div>

              {{-- <div class="index_guide">  #446C9B  #6489B5 #90B4D6 #B3D3F0

                <svg width="15" height="15">

                  <circle fill="#D5E4FA" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div >Very Low</div>

                </div>

              </div> --}}

            </div>

          </div>

          {{-- for hospital --}}

          <div id="hospital_legend">

            <div>Vulnerability Index</div>

            <div class="index_guide">

              <svg width="15" height="15">

                <circle class='NaN-ri'  r="7" cx="6.5" cy="8.5"></circle>

              </svg>

              <div class="text">

                <div >Unavailable</div>

              </div>

            </div>

            <div>

              <div class="index_guide">

                <svg width="15" height="15">

                  <circle fill="#B48816" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div class="vx-label-text ">Very High</div>

                </div>

              </div>

              <div class="index_guide">

                <svg width="15" height="15">

                  <circle fill="#CDB01A" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div class="vx-label-text ">High</div>

                </div>

              </div>

              <div class="index_guide">

                <svg width="15" height="15">

                  <circle fill="#E9D04D" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div class="vx-label-text ">Moderate</div>

                </div>

              </div>

              <div class="index_guide">

                <svg width="15" height="15">

                  <circle fill="#F5EA6B" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div class="vx-label-text ">Low</div>

                </div>

              </div>{{-- 

              <div class="index_guide">

                <svg width="15" height="15"><circle fill="#FAF2A0" r="7" cx="6.5" cy="8.5"></circle></svg>

                <div class="text">

                  <div class="vx-label-text ">Very Low</div>

                </div>

              </div> --}}

            </div>

          </div>

          {{-- for death --}}

          <div id="death_legend">

            <div>Vulnerability Index</div>

            <div class="index_guide">

              <svg width="15" height="15">

                <circle class='NaN-ri'  r="7" cx="6.5" cy="8.5"></circle>

              </svg>

              <div class="text">

                <div >Unavailable</div>

              </div>

            </div>

            <div>

              <div class="index_guide">

                <svg width="15" height="15">

                  <circle fill="#B93F46" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div class="vx-label-text ">Very High</div>

                </div>

              </div>

              <div class="index_guide">

                <svg width="15" height="15">

                  <circle fill="#E3555E" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div class="vx-label-text ">High</div>

                </div>

              </div>

              <div class="index_guide">

                <svg width="15" height="15">

                  <circle fill="#FA868D" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div class="vx-label-text ">Moderate</div>

                </div>

              </div>

              <div class="index_guide">

                <svg width="15" height="15">

                  <circle fill="#FFBAC2" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div class="vx-label-text ">Low</div>

                </div>

              </div>

              {{-- <div class="index_guide">

                <svg width="15" height="15">

                  <circle fill="#FEDFDF" r="7" cx="6.5" cy="8.5"></circle>

                </svg>

                <div class="text">

                  <div class="vx-label-text ">Very Low</div>

                </div>

              </div> --}}

            </div>

          </div>





        </div>

  </div>

      </div>

    </div>

    <script type="text/javascript">



     

      color='NaN-ri';



      function all_ri(){

        @foreach($woreda_new as $subkey=>$city)





        list_id="";

        test='';

        total_ri_inf="nochange";

        total_ri_host="nochange";

        total_ri_death="nochange";



          @foreach($woreda_ri_new as $subrikey=>$city_data)

            test='';

            @if($city->id == $city_data->woreda_id)





              @if($city_data->risk_index_infection == 'unavailable')

                txt = "N/A ";

              

              @elseif($city_data->risk_index_infection != "")

                txt = "{{$city->risk_index_infection}}";

                if(total_ri_inf=="nochange"){total_ri_inf = 0.0;}

                total_ri_inf = total_ri_inf + parseFloat({{$city_data->risk_index_infection}});

              

              @endif

              @if($city_data->risk_index_hospital == 'unavailable')

                txt1 = "N/A ";

              

              @elseif($city_data->risk_index_hospital != "")

                txt1 = "{{$city->risk_index_hospital}}";

                if(total_ri_host=="nochange"){total_ri_host = 0.0;}

                total_ri_host = total_ri_host + parseFloat({{$city_data->risk_index_hospital}});

              

              @endif

              @if($city_data->risk_index_death == 'unavailable')

                txt1 = "N/A ";

              

              @elseif($city_data->risk_index_death != "")

                txt1 = "{{$city->risk_index_death}}";

                if(total_ri_death=="nochange"){total_ri_death = 0.0;}

                total_ri_death = total_ri_death + parseFloat({{$city_data->risk_index_death}});

              

              @endif



              @if($city_data->risk_index_infection != 0)

                test+="<b>I</b>: "+txt;

              @endif

              @if($city_data->risk_index_hospital != 0)

                test+="<b>H</b>: {{ \Str::limit($city_data->risk_index_hospital,3,'')}} ";

              @endif

              @if($city_data->risk_index_death != 0)

                test+="<b>D</b>: {{ \Str::limit($city_data->risk_index_death,3,'')}}";// 13

              @endif

              if(test != "") list_id += "<li>{{ \Str::limit($city_data->Indicator->name, 11) }} : "+test+"</li>";

              

            @endif

          @endforeach



         //alert(total_ri_inf+" - "+total_ri_host+" - "+total_ri_death+" - "+"{{$city->id}}")

          if( isNaN(total_ri_inf) || isNaN(total_ri_host) || isNaN(total_ri_death) ){

            total_ri_inf = "";

            total_ri_host = "";

            total_ri_death = "";

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('NaN-ri');

          }else if ( (total_ri_inf < 7) && (total_ri_host < 7) && (total_ri_death < 7) ){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('low-total-ri');

          }else if( (total_ri_inf  < 15) && (total_ri_host  < 15) && (total_ri_death  < 15) ){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('moderate-total-ri');

          }else if( (total_ri_inf < 21) && (total_ri_host < 21) && (total_ri_death < 21) ){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('high-total-ri');

          }else if( (total_ri_inf >= 21) && (total_ri_host >= 21) && (total_ri_death >= 21) ){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('veryhigh-total-ri');

          }else {

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('verylow-total-ri');

          }





          if(list_id == ""){ list_id+="<li> No data available </li>"; }

          tooltip_text ="<p><b>{{$city->woreda_name}}</b></p><hr><p><ul>"+list_id+"</ul><p>";

          $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').tooltip({title:"<p><b>{{$city->woreda_name}}</b> hospitalization risk index</p><hr><p><ul>"+list_id+"</ul><p>", container:'body'});



          $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').tooltip('dispose').tooltip({title:"<p><b>{{$city->woreda_name}}</b> death risk index</p><hr><p><ul>"+list_id+"</ul><p>", container:'body'});

        @endforeach

      }



      function infection_ri(){

        @foreach($woreda_new as $subkey=>$city)





        list_id="";

        test='';

        total_ri_inf="nochange";





                

          @foreach($woreda_ri_new as $subrikey=>$city_data)

            test='';



            @if($city->id == $city_data->woreda_id)

              @if($city_data->risk_index_infection == 'unavailable')

                txt = "N/A ";

                

              @elseif($city_data->risk_index_infection != "")

              //alert(total_ri_inf);

              

                txt = "{{$city_data->risk_index_infection}}";

                if(total_ri_inf=="nochange"){total_ri_inf = 0.0;}

                total_ri_inf = total_ri_inf + parseFloat({{$city_data->risk_index_infection}});

                //alert(total_ri_inf);

              @endif



              @if($city_data->risk_index_infection != 0.0)

              test+="<b>I</b>: {{ \Str::limit($city_data->risk_index_infection,3,'')}} ";



             /* test+="<b>H</b>: {{ \Str::limit($city_data->risk_index_hospital,3,'')}} ";

              test+="<b>D</b>: {{ \Str::limit($city_data->risk_index_death,3,'')}}";// 13*/



              list_id += "<li>{{ \Str::limit($city_data->Indicator->name, 11) }} : "+test+"</li>";

              @endif

            @endif

          @endforeach



          $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').removeClass('NaN-ri verylow-total-ri low-total-ri moderate-total-ri high-total-ri veryhigh-total-ri low-inf-ri moderate-inf-ri high-inf-ri veryhigh-inf-ri low-hosp-ri moderate-hosp-ri high-hosp-ri veryhigh-hosp-ri low-death-ri moderate-death-ri high-death-ri veryhigh-death-ri ');





          if(isNaN(total_ri_inf)){

            total_ri_inf = "";

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('NaN-ri');

          }else if (total_ri_inf < 7){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('low-inf-ri');

          }else if(total_ri_inf  < 15){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('moderate-inf-ri');

          }else if(total_ri_inf < 21){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('high-inf-ri');

          }else if(total_ri_inf >= 21){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('veryhigh-inf-ri');

          }



          if(list_id == ""){ list_id+="<li> No data available </li>"; }

          tooltip_text ="<p><b>{{$city->woreda_name}}</b></p><hr><p><ul>"+list_id+"</ul><p>";



          $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').tooltip('dispose').tooltip({title:"<p><b>{{$city->woreda_name}}</b> infection risk index <span class='badge badge-secondary text-center' >&#160;&#160;"+total_ri_inf+"&#160;&#160;</span>value</p><hr><p><ul>"+list_id+"</ul><p>", container:'body'});

        @endforeach

      }


      function hospital_ri(){

        @foreach($woreda_new as $subkey=>$city)





        list_id="";

        test='';

        total_ri_host="nochange";



          @foreach($woreda_ri_new as $subrikey=>$city_data)

            test='';

            @if($city->id == $city_data->woreda_id)



               @if($city_data->risk_index_hospital == 'unavailable')

                txt = "N/A ";

                

              @elseif($city_data->risk_index_hospital != "")

              //alert(total_ri_inf);

              

                txt = "{{$city_data->risk_index_hospital}}";

                if(total_ri_host=="nochange"){total_ri_host = 0.0;}

                total_ri_host = total_ri_host + parseFloat({{$city_data->risk_index_hospital}});

                //alert(total_ri_inf);

              @endif



              @if($city_data->risk_index_hospital != 0.0)



              /*test+="<b>I</b>: {{ \Str::limit($city_data->risk_index_infection,3,'')}} ";*/

              test+="<b>H</b>: {{ \Str::limit($city_data->risk_index_hospital,3,'')}} ";

             /* test+="<b>D</b>: {{ \Str::limit($city_data->risk_index_death,3,'')}}";// 13*/



              list_id += "<li>{{ \Str::limit($city_data->Indicator->name, 11) }} : "+test+"</li>";

              @endif

            @endif

          @endforeach

          $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').removeClass('NaN-ri verylow-total-ri low-total-ri moderate-total-ri high-total-ri veryhigh-total-ri low-inf-ri moderate-inf-ri high-inf-ri veryhigh-inf-ri low-hosp-ri moderate-hosp-ri high-hosp-ri veryhigh-hosp-ri low-death-ri moderate-death-ri high-death-ri veryhigh-death-ri ');





          if(isNaN(total_ri_host)){

            total_ri_host = "";

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('NaN-ri');

          }else if (total_ri_host < 7){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('low-hosp-ri');

          }else if(total_ri_host  < 15){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('moderate-hosp-ri');

          }else if(total_ri_host < 21){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('high-hosp-ri');

          }else if(total_ri_host >= 21){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('veryhigh-hosp-ri');

          }



          if(list_id == ""){ list_id+="<li> No data available </li>"; }

          tooltip_text ="<p><b>{{$city->woreda_name}}</b></p><hr><p><ul>"+list_id+"</ul><p>";



         /* $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').tooltip('dispose').tooltip({title:"<p><b>{{$city->woreda_name}}</b> death risk index</p><hr><p><ul>"+list_id+"</ul><p>", container:'body'});*/

           $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').tooltip('dispose').tooltip({title:"<p><b>{{$city->woreda_name}}</b> hospitalization risk index <span class='badge badge-secondary text-center' >&#160;&#160;"+total_ri_host+"&#160;&#160;</span>value</p><hr><p><ul>"+list_id+"</ul><p>", container:'body'});

        @endforeach

      }


      function death_ri(){

        @foreach($woreda_new as $subkey=>$city)





        list_id="";

        test='';

        total_ri_death="nochange";

        

          @foreach($woreda_ri_new as $subrikey=>$city_data)

            test='';

            @if($city->id == $city_data->woreda_id)

              @if($city_data->risk_index_death == 'unavailable')

                txt = "N/A ";

                

              @elseif($city_data->risk_index_death != "")

              //alert(total_ri_inf);

              

                txt = "{{$city_data->risk_index_death}}";

                if(total_ri_death=="nochange"){total_ri_death = 0.0;}

                total_ri_death = total_ri_death + parseFloat({{$city_data->risk_index_death}});

                //alert(total_ri_inf);

              @endif

              @if($city_data->risk_index_death != 0.0)

              /*test+="<b>I</b>: {{ \Str::limit($city_data->risk_index_death,3,'')}} ";

              test+="<b>H</b>: {{ \Str::limit($city_data->risk_index_hospital,3,'')}} ";*/

              test+="<b>D</b>: {{ \Str::limit($city_data->risk_index_death,3,'')}}";// 13



              list_id += "<li>{{ \Str::limit($city_data->Indicator->name, 11) }} : "+test+"</li>";

              @endif

            @endif

          @endforeach





          $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').removeClass('NaN-ri verylow-total-ri low-total-ri moderate-total-ri high-total-ri veryhigh-total-ri low-inf-ri moderate-inf-ri high-inf-ri veryhigh-inf-ri low-hosp-ri moderate-hosp-ri high-hosp-ri veryhigh-hosp-ri low-death-ri moderate-death-ri high-death-ri veryhigh-death-ri ');





          if(isNaN(total_ri_death)){

            total_ri_death = "";

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('NaN-ri');

          }else if (total_ri_death < 7){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('low-death-ri');

          }else if(total_ri_death  < 15){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('moderate-death-ri');

          }else if(total_ri_death < 21){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('high-death-ri');

          }else if(total_ri_death >= 21){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('veryhigh-death-ri');

          }







          if(list_id == ""){ list_id+="<li> No data available </li>"; }

          tooltip_text ="<p><b>{{$city->woreda_name}}</b></p><hr><p><ul>"+list_id+"</ul><p>";



          /*$('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').tooltip('dispose').tooltip({title:"<p><b>{{$city->woreda_name}}</b> death risk index</p><hr><p><ul>"+list_id+"</ul><p>", container:'body'});*/



          $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').tooltip('dispose').tooltip({title:"<p><b>{{$city->woreda_name}}</b> hospitalization risk index <span class='badge badge-secondary text-center' >&#160;&#160;"+total_ri_death+"&#160;&#160;</span>value</p><hr><p><ul>"+list_id+"</ul><p>", container:'body'});

        @endforeach

      }

      function toggle_ind_ri(indicator){

        @foreach($woreda_new as $subkey=>$city)





        list_id="";

        test='';

        total_ri_inf="nochange";

        total_ri_host="nochange";

        total_ri_death="nochange";



          @foreach($woreda_ri_new as $subrikey=>$city_data)

            test='';

            @if($city->id == $city_data->woreda_id)

              if(indicator == "{{$city_data->indicator->name}}"){

                @if($city_data->risk_index_infection == 'unavailable')

                  txt = "N/A ";

                

                @elseif($city_data->risk_index_infection != "")

                  txt = "{{$city->risk_index_infection}}";

                  if(total_ri_inf=="nochange"){total_ri_inf = 0.0;}

                  total_ri_inf = total_ri_inf + parseFloat({{$city_data->risk_index_infection}});

                

                @endif

                @if($city_data->risk_index_hospital == 'unavailable')

                  txt1 = "N/A ";

                

                @elseif($city_data->risk_index_hospital != "")

                  txt1 = "{{$city->risk_index_hospital}}";

                  if(total_ri_host=="nochange"){total_ri_host = 0.0;}

                  total_ri_host = total_ri_host + parseFloat({{$city_data->risk_index_hospital}});

                

                @endif

                @if($city_data->risk_index_death == 'unavailable')

                  txt1 = "N/A ";

                

                @elseif($city_data->risk_index_death != "")

                  txt1 = "{{$city->risk_index_death}}";

                  if(total_ri_death=="nochange"){total_ri_death = 0.0;}

                  total_ri_death = total_ri_death + parseFloat({{$city_data->risk_index_death}});

                

                @endif



                @if($city_data->risk_index_infection != 0)

                  test+="<b>I</b>: "+txt;

                @endif

                @if($city_data->risk_index_hospital != 0)

                  test+="<b>H</b>: {{ \Str::limit($city_data->risk_index_hospital,3,'')}} ";

                @endif

                @if($city_data->risk_index_death != 0)

                  test+="<b>D</b>: {{ \Str::limit($city_data->risk_index_death,3,'')}}";// 13

                @endif

                if(test != "") list_id += "<li>{{ \Str::limit($city_data->Indicator->name, 11) }} : "+test+"</li>";

              }







                

              

            @endif

          @endforeach

          //alert($("input[name: option]").value);



         // alert(total_ri_inf+" - "+total_ri_host+" - "+total_ri_death)

          if( isNaN(total_ri_inf) || isNaN(total_ri_host) || isNaN(total_ri_death) ){

            total_ri_inf = "";

            total_ri_host = "";

            total_ri_death = "";

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('NaN-ri');

          }else if ( (total_ri_inf < 7) && (total_ri_host < 7) && (total_ri_death < 7) ){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('low-total-ri');

          }else if( (total_ri_inf  < 15) && (total_ri_host  < 15) && (total_ri_death  < 15) ){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('moderate-total-ri');

          }else if( (total_ri_inf < 21) && (total_ri_host < 21) && (total_ri_death < 21) ){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('high-total-ri');

          }else if( (total_ri_inf >= 21) && (total_ri_host >= 21) && (total_ri_death >= 21) ){

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('veryhigh-total-ri');

          }else {

            $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').addClass('verylow-total-ri');

          }





          if(list_id == ""){ list_id+="<li> No data available </li>"; }

          tooltip_text ="<p><b>{{$city->woreda_name}}</b></p><hr><p><ul>"+list_id+"</ul><p>";

          $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').tooltip({title:"<p><b>{{$city->woreda_name}}</b> <u>"+indicator+"</u> risk index</p><hr><p><ul>"+list_id+"</ul><p>", container:'body'});



          $('.{{ str_replace(" ", "-", $city->woreda_name) }}-path').tooltip('dispose').tooltip({title:"<p><b>{{$city->woreda_name}}</b> <u>"+indicator+"</u> risk index</p><hr><p><ul>"+list_id+"</ul><p>", container:'body'});

        @endforeach

      }



      $('#all_legend').show();

      $('#infection_legend').hide();

      $('#hospital_legend').hide();

      $('#death_legend').hide();



      $('.chartMap').hide();

      //$('#chartGullele').show();

      //$('.Gullele-path').addClass('pathMapActive')

      all_ri();



      $('.indi_toggle').on('click', function(){

        var $this=$(this);

        $('.subcity').removeClass('NaN-ri verylow-total-ri low-total-ri moderate-total-ri high-total-ri veryhigh-total-ri low-inf-ri moderate-inf-ri high-inf-ri veryhigh-inf-ri low-hosp-ri moderate-hosp-ri high-hosp-ri veryhigh-hosp-ri low-death-ri moderate-death-ri high-death-ri veryhigh-death-ri ');

        $('.indi_toggle').removeClass('active');



        $this.addClass('active');



        toggle_ind_ri(this.value);

        //alert(this.value);

      });

      $('.subcity').on('click', function(){



        $('.highcharts-background').hide();

        $('.chartMap').hide();

        //alert('chart'+this.id);

        $('#chart'+this.id).show();

        $('.subcity').removeClass('pathMapActive');



        var $this=$(this);



        $this.addClass('pathMapActive');

      });



      $('#all').on('click',function(){

        $('.indi_toggle').removeClass('active');

        $('.subcity').removeClass('NaN-ri verylow-total-ri low-total-ri moderate-total-ri high-total-ri veryhigh-total-ri low-inf-ri moderate-inf-ri high-inf-ri veryhigh-inf-ri low-hosp-ri moderate-hosp-ri high-hosp-ri veryhigh-hosp-ri low-death-ri moderate-death-ri high-death-ri veryhigh-death-ri ');



        all_ri();

        //$('.subcity').addClass('NaN-ri');

        



        $('#all_legend').show();

        $('#infection_legend').hide();

        $('#hospital_legend').hide();

        $('#death_legend').hide();



      });

      $('#infection').on('click',function(){

        $('.indi_toggle').removeClass('active');

        infection_ri();

        



        $('#all_legend').hide();

        $('#infection_legend').show();

        $('#hospital_legend').hide();

        $('#death_legend').hide();

        /* */

        /*$('.subcity').removeClass('NaN-ri');

        $('.subcity').removeClass('moderat-ri');*/

      });

      $('#hospital').on('click',function(){

        $('.indi_toggle').removeClass('active');

        hospital_ri();





        /*$('.subcity').removeClass('*-ri');*/

        /*$('.subcity').removeClass('*-ri');

        $('.subcity').removeClass('very-high-ri');

        $('.subcity').removeClass('low-ri');

        $('.subcity').addClass('high-inf-ri');*/



        $('#all_legend').hide();

        $('#infection_legend').hide();

        $('#hospital_legend').show();

        $('#death_legend').hide();



      });

      $('#death').on('click',function(){

        $('.indi_toggle').removeClass('active');

        death_ri();

        // $('.subcity').removeClass('NaN-ri');

        // $('.subcity').addClass('very-high-ri');

        // $('.subcity').removeClass('high-ri');

        // $('.subcity').removeClass('low-ri');



        $('#all_legend').hide();

        $('#infection_legend').hide();

        $('#hospital_legend').hide();

        $('#death_legend').show();



      });

{{-- 

      @foreach($subcity_ri as $key=>$city)



      if({{$city->subcity_RI}} > 23.3){test="<span class='badge badge-danger'>VERY HIGH </span>"; color='very-high-ri';}

      else if({{$city->subcity_RI}} > 15.5){test="<span class='badge badge-warning'> HIGH </span>"; color='high-ri';}

      else if({{$city->subcity_RI}} > 7.8){test="<span class='badge badge-secondary'> MODERATE </span>"; color='moderat-ri';}

      else{ test="<span class='badge badge-success'> LOW </span>";  color='low-ri';}

  

      $('.{{ str_replace(" ", "-", $city->subcity_name) }}-path').tooltip({title:"<p><b>{{$city->subcity_name}}</b> Detail<br> has a "+test+" vulnerability . </p><hr> <p><li><b>CCVI:</b> {{$city->subcity_RI}} </li></p>", container:'body'});

      $('.{{ str_replace(" ", "-", $city->subcity_name) }}-path').removeClass( 'NaN-ri' ); //).attr({ "fill": "red" });

      $('.{{ str_replace(" ", "-", $city->subcity_name) }}-path').addClass( color ); //).attr({ "fill": "red" });

      @endforeach

--}}

      </script>



    <!-- ================= END SUBCITY MAP =============================== -->









<!-- ===================== SUBCYTY DETAIL =================================-->

<div class="card-body bg-white">

  <a id="subcityDetail"></a>



 



  <!-- =================== SUBCYTY CONTENT ==================================-->  


  {{-- @if($subcity->subcity_name != $selected_subcity[0]->subcity_name)

    @continue

  @endif --}}



  <div class="section{{ str_replace(' ','_',$subcity->subcity_name) }} box" id="finaly{{$subkey}}">

  <!-- ================== SUBCYTY REVIEW ====================================--> 

    <div class="row ">

{{--       <div class=" col-md-3 col-sm-12">

        <h2>{{ str_replace(' ','_',$subcity->subcity_name) }} Perspective</h2>

        

        <div class="card-tools">

          <hr>

        </div>

        

        <div class="d-none d-sm-inline-block max-heigh-500px" >

          <p><h3> Population : {{$subcity->population}}   </h3></p>

          @php

          $co=0

          @endphp

          @foreach($subcity_ri_new as $inkey=>$indicator)

            @if($co <= 5)



              @if($subcity->id != $indicator->subcity_id)

             

                @continue

              @endif



              <p><b> {{ $indicator->Indicator->name}} :  </b>  {{ \Str::limit($indicator->subcity_value,50)}}</p>

              @php $co++; @endphp

            @elseif($co == 6)

            <div class="row justify-content-right">

              <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#moreIndicators" aria-expanded="false" aria-controls="moreIndicators">More</button>

            </div>

              

              @php $co++; @endphp

            @endif

          @endforeach

          <div class="collapse" id="moreIndicators" >

            @foreach($subcity_ri_new as $inkey=>$indicator)

              @if($co >= 6)



              @if($subcity->id != $indicator->subcity_id)

                @continue

              @endif

                <p><b> {{ $indicator->Indicator->name}} :  </b>  {{ \Str::limit($indicator->subcity_value,50)}}</p>

              @endif

            @endforeach

          </div>

        </div>

      </div> --}}

      <div class="col-md-1 col-sm-12"></div>

      <div class="col-md-8 col-sm-12">
{{-- 
        @if($subcity->review != "")

        <?php echo $subcity->review; ?>

        @else



          <p>No Review for Subcity</p>

        @endif --}}

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

        {{-- <div id="chartKetena{{ str_replace(' ','_',$subcity->subcity_name) }}" class="show"></div> --}}

      



      {{-- ************** SCRIPT FOR GRAPH ************************************************** --}}
{{-- 
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

            // if(!is_numeric($city_data->risk_index_infection)){dd($city_data->risk_index_infection);}

              

              if(is_numeric($ind->risk_index_infection)){

                $inf += $ind->risk_index_infection;

              }

              if(is_numeric($ind->risk_index_hospital)){

                $hosp += $ind->risk_index_hospital;

              }

              if(is_numeric($ind->risk_index_death)){

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

              text: 'Risk Index Value'

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

        Highcharts.chart('chartMap{{ str_replace(' ','_',$subcity->subcity_name) }}', {

          chart: {

            type: 'spline'//'bar'

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

              text: 'Risk Index Value'

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

            name: 'Mortality risk index',

            data: [@foreach($data_death as $ket) {{$ket}}, @endforeach]



          }]

        });

@endif

      </script>
 --}}


{{--     </div> --}}



    {{-- ===================== end of test graph ====================== --}}



      </div>



    </div>

    <!-- ================== END SUBCYTY REVIEW ====================--> 

    <!-- ================== SUBCYTY TABLE ====================--> 



    <div class=" col-md-12 col-sm-12 " style="overflow-x: scroll;">

      <hr>

      <h2>Addis Ababa Woredas Table</h2>

      <table id="table{{$subcity->id}}" class="table table-striped table-bordered ">



        <thead>

          

          <tr>

            <th>Woreda</th>

            <th>Indicator Name</th>

            <th>Value</th>

            <th>Risk Index Infecion</th>

            <th>Risk Index Hospitalization</th>

            <th>Risk Index Mortality</th>

          </tr>

        </thead>



        <tbody>

        <script type="text/javascript"> sumif=0.0;sumho=0.0;sumde=0.0;</script>

        @foreach($woreda_ri_new as $rikey=>$woreda_data)

         {{--  @if($woreda_data->Woreda->subcity_id == $subcity->id) --}}

            <tr>



              <td>{{$woreda_data->Woreda->woreda_name}}</td>

              <td>{{$woreda_data->Indicator->name}}</td>

              <td>{{$woreda_data->woreda_value}}</td>

              <td @if($woreda_data->risk_index_infection == 'unavailable') class="table-secondary"  @endif>

                {{$woreda_data->risk_index_infection}}

                @if(($woreda_data->risk_index_infection != "unavailable") || ($woreda_data->risk_index_infection != ""))

                <script type="text/javascript"> sumif += {{$woreda_data->risk_index_infection}};</script>

                @endif

              </td>

              <td @if($woreda_data->risk_index_hospital == 'unavailable') class="table-secondary"  @endif>

                {{$woreda_data->risk_index_hospital}}

                @if(($woreda_data->risk_index_hospital != "unavailable") || ($woreda_data->risk_index_hospital != ""))

                <script type="text/javascript"> sumho += {{$woreda_data->risk_index_hospital}};</script>

                @endif

              </td>

              <td @if($woreda_data->risk_index_death == 'unavailable') class="table-secondary"  @endif>

                {{$woreda_data->risk_index_death}}

                @if(($woreda_data->risk_index_death != "unavailable") || ($woreda_data->risk_index_death != ""))

                <script type="text/javascript"> sumde += {{$woreda_data->risk_index_death}};</script>

                @endif

              </td>

            </tr>  

         {{--  @endif     --}}  

        @endforeach



        </tbody>



        <thead>

          <tr>

            <th>Woreda</th>

            <th>Indicator Name</th>

            <th>Value</th>

            <th>RI Infecion Sum : <span class="badge badge-warning"><script type="text/javascript"> document.write(sumif);</script></span></th>

            <th>RI Hospitalization Sum : <span class="badge badge-warning"><script type="text/javascript"> document.write(sumho);</script></span></th>

            <th>RI Mortality Sum : <span class="badge badge-warning"><script type="text/javascript"> document.write(sumde);</script></span></th>

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




<hr>







  <h2> Summary Of all Subcites </h2>

  <div class="row form-group">

    

    <div class="col-md-12 col-sm-12">

        <div class=" pd-20  mb-30"><a id="summery"></a>

         <div id="subcity_bar_chart"></div>

        </div>

    </div>

    

    {{-- <div class="col-md-4 col-sm-12">

      <div class=" pd-20  mb-30"><a id="summery"></a>

         <div id="subcity_pie_chart"></div>

        </div>

    </div> --}}

  </div>

</div>

</div>







</div>

{{-- <script>



  $(document).ready(function(){

      $("select").change(function(){

          $(this).find("option:selected").each(function(){

              var optionValue = $(this).attr("value");

              if(optionValue){

  

                  $(".box").not("." + optionValue).hide();

                  $(".boxx").not("." + optionValue).hide();

                  $("." + optionValue).show();

              } else{

                  $(".box").hide();

               

              }

          });

      }).change();

      $("#finalyAddis-Ababa").show();

  });

</script> --}}



<script>

  $.widget.bridge('uibutton', $.ui.button)

</script>



<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>



<script src="{{ asset('dist/js/pages/dashboard3.js') }}"></script>





<script type="text/javascript">

{{--

  // chart 4

  ccvi= new Array();

  /*max= new Array();

  min= new Array();*/

  city= new Array();

  city_pie = new Array();



  @foreach($subcity_ri as $key=>$city)



    city.push( '{{$city->subcity_name}}' );

    ccvi.push( {{$city->subcity_RI}} );



    city_pie.push( ['{{ $city->subcity_name}}', {{$city->subcity_RI}}, false]);





  @endforeach



        Highcharts.chart('subcity_pie_chart', {

            chart: {

    type: 'bar'

  },

          title: {

            text: false

          },

          xAxis: {

            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']

          },

          series: [{

            text: 'RI',

            type: 'pie',

            allowPointSelect: true,

            keys: ['name', 'y', 'selected', 'sliced'],

            data: city_pie,

            showInLegend: true

          }]

        });

--}}







          city_index_value = new Array();

          data_series = new Array();

          subcity= new Array();



                    

              @foreach($indicators as $indkey=>$indicator)

              city_index_value = new Array();



                @foreach($subcity_ri_new as $cityKey=>$subcity_data)



                     

                      if(!(subcity.includes('{{$subcity_data->Subcity->subcity_name}}'))){

                        subcity.push( '{{$subcity_data->Subcity->subcity_name}}' );

                      }



                      @if( ($indicator->id == $subcity_data->indicator_id))



                        city_index_value.push({{$subcity_data->subcity_value}});



                      @endif

                    

                  

                 

                @endforeach

              data_series.push({

                name : '{{$indicator->name}}',

                data : city_index_value

              });

              @endforeach

              

Highcharts.chart('subcity_bar_chart', {

  chart: {

    type: 'spline'//'column'

  },

  title: {

    text: ' Comparissiion In Addis Ababa Subcities'

  },

  subtitle: {

    text: 'Source: woreda Indexing values '

  },

  xAxis: {

    categories: subcity,

    crosshair: true

  },

  yAxis: {

    min: 0,

    title: {

      text: 'Population count'

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


/*
Highcharts.chart('chartAddis-Ababa', {

  chart: {

    type: 'column'

  },

  title: {

    text: ' Comparissiion In Addis Ababa Subcities'

  },

  subtitle: {

    text: 'Source: woreda Indexing values '

  },

  xAxis: {

    categories: subcity,

    crosshair: true

  },

  yAxis: {

    min: 0,

    title: {

      text: 'Population count'

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

});*/

</script>







{{-- <footer class="main-footer">

  <strong>

    <p align="center">Copyright &copy; May.2021 <a href="#">AlephTav</a>.

  </strong>

  All rights reserved.

  <div class="float-right d-none d-sm-inline-block">

    <b>Version</b> 1.0.0

  </div>

  </p>

</footer> --}}

{{-- 

<style type="text/css">

  #myBtn {

  display: none; /* Hidden by default */

  position: fixed; /* Fixed/sticky position */

  bottom: 20px; /* Place the button at the bottom of the page */

  right: 30px; /* Place the button 30px from the right */

  z-index: 99; /* Make sure it does not overlap */

  border: none; /* Remove borders */

  outline: none; /* Remove outline */

  background-color: rgba(0,0,0,.5); /* Set a background color */

  color: white; /* Text color */

  cursor: pointer; /* Add a mouse pointer on hover */

  padding: 10px 14px 10px 14px; /* Some padding */

  border-radius: 10px; /* Rounded corners */

  font-size: 18px; /* Increase font size */

}



#myBtn:hover {

  background-color: #555; /* Add a dark-grey background on hover */

}

</style>

 <button onclick="topFunction()" id="myBtn" title="Go to top">Top <i class="fa fa-long-arrow-up"></i></button>  --}}

<script type="text/javascript">

    //Get the button:

  mybutton = document.getElementById("myBtn");



  // When the user scrolls down 20px from the top of the document, show the button

  window.onscroll = function() {scrollFunction()};



  function scrollFunction() {



  $(".dataTables_length").hide();

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

      mybutton.style.display = "block";

    } else {

      mybutton.style.display = "none";

    }

  }



  // When the user clicks on the button, scroll to the top of the document

  function topFunction() {

    document.body.scrollTop = 0; // For Safari

    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera

  } 

 

  

  $(".highcharts-credits").hide();



</script>





@endsection