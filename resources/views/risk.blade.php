@extends('layout')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      
    </section><!-- End Breadcrumbs -->
<style>
.box{
 color: #1f2d3d;
 padding: 20px;
 display: none;
 margin-top: 20px;
}
.boxx{
 color: #1f2d3d;
 padding: 20px;
 margin-top: 20px;
 display: block;
}
.risk {
 font-family: arial;
 box-sizing: border-box;
}
.risk  p {
 margin: 0;
}
.risk div.select {
 min-width: 120px;
 padding-right: 15px;
 margin-left: 10px;
 display: inline-block;
 border-radius: 15px;
 border: 1px solid #0B0000;
 position: relative;
 background: f8f9fa;
}
.risk div.select p {
 padding: 5px;
 width: 100%;
 color: #000;
}
.risk div.select:after {
 content: "▼";
 color: #000;
 position: absolute;
 right: 6px;
 top: 8px;
 font-size: 9px;
}
.risk div.select .hidden {
 position: absolute;
 visibility: hidden;
 opacity: 0;
 transition: .1s;
 background: f8f9fa;
 border: 1px solid #000;
 border-radius: 15px;
 z-index: 10;
 width: 100%;
 color: #000;
}
.risk div.select:hover .hidden {
 visibility: visible;
 opacity: 1;
}
.risk div.select p:hover, div.select:hover {
 background: #ddd;
}
</style>


<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/jquery-steps/jquery.steps.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/cropperjs/dist/cropper.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/bootstrap/popper.min.js') }}">
<!-- form ------------------------->
<div class="">
  <div class="container">
    <div class="risk" style="background:white">

      <div class="clearfix card-box mb-30">
        <center>
          <h2 class=" h2" style="color: #009efb !important">Covid-19 Personal Risk Assessment</h2> <!-- COVID-19 PERSONAL RISK ASSESMENT Covid-19 Personal Risk Assessment -->
          <p class="mb-2">Please Input your information</p>
        </center>
   

      <div class="wizard-content">
        <form class="tab-wizard wizard-circle wizard was-validated" >

          <h5>Personal Info</h5>
          <section class="" style="min-height: 596px !important">
            <div class="row col-12 ">
              <!-----------col 1 ------>
              <div class="col-sm-12 col-md-6 col-lg-6">
                <!-- ===================================================================== -->
                <!-- gender -->
                <div class="form-group row">
                  <label for="gender" class="col-4 col-form-label">Gender</label>
                  <div class="row form-group">                          
                    <div id="gender" class="custom-control custom-radio ">
                      <input type="radio" id="customRadio1" name="gender" class="custom-control-input" value="male" required >
                      <label class="custom-control-label" for="customRadio1">Male</label>
                    </div>
                    <div class="custom-control custom-radio ">
                      <input type="radio" id="customRadio2" name="gender" class="custom-control-input" value="female" required="required">
                      <label class="custom-control-label" for="customRadio2">Female</label>
                    </div>
                  </div>
                </div>

                
                <!------------Age -------->
                <div class="form-group row">
                  <label for="age" class="col-sm-5 col-md-3 col-form-label">Age</label>
                  <div class="col-sm-12 col-md-9">
                         <!--  <select class="selectpicker col-12" name="age" id="age" data-style="btn-outline-secondary" required="required">
                            <option ></option>
                            <option value="1"> >=50 </option>
                            <option value="0"> <50 </option>
                            </select> -->
                            <input class="form-control" name="age" id="age"  type="number" required="required">
                  </div>
                </div>

                        <!-- ===================================================================== -->
                        <!------------Occupation -------------->
                        <div class="form-group row">
                          <label  class="col-sm-5 col-md-3 col-form-label" for="occopation">Occopation</label>
                          <div class="col-sm-12 col-md-9">
                            <select name ="occopation" id ="occopation" class="custom-select2 form-control " name="occopation" required="required">

                              <option ></option>
                              <optgroup label="Working in COVID-19 patient related health and non-health care services">
                                <option value="related">HFs</option>
                                <option value="related">Nursing homes</option>
                                <option value="related"> Home Care</option>
                                <option value="related"> Other Related to this</option>
                              </optgroup>
                              <optgroup label="Working in Customer Services direct encounter with customers or clients">
                                <option value="cousomerSer">Receptionist</option>
                                <option value="cousomerSer">Bank teller</option>
                                <option value="cousomerSer">Front desk manager</option>
                                <option value="cousomerSer"> Other Related to this</option>
                              </optgroup>
                              <optgroup label="Working in Cleaning and waste handling ( for non-health care service related)">
                                <option value="cleaning"> Cleaner </option>
                              </optgroup>
                              <optgroup label="Working in crowded situations">
                                <option value="crowded">Teacher</option>
                                <option value="crowded">Public transportaiton</option>
                                <option value="crowded">church</option>
                                <option value="crowded">Mosque</option>
                                <option value="crowded">Lecturer</option>
                                <option value="crowded"> Other Related to this</option>
                              </optgroup>
                              <optgroup label="Working in jobs that expose to chemicals, dust, smoke"> (
                                <option value="expose"> Industry</option>
                                <option value="expose"> Construction</option>
                                <option value="expose"> Mining</option>
                                <option value="expose"> Other related to this </option>
                              </optgroup>
                              <optgroup label ="Working in Security" >
                                <option value="Security" > Police</option>
                                <option value="Security"> Defense</option>
                                <option value="Security"> Security Guard</option>
                                <option value="Security">Other Related to this</option>
                              </optgroup>
                              <option value="office"> Office Workers</option>
                              <option value="other"> Others</option>


                            </select>
                          </div>
                        </div>

                        <!------------co put  -------------->
                         <div class="form-group row">
                            <label class="col-sm-5 col-md-3 col-form-label">Symptoms</label>
                            <div class="col-sm-12 col-md-9">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name ="symp" id="nosymp" onclick="uncheckAll()">
                                <label class="custom-control-label" for="nosymmp">No symtomes</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name ="symp" id="fever" value="Fever">
                                <label class="custom-control-label" for="fever">Fever</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name ="symp" id="cough"value="Cough">
                                <label class="custom-control-label" for="cough">Cough</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name ="symp" id="sore" value="Sore throte">
                                <label class="custom-control-label" for="sore">Sore throte</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name ="symp" id="fat" value="Fatigue">
                                <label class="custom-control-label" for="fat">Fatigue</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name ="symp" id="Musle" value="Musle pain">
                                <label class="custom-control-label" for="Musle">Musle pain</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name ="symp" id="Head" value="Head ace">
                                <label class="custom-control-label" for="Head">Head ace</label>
                              </div>
                            </div>
                            
                          </div>
                        <!------------co morbidity -------------->


                        


                        <div class="form-group row">
                          <label class="col-sm-12 col-md-3 col-form-label">Keep Social Distancing</label>
                          <div class="col-sm-12 col-md-9">
                           <div class="form-group row">                          
                            <div id="" class="custom-control custom-radio ">
                              <input type="radio" id="distreg" name="dist" class="custom-control-input" value="Always" required="required" >
                              <label class="custom-control-label" for="distreg">Always&#160;</label>
                            </div>
                            <div class="custom-control custom-radio ">
                              <input type="radio" id="distsome" name="dist" class="custom-control-input" value="Sometimes" required="required">
                              <label class="custom-control-label" for="distsome">Sometimes&#160;</label>
                            </div>
                            <div class="custom-control custom-radio ">
                              <input type="radio" id="distnev" name="dist" class="custom-control-input" value="Never" required="required">
                              <label class="custom-control-label" for="distnev">Never&#160;</label>
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-sm-5 col-md-3 col-form-label">Do you smoke&#160;</label>
                        <div class="col-sm-12 col-md-9">
                         <div class="row form-group">                          
                          <div id="smoke" class="custom-control custom-radio ">
                            <input type="radio" id="smokereg" name="smoke" class="custom-control-input" value="Regularliy" required="required" >
                            <label class="custom-control-label" for="smokereg">Regularliy&#160;</label>
                          </div>
                          <div class="custom-control custom-radio ">
                            <input type="radio" id="smokesome" name="smoke" class="custom-control-input" value="Sometimes" required="required">
                            <label class="custom-control-label" for="smokesome">Sometimes&#160;</label>
                          </div>
                          <div class="custom-control custom-radio ">
                            <input type="radio" id="smokenev" name="smoke" class="custom-control-input" value="Never" required="required">
                            <label class="custom-control-label" for="smokenev">Never&#160;</label>
                          </div>
                        </div>

                      </div>
                    </div>




                    <div class="form-group row">
                      <label class="col-sm-5 col-md-3 col-form-label">Chew Khat</label>
                      <div class="col-sm-12 col-md-9">
                       <div class="row form-group">                          
                        <div id="chat" class="custom-control custom-radio ">
                          <input type="radio" id="chatreg" name="chat" class="custom-control-input" value="Regularliy" required="required" >
                          <label class="custom-control-label" for="chatreg">Regularliy&#160;</label>
                        </div>
                        <div class="custom-control custom-radio ">
                          <input type="radio" id="chatsome" name="chat" class="custom-control-input" value="Sometimes" required="required">
                          <label class="custom-control-label" for="chatsome">Sometimes&#160;</label>
                        </div>
                        <div class="custom-control custom-radio ">
                          <input type="radio" id="chatnev" name="chat" class="custom-control-input" value="Never" required="required">
                          <label class="custom-control-label" for="chatnev">Never&#160;</label>
                        </div>
                      </div>

                    </div>


                  </div>




                </div>

                <!-----------col 2 ------>
                <div class="col-sm-12 col-md-6 col-lg-6">
                  <!-- ======================================================= -->
                  <div class="form-group row">
                    <div class="col-md-9 col-sm-12" >

                      <div class="form-group row">
                        <label  for='weight' class="col-sm-7 col-md-4 col-form-label">Weight (In KG)</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="Number" class="form-control col-12" type="text"  name="weight" id="weight" data-style="btn-outline-secondary" placeholder="Weight (in KG)" required="required">
                        </div>
                      </div>

                      <!------------Heighty --------> 

                      <div class="form-group row">
                        <label  for="height" class="col-sm-7 col-md-4 col-form-label">Height (In CM)</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="Number" class="form-control col-12" type="text"  name= "height" id="height" onKeyPress="bmic()" onKeyUp="bmic()" data-style="btn-outline-secondary"  placeholder="Height ( in CM)" required="required">
                        </div>
                      </div>
                    </div>

                    <!------------BMI -------------->
                    <div class="col-md-3 col-sm-12">
                      <div class="form-group row">
                        <label for ="bmi" class="col-form-label col">BMI (kg/m2)</label>
                        <input class="col-8 form-control" type="text"  name="bmi" id="bmi" disabled required="required">
                      </div>
                    </div>
                  </div>
                  <!------------Weight -------->
                  



                  <!-- ======================================================= -->
                        <div class="form-group row">
                          <div class="col-md-4 col-sm-12">
                            <label class="weight-600" for="none">Health Condition</label>
                          </div>
                            <div class="col-md-8 col-sm-12">
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name ="como" id="none" value="none" onclick="uncheckAll()">
                                <label class="custom-control-label" for="none">NONE</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name ="como" id="htn" value="HTN">
                                <label class="custom-control-label" for="htn">Hypertension (HTN)</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="como" id="dm" value="DM">
                                <label class="custom-control-label" for="dm">Diabetes (DM)</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="como" id="hiv" value="HIV">
                                <label class="custom-control-label" for="hiv">HIV</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="como" id="tb" value="TB">
                                <label class="custom-control-label" for="tb">Tuberculosis (TB)</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="como" id="ckd" value="CKD">
                                <label class="custom-control-label" for="ckd">Chronic kidney disease (CKD)</label>
                              </div>
                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="como" id="crd" value="CRD">
                                <label class="custom-control-label" for="crd">Chronic Resparator Disease (CRD)</label>
                              </div>
                              <div class="custom-control custom-checkbox ">
                                <input type="checkbox" class="custom-control-input" id="Cancer" value="Cancer">
                                <label class="custom-control-label" for="Cancer">Cancer</label>
                              </div>
                            </div>
                          {{-- </div> --}}
                        </div>


                 

                    <div class="form-group row">
                      <label class="col-sm-5 col-md-3 col-form-label">Wearing a mask&#160;</label>
                      <div class="col-sm-12 col-md-9">
                        <div class="row form-group">                          
                          <div id="" class="custom-control custom-radio ">
                            <input type="radio" id="maskreg" name="mask" class="custom-control-input" value="Regularliy" required="required" >
                            <label class="custom-control-label" for="maskreg">Sometimes&#160;</label>
                          </div>
                          <div class="custom-control custom-radio ">
                            <input type="radio" id="masksome" name="mask" class="custom-control-input" value="Sometimes" required="required">
                            <label class="custom-control-label" for="masksome">Always&#160;</label>
                          </div>
                          <div class="custom-control custom-radio ">
                            <input type="radio" id="masknev" name="mask" class="custom-control-input" value="Never" required="required">
                            <label class="custom-control-label" for="masknev">I do not ware mask&#160;</label>
                          </div>
                        </div>
                        
                      </div>
                    </div>

                      <div class="form-group row">
                        <label class="col-sm-5 col-md-3 col-form-label"> Sanitize/Washing hand&#160;</label>
                        <div class="col-sm-12 col-md-9">
                          <div class="row form-group">                          
                            <div id="sani" class="custom-control custom-radio ">
                              <input type="radio" id="sanireg" name="sani" class="custom-control-input" value="Regularliy" required="required" >
                              <label class="custom-control-label" for="sanireg">Regularliy&#160;</label>
                            </div>
                            <div class="custom-control custom-radio ">
                              <input type="radio" id="sanisome" name="sani" class="custom-control-input" value="Sometimes" required="required">
                              <label class="custom-control-label" for="sanisome">sometimes&#160;</label>
                            </div>
                            <div class="custom-control custom-radio ">
                              <input type="radio" id="saninev" name="sani" class="custom-control-input" value="Never" required="required">
                              <label class="custom-control-label" for="saninev">Never&#160;</label>
                            </div>
                          </div>

                        </div>

                      </div>

                      <div class="form-group row">
                        <label class="col-sm-5 col-md-3 col-form-label">Drink Alchol&#160;</label>
                        <div class="col-sm-12 col-md-9">
                         <div class="row form-group">                          
                          <div id="alc" class="custom-control custom-radio ">
                            <input type="radio" id="alcreg" name="alc" class="custom-control-input" value="Regularliy" required="required" >
                            <label class="custom-control-label" for="alcreg">Regularliy&#160;</label>
                          </div>
                          <div class="custom-control custom-radio ">
                            <input type="radio" id="alcsome" name="alc" class="custom-control-input" value="Sometimes" required="required">
                            <label class="custom-control-label" for="alcsome">sometimes&#160;</label>
                          </div>
                          <div class="custom-control custom-radio ">
                            <input type="radio" id="alcnev" name="alc" class="custom-control-input" value="Never" required="required">
                            <label class="custom-control-label" for="alcnev">Never&#160;</label>
                          </div>
                        </div>

                      </div>

                    </div>

                    <div class="form-group row">
                      <label class="col-sm-5 col-md-3 col-form-label">Physical Activity</label>
                      <div class="col-sm-12 col-md-9">
                       <div class="row form-group">                          
                        <div id="phy" class="custom-control custom-radio ">
                          <input type="radio" id="phyreg" name="phy" class="custom-control-input" value="Regularliy" required="required" >
                          <label class="custom-control-label" for="phyreg">Regularliy&#160;</label>
                        </div>
                        <div class="custom-control custom-radio ">
                          <input type="radio" id="physome" name="phy" class="custom-control-input" value="Sometimes" required="required">
                          <label class="custom-control-label" for="physome">sometimes&#160;</label>
                        </div>
                        <div class="custom-control custom-radio ">
                          <input type="radio" id="phynev" name="phy" class="custom-control-input" value="Never" required="required">
                          <label class="custom-control-label" for="phynev">Never&#160;</label>
                        </div>
                      </div>

                    </div>


                  </div>

                  <div class="form-group row">
                      <!--<input class="form-control" type="button" onClick="calrisk()" Value="Calculate" style="background-color: #1b00ff; font-weight: 600; color:white" />
                       <span id='result'> </span> -->
                     </div>
                   </div>

                   <div class="row col-12" style="background-color: #1b00ff; font-weight: 600; color:white">
                    <div class="col-4"></div>
                    <div class="col-4"> <!-- No need -->
                      <span id="calc_ris" class="from-control btn-warning"></span>
                    </div>
                    <div class="col-4"></div>
                    
                  </div>


                </div>
                <br>
                <div class="clearfix">

                </div>
              </section>





              <!-- Step 2 -->
              <h5>Summary and Risk value</h5>
              <section class="container" >

<!-- 
<div class="padding-bottom-30">


            <div class="card">
              <div class="card-header">
                <button class="btn btn-block" data-toggle="collapse" data-target="#faq1-1" aria-expanded="true">
                  Summary
                </button>
              </div>
              <div id="faq1-1" class="collapse show" style="">
                <div class="card-body">
                  <p id= "sum"></p>
                  <footer class="blockquote-footer">Summary of Your personal Input <cite title="Source Title"></cite></footer>
                </div>
              </div>
            </div>


            <div class="card">
              <div class="card-header">
                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq2-2" aria-expanded="false">
                  Risk Value
                </button>
              </div>
              <div id="faq2-2" class="collapse show" style="">
                <div class="card-body">
                 <p id= "ris"></p>
                  <footer class="blockquote-footer">Over All Risk Value<cite title="Source Title"></cite></footer>
                </div>
              </div>
            </div>



            <div class="card">
              <div class="card-header">
                <button class="btn btn-block collapsed" data-toggle="collapse" data-target="#faq3-3">
                  Our Advise
                </button>
              </div>
              <div id="faq3-3" class="collapse show">
                <div class="card-body">
                  <p id= "adv"></p>
                  <footer class="blockquote-footer">Be Safe<cite title="Source Title"></cite></footer>
                </div>
              </div>
            </div>





          </div>
        -->






        <div id="print_me" class="row clearfix">


          <div class="col-sm-12 col-md-12 mb-30">
            <div class="">
              <div class="card-header bg-info">
                Summary
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <h4> Based on your input data we summerize your inputs </h4>
                  <p id= "summary"></p>
                  <footer class="blockquote-footer">Summary of Your personal Input <cite title="Source Title"></cite></footer>
                </blockquote>
              </div>
            </div>
          </div>


          <div class="col-sm-12 col-md-12 mb-30">
            <div class="">
              <div class="card-header bg-info">
                Risk Value
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <h4> Based on your input data we calculated your over all risks for covid </h4>
                  <p id= "ris"></p>
                  <footer class="blockquote-footer">Over All Risk Value<cite title="Source Title"></cite></footer>
                </blockquote>
              </div>
            </div>
          </div>



          <div class="col-sm-12 col-md-12 mb-30">
            <div class="">
              <div class="card-header bg-info">
                Our Advise
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <h4> Based on your input data our suggestions are:-</h4>
                  <p id= "suggestion"></p>
                  <!-- <p id= "advHos"></p>
                  <p id= "advDea"></p> -->
                  <footer class="blockquote-footer">Be Safe<cite title="Source Title"></cite></footer>
                </blockquote>
              </div>
            </div>
          </div>



        </div>



      </section>
      <!-- Step 3 -->
             <!--  <h5>Interview</h5>
              <section>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Interview For :</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Interview Type :</label>
                      <select class="form-control">
                        <option>Normal</option>
                        <option>Difficult</option>
                        <option>Hard</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Interview Date :</label>
                      <input type="text" class="form-control date-picker" placeholder="Select Date">
                    </div>
                    <div class="form-group">
                      <label>Interview Time :</label>
                      <input class="form-control time-picker" placeholder="Select time" type="text">
                    </div>
                  </div>
                </div>
              </section> -->
              <!-- Step 4
              <h5>Remark</h5>
              <section>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Behaviour :</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Confidance</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Result</label>
                      <select class="form-control">
                        <option>Select Result</option>
                        <option>Selected</option>
                        <option>Rejected</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Comments</label>
                      <textarea class="form-control"></textarea>
                    </div>
                  </div>
                </div>
              </section> -->
            </form>
          </div>
        </div>







        <!-- success Popup html End -->
      </div>

    </div>
  </div>
  <script src="{{ asset('src/plugins/jquery-steps/jquery.steps.js') }}"></script>
  <script src="{{ asset('vendors/scripts/steps-setting.js') }}"></script>


  <script>
    function bmic() {
      var w = parseFloat(document.getElementById("weight").value);
      var h = parseFloat(document.getElementById("height").value);
      var bmi = document.getElementById("bmi");
      bmi.value =(w / (Math.pow(h,2)/ 10000)).toFixed(2);
    }

    function uncheckAll() {   
      var inputs = document.querySelectorAll('.custom-control-input');   
      for (var i = 0; i < inputs.length; i++) {   
        inputs[i].checked = false;  
        document.getElementById('none').checked = true; 
      }   


    }  
  </script>


  <script>
    function calrisk() {
var suggestion="";
//**************CALCULATION FOR INDICATOR GENDER
      var ele = document.getElementsByName('gender'); 
      var gender;
      for(i = 0; i < ele.length; i++) {
        if(ele[i].checked)
          gender = ele[i].value;
      }
      var genderCalc; 
      if (gender == 'male'){
        genderCalc = 1;
        

      }
      else if (gender == "female"){
        genderCalc = 0;
        
      }
      else{
        genderCalc = 0;
      }
//************END GENDER*************************************

//***************CALCULATION FOR INDICATOR BMI
      var w = parseFloat(document.getElementById("weight").value);
      var h = parseFloat(document.getElementById("height").value);
      
      bmi =(w / (Math.pow(h,2)/ 10000)).toFixed(2);
      var bmiCalc;
      //var bmi = document.getElementsByName('bmi').value;
      if (bmi < 18.5) 
        bmiCalc = 0.4;
      else if (bmi >= 18.5 && bmi < 24.9) //differece
        bmiCalc = 0;
      else if (bmi >= 25.5 && bmi < 29.9) 
       bmiCalc = 0.2;
     else if (bmi >= 30 && bmi < 34.9) 
       bmiCalc = 0.6;
     else if (bmi >= 35 && bmi < 39.9) 
       bmiCalc = 0.8;
     else if (bmi >= 40) {
       bmiCalc = 1;
       suggestion = suggestion + "Loosing a little bit weight to balance with your hight is advisable </br>";
     }
     else
      bmiCalc = 0;
//************END BMI*******************************************

//**********CALCULATION FOR INDICATOR AGE

    var age = document.getElementById("age").value;
    /*   var age = ag.options[ag.selectedIndex].value;*/
    var ageCalc;
    if(age < 5){
      ageCalc = 0.25;
    }
    else if (5 < age < 17){
      ageCalc = 0.5;
    }
    else if(18 <= age < 30 ){
      ageCalc = 0;
    }
    else if(31 < age < 50){
      ageCalc = 0.75;
    }
    else if (age >= 50){
      ageCalc = 1;
    }
    else {
      ageCalc = 0;
    }
  //***********END AGE**************************************

//***************CALCULATION FOR INDICATOR OCCOPATION

var occopation = document.getElementById("occopation").value;
if(occopation == "related"){   
  oInf = 1;
  oHos = 0.57;
  oDea = 0.57;

}
else if (occopation == 'cousomerSer'){
  oInf = 0.86;
  oHos = 0.71;
  oDea = 0.71;

}
else if (occopation == 'cleaning'){
 oInf = 0.71;
 oHos = 0.86;
 oDea = 0.86;

}
else if (occopation == 'crowded'){
 oInf = 0.56;
 oHos = 0.43;
 oDea = 0.43;

}
else if (occopation == 'expose'){
 oInf = 0.43;
 oHos = 1;
 oDea = 1;
}
else if(occopation == 'Security'){
 oInf = 0.29;
 oHos = 0.29;
 oDea = 0.29;

}
else if(occopation =='office'){
 oInf = 0.14;
 oHos = 0.14;
 oDea = 0.14;
}
else {
 oInf = 0;
 oHos = 0;
 oDea = 0;
}
//*********END OCCOPATION******************************

//*****CALCULATION FOR INDICATOR WEARING MASKvar ele = document.getElementsByName('gender');
 var mask;
 var ma = document.getElementsByName("mask");
 for(i = 0; i < ma.length; i++) {
        if(ma[i].checked)
          mask = ma[i].value;
      }
      
     var maskCalc;
     if(mask =='Always'){
        maskCalc = 0;
        
      }
      else if(mask == 'Sometimes'){
        maskCalc = 0.5;
        suggestion = suggestion + "Wear Mask always</br>";

      }
      else if (mask =='Never'){
       maskCalc = 1;
       suggestion = suggestion + "wear mask always</br>";

     }
     else{
       maskCalc = 0;
       
     }
//**********END WEARING MASK**************************

//*********CALCULATION FOR INDICATOR SANITIZER USAGE
  var sani;
     var sa = document.getElementsByName("sani");
      for(i = 0; i < sa.length; i++) {
        if(sa[i].checked)
          sani = sa[i].value;
      }
         
     
     var saniCalc;
     if(sani =='Always'){
        saniCalc = 0;

      }
      else if(sani == 'Sometimes'){
        saniCalc = 0.5;
        suggestion = suggestion + "Always sanitize</br>";

      }
      else if (sani =='Never'){
       saniCalc = 1;
       suggestion = suggestion + "always use sanitzer</br>";

     }
     else{
       $saniCalc = 0;
       
     }
//**************END SANITAIZER USAGE**************************

//**********CACLCULATION FOR INDICATOR SOCIAL DISTANCING
     var dist;
     var di = document.getElementsByName("dist");
      for(i = 0; i < di.length; i++) {
        if(di[i].checked)
          dist = di[i].value;
      }
          
     var distCalc;
     if(dist =='Yes'){
        distCalc = 0;

      }
      else if(dist == 'Sometimes'){
        distCalc = 0.5;
        suggestion = suggestion + "always keep your social distance </br>";

      }
      else if (dist =='No'){
       distCalc = 1;
       suggestion = suggestion + "Alsways keep your social distance </br>";

     }
     else{
       distCalc = 0;
     }
//***********END SOCIAL DISTANCING***********************

//**********CALCULATION FOR INDICATOR SMOKING
     var smoke;
     var sm = document.getElementsByName("smoke");
      for(i = 0; i < sm.length; i++) {
        if(sm[i].checked)
          smoke = sm[i].value;
      } 
     
    var smokeCalc;
    if(smoke =='Regularliy'){
  smokeCalc = 1;
  suggestion = suggestion + "you smoke regularly? really? your lungs are way far from healthy , STOP IT NOW </br>";
}
else if(smoke == 'Sometimes'){
  smokeCalc = 0.5;
  suggestion = suggestion + "Smoking is bad stop it </br>";
}
else if (smoke =='Never'){
 smokeCalc = 0;
}
else{
 smokeCalc = 0; 
}
//*********END SMOKING****************************

//***********CALCULATION FOR CHEWING CHAT
    var chat;
     var ch = document.getElementsByName("chat");
      for(i = 0; i < ch.length; i++) {
        if(ch[i].checked)
          chat = ch[i].value;
      }  
     var chatCalc;
     if(chat =='Regularliy'){
  chatCalc = 1;
  suggestion = suggestion + "CHAT is bad for you. </br>";
  
}
else if(smoke == 'Sometimes'){
  chatCalc = 0.5;
  suggestion = suggestion + "well am out of suggestion </br>";
}
else if (smoke =='Never'){
 chatCalc = 0;
}
else{
 chatCalc = 0;
}
//************END CHAT***************************

//********CALCULATION FOR INDICATOR DRINKING ALCHOL
      var alc;
     var al = document.getElementsByName("alc");
      for(i = 0; i < al.length; i++) {
        if(al[i].checked)
          alc = al[i].value;
      }
      
     
      var alcCalc;
      if(alc =='Regularliy'){
  alcCalc = 1;
  suggestion = suggestion + "stop or try to minimize ur alchol intake </br>";
}
else if(alc == 'Sometimes'){
  alcCalc = 0.5;
  suggestion = suggestion + "it is not like addiciton to u if u only drink sometimes so it should be easy to stop </br>";
}
else if (alc =='Never'){
alcCalc = 0;
}
else{k
alcCalc = 0;
}
//************END ALCHOL*******************************

//************CALCULATION FOR INDICATOR PHYSICAL ACTIVITY
        var physical;
     var ph = document.getElementsByName("phy");
      for(i = 0; i < ph.length; i++) {
        if(ph[i].checked)
          physical = ph[i].value;
      }
    
      var phCalc;
      if(physical =='Regularliy'){
  phCalc = 0;
}
else if(physical == 'Sometimes'){
  phCalc = 0.5;
  suggestion = suggestion + "doing physical activities are good not only to prevent you form covid but for ur overall health </br>";
}
else if (physical =='Never'){
 phCalc = 0;
 suggestion = suggestion + "DO physical activity </br>";
}
else{
 phCalc = 0;
}
//********END PHYSICAL ACTIVITY***********************


//*********CALCULATION FOR COMORBIDITY
    var comor = "";
    var comoI = 0;

    if (document.getElementById("htn").checked){
      comor = comor + " , " +  document.getElementById("htn").value;
      comoI = comoI + 0.67;
    }
    if (document.getElementById("dm").checked){
      comor = comor  + " , " +  document.getElementById("dm").value;
      comoI = comoI + 0.83;
    }
    if (document.getElementById("crd").checked){
      comor = comor  + " , " +  document.getElementById("crd").value;
      comoI = comoI + 1;
    }
    if (document.getElementById("hiv").checked){
      comor = comor  + " , " + document.getElementById("hiv").value;
      comoI = comoI + 0.167;
    }
    if (document.getElementById("ckd").checked){
      comor = comor  + " , " +  document.getElementById("ckd").value;
      comoI = comoI + 0.167;
    }
    if (document.getElementById("tb").checked){
      comor = comor  + " , " +  document.getElementById("tb").value;
      comoI = comoI + 0.167;
    }
    if (document.getElementById("Cancer").checked){
      comor = comor  + " , " +  document.getElementById("Cancer").value;
      comoI = comoI + 0.167;
    }
    //***********END COMORBIDITY

    //CALCULATION FOR INDICATOR SYMPTOMES
     var inputs = document.getElementsByName("symp");
var sympCalc = 0;   
for (var i = 0; i < inputs.length; i++) {   
    var input = inputs[i];
    if('checkbox' == inputs[i].type && inputs[i].checked)
        sympCalc++;
}

//***********TOTAL RISK INDEX CALCULATION FOR INFECTION, HOSPITALIZATION AND DEATH
var RFI , RFH ,RFD;
RFI = genderCalc + ageCalc +bmiCalc + oInf + maskCalc + saniCalc + distCalc + smokeCalc + chatCalc + alcCalc + phCalc + comoI + sympCalc;
RFH = genderCalc + ageCalc +bmiCalc + oHos + maskCalc + saniCalc + distCalc + smokeCalc + chatCalc + alcCalc + phCalc + comoI + sympCalc;
RFD = genderCalc + ageCalc +bmiCalc + oDea + maskCalc + saniCalc + distCalc + smokeCalc + chatCalc + alcCalc + phCalc + comoI + sympCalc;
//***********END TOTAL

   var vulInf, vulHos, vulDea, advInf, advHos, advDea;
   /******************Risk and advice for Infection **********************/  
   //=IF(J47<3,"Low",IF(J47>=3-6,"Moderate",IF(J47>=7-10,"High",IF(J47>=10-13,"Very High",))))  
    if (RFI < 3){
      vulInf = "You have Low Vulnereblity to be infected with covid-19";
      advInf = "Your Infection vulnereblity for covid is low; keep it this way";
    }

    else if (RFI > 3 && RFI <= 6){
      vulInf = "You have Moderate Vulnereblity to be infected with covid-19";
      advInf = "Your Infection vulnereblity for Covid 19 is Moderate.";
    }
    else if (RFI > 6 && RFI < 10){
      vulInf = "You have High Vulnereblity to be infected with covid-19";
      advInf="Your Infection vulnereblity for Covid 19 is High";
    }
    else if (RFI >= 10 && RFI < 13){
      vulInf = "You have Very High Vulnereblity to be infected with covid-19";
      advInf="Your Infection vulnereblity for Covid 19 is Very High";
    }

    else{
      vulInf = "Vulnereblity For Infection: Can not be determined";
      advInf= "";
    }


    /* Vulnereblity and advices for Hospitalization ************************************/
    //=IF(J49<3,"Low",IF(J49>=3-5,"Moderate",IF(J49>=5-8,"High",IF(J49>=8,"Very High",))))
   if (RFH < 3){
      vulHos = "Vulnereblity For Hospitalization:  LOW";
      advHos = "Your vulnereblity for Covid 19 is Low";
    }

    else if (RFH > 3 && RFH < 5){
      vulHos = "Vulnereblity For Hospitalization: Moderate";
      advHos = "Your vulnereblity for Covid 19 is Moderate.";
    }
    else if (RFH >= 5 && RFH < 8){
      vulHos = "Vulnereblity For Hospitalization: High";
      advHos="Your vulnereblity for Covid 19 is High";
    }
     else if (RFH > 8){
      vulHos = "Vulnereblity For Hospitalization: Very High";
      advHos="Your vulnereblity for Covid 19 is High";
    }

    else{
      vulHos = "Vulnereblity For Hospitalization:Can not be detrmined";
      advHos= " ";
    }
    

    /* Vulnereblity and advices for Death ************************************/
    //=IF(J51<3,"Low",IF(J51>=3-5,"Moderate",IF(J51>=5-8,"High",IF(J51>=8,"Very High",))))
    if (RFD > 3){
      vulDea = "Vulnereblity For Death:LOW";
      advDea = "Your vulnereblity for Covid 19 is LOW.";
    }

    else if (RFD > 3 && RFD < 5){
      vulDea = "Vulnereblity For Death: Moderate";
      advDea = "Your vulnereblity for Covid 19 is Moderate.";
    }
    else if (RFD >= 5 && RFD < 8){
      vulDea = " Vulnereblity For Death: High";
      advDea="Your vulnereblity for Covid 19 is High";
    }
    else if(RFD >=8){
      vulDea = "vulnerevlity for death very high";
      advDea ="very high vulnereblity to death";
    }

    else{
      vulDea = "can not be determined";
      advDea= " ";
    }
/*var ge;
    if (gender = 1)
      ge = "Male";
    else 
      ge ="Female";*/




   document.getElementById("ris").innerHTML=  "Your Overall risk to be <b> Infected </b> with covid-19 is  " +  "<b>" + RFI +"</b>"+ "<br>" +  "It means that you have " + vulInf +"</br>" + "Your oOverall risk to be <b> hospitalized </b> with covid-19 is " + "<b>" + RFH  +"</b" + "</br" + "It means that you have" + vulHos + "</br>" + "Your overall risk for mortality is " + "<b>" + RFD + "</b>" + "</br>" + "It means that you have" + vulDea;
   
  document.getElementById("summary").innerHTML= "Gender= " + gender + "\xa0 \xa0 \xa0 " +  "BMI = "  +  bmi + "\xa0 \xa0 \xa0 " + "Age = " + age + "<br>" + "Wearing Mask = " + mask + "\xa0 \xa0 \xa0 " + "Sanitize = " + sani + "\xa0 \xa0 \xa0 " + "keep Social distance = " + dist + "<br>" + "Smoking=" + smoke + "\xa0 \xa0 \xa0 " + "Chew Chat = " + chat + "\xa0 \xa0 \xa0 " + "Drink Alchol=" + alc + "</br>" + "Physcial exercise " + physical ;

  document.getElementById("suggestion").innerHTML= suggestion;

}
</script>
@endsection