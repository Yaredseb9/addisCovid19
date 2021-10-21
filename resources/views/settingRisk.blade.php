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
    label:not(.form-check-label):not(.custom-file-label) {
      font-style: 'Inter',sans-serif !important;
      font-weight: 1 !important;
     }
  </style>
<div class="container">
<div class="risk" style="background:white">


<div class="pd-20 card-box mb-30">
          <div class="clearfix text-center">
            <h4 class=" h2" style="color: #009efb !important">Calculate the risk for covid for your work environment</h4>
            <p class="mb-30">please inpute your enviroment conditions<hr></p>
          </div>
          <div class="wizard-content" >
            <form class="tab-wizard2 wizard-circle wizard vertical">
              <h5>General information about the Services type & individuals</h5>
              <section style="padding-left: 30px;">
                <div class="clearfix" style="height: 5em;"> </div>
                <div class="row text-center ">
                  <h3 class="display-6 ">General information about the Services type & individuals</h3></br></br>
                </div>
                <div class="clearfix" > <hr></div>
                {{--   <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label >Type of Setting :</label>
                        <!-- <input type="text" class="form-control"> -->
                        <select class="custom-select form-control" name ="typeSetting" id="typSetting">
                          <option value=""> Select type</option>
                    <option value="Restourant/Bar"> Bar & Restourant </option>
                    <option value="Church/Mosque"> Church or Mosque </option>
                    <option value="Stadium/gym"> Stadium/Gym </option>
                    <option value="school"> School </option>
                    <option value="covid-19 thretement center"> Covid 19 threatment centers </option>
                    <option value="health_facility"> Health Facility </option>
                    <option value="non_health related"> Non health related </option>
                    <option value="other"> other</option>
                  </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label >Average functional working/living space:</label>
                        <input type="Number" class="form-control" name="avgSpace" placehoder="needs calculation& probabliy another input field">
                      </div>
                    </div>
                </div>
                <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label>Population density per 10 meter square :</label>
                              <input type="Number" class="form-control" name="popDen" placeholder="needs calculation and another field">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="row">
                            <div class="col-md-3">
                            <div class="form-group">
                              <label>No of Male individuals in the setting :</label>
                              <input type="Number" class="form-control" name="noMale">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <label>Total number of individuals in the setting :</label>
                              <input type="Number" class="form-control" name="noFemale" placeholder="to be calc">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                              <label>No of Female individuals in the setting :</label>
                              <input type="Number" class="form-control" name="">
                            </div>
                          </div>

                        </div>
                </div>
                <div class="row">
                        <div class="col-md-6">
                         <!--  <div class="form-group">
                            <label>Select City :</label>
                            <select class="custom-select form-control">
                              <option value="">Select City</option>
                              <option value="Amsterdam">India</option>
                              <option value="Berlin">UK</option>
                              <option value="Frankfurt">US</option>
                            </select>
                          </div> -->
                           <div class="form-group">
                            <label>No of diagnosed individuals with co-morbid conditions</label>
                            <input type="Number" class="form-control" name="noDiag">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label >No of individuals in the setting with age >= 50 years :</label>
                            <input type="Number" class="form-control" placeholder="Needs calculation for proportion" name="noAgeGreter">
                          </div>
                        </div>
                </div> --}}

                <div class="form-group row ">
                  <label for="typeSetting" class="col-md-2 col-form-label text-right">Type of setting</label>
                  <div class="col col-md-7 ">
                  {{-- =IF(C5="other",0,
                  IF(C5="None health related Office ",0.14,
                  IF(C5="Health facility ",0.28,
                  IF(C5="Covid-19 treatment centers ",0.42,
                  IF(C5="schools",0.57,
                  IF(C5="Stadium, Gym ",0.71,
                  IF(C5="Churches",0.85,
                  IF(C5="Bars, restaurants                           
                    <input class="form-control" type="text" name="typeSetting" id="typeSetting" value="{{ $value->typeSetting }} ">--}}
                    <select class="form-control selectpicker " name="typeSetting" id="typeSetting">
                      <option value="Bars, Restaurants" >Bars, Restaurants</option>
                      <option value="Churches">Churches</option>
                      <option value="Stadium, Gym">Stadium, Gym</option>
                      <option value="Schools">Schools</option>
                      <option value="Covid-19 treatment centers">Covid-19 treatment centers</option>
                      <option value="Health facility">Health facility</option>
                      <option value="None health related Office">None health related Office</option>
                      <option value="other">other</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label for="avgSpace" class=" col-md-12 col-form-label">Average functional working/living space (m<sup>2</sup>)</label>
                      <div class="col col-md-8">                          
                          <input class="form-control" type="number" name="avgSpace" id="avgSpace" value="" >
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="popDen" class=" col-md-12 col-form-label">Population density per 10 m<sup>2</sup></label>

                      <div class="col-md-8">                          
                          <input class="form-control" type="number" name="popDen" id="popDen" value="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="noIndividual" class=" col-md-12 col-form-label">No of individuals in the setting</label>
                      {{-- <input type="hidden" name="userid" value="{{ Auth::user()->id }}"> --}}
                      <div class="col-md-8">                          
                        <input class="form-control" type="number" name="noIndividual" id="noIndividual" value="">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label for="noFemale" class=" col-md-12 col-form-label">No of female individuals in the setting</label>
                      <div class="col-md-8">                          
                        <input class="form-control" type="number" name="noFemale" id="noFemale" value="">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="noDiag" class=" col-md-12 col-form-label">No of diagnosed individuals with co-morbid conditions </label>
                      <div class="col-md-8">                          
                        <input class="form-control" type="number" name="noDiag" id="noDiag" value="">
                      </div>
                    </div>
            
                    <div class="form-group row">
                      <label for="noAgeGreter" class="col-md-12 col-form-label">Proportion of individuals in the setting with age >= 50 years</label>
                      <div class="col-md-8">                          
                        <input class="form-control" type="number" name="noAgeGreter" id="noAgeGreter" value="">
                      </div>
                    </div>
                  </div>
                </div>
            
         
   
              </section>

              <!-- Step 2 -->
              <h5>Working/living environment</h5>
              <section style="padding-left: 30px;">
                <div class="clearfix" style="height: 5em;"> </div>
                <div class="row text-center ">
                  <h3 class="display-6 ">Working/living environment</h3></br></br>
                </div>
                <div class="clearfix" > <hr></div>

               

                <div class="row">
                  <label for="covidCoordinator" class=" col-form-label">Have you identified a workplace coordinator who will be responsible for COVID-19 issues and their impact at the workplace, who can also act as point of contact with the local health department?.</label>
                </div>

                <div class="form-group row">
                  <div id="covidCoordinator" class="custom-control custom-radio ">
                    <input type="radio" id="covidCoordinatoryes" name="covidCoordinator" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="covidCoordinatoryes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="covidCoordinatorno" name="covidCoordinator" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="covidCoordinatorno">No</label>
                  </div>
                </div>
                <div class="row">
                  <label for="increasePhysicalSpace" class=" col-form-label">Have you increased physical space between employees at the worksite, including break areas and lunchrooms? Social distancing should be 6 feet or greater..</label>
                </div>
                <div class="form-group row">
                  <div id="increasePhysicalSpace" class="custom-control custom-radio ">
                    <input type="radio" id="increasePhysicalSpaceyes" name="increasePhysicalSpace" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="increasePhysicalSpaceyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="increasePhysicalSpaceno" name="increasePhysicalSpace" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="increasePhysicalSpaceno">No</label>
                  </div>
                </div>
                <div class="row">
                  <label for="increasePhysicalSpaceBetween" class=" col-form-label">Have you increased physical space between employees and customers (e.g., drive through, partitions)?.</label>
                </div>

                <div class="form-group row">
                  <div id="increasePhysicalSpaceBetween" class="custom-control custom-radio ">
                    <input type="radio" id="increasePhysicalSpaceBetweenyes" name="increasePhysicalSpaceBetween" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="increasePhysicalSpaceBetweenyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="increasePhysicalSpaceBetweenno" name="increasePhysicalSpaceBetween" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="increasePhysicalSpaceBetweenno">No</label>
                  </div>
                </div>
                <div class="row">
                  <label for="adquatePpe" class=" col-form-label">is there always adquate PPE (soap and water in the workplace or  alcohol-based hand sanitizer) at the institution? </label>
                </div>

                <div class="form-group row">
                  <div id="adquatePpe" class="custom-control custom-radio ">
                    <input type="radio" id="adquatePpereg" name="adquatePpe" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="adquatePpereg">Regularly</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="adquatePpesom" name="adquatePpe" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="adquatePpesom">Sometimes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="adquatePpenev" name="adquatePpe" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="adquatePpenev">Never</label>
                  </div>
                </div>
                <div class="row">
                  <label for="provideTissues" class=" col-form-label">Do you provide tissues and no-touch disposal receptacles/trash cans throughout the facility?</label>
                </div>

                <div class="form-group row">
                  <div id="gendprovideTissues" class="custom-control custom-radio ">
                    <input type="radio" id="provideTissuesyes" name="provideTissues" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="provideTissuesyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="provideTissuesno" name="provideTissues" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="provideTissuesno">No</label>
                  </div>
                </div>
                <div class="row">
                  <label for="handSani" class=" col-form-label">Have you placed hand sanitizers/handwash facilities in multiple locations to encourage hand hygiene?</label>
                </div>

                <div class="form-group row">
                  <div id="handSani" class="custom-control custom-radio ">
                    <input type="radio" id="handSaniyes" name="handSani" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="handSaniyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="handSanino" name="handSani" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="handSanino">No</label>
                  </div>
                </div>
                <div class="row">
                  <label for="hungPosters" class=" col-form-label">Have you hung posters throughout the facility to encourage hand hygiene?</label>
                </div>

                <div class="form-group row">
                  <div id="hungPosters" class="custom-control custom-radio">
                    <input type="radio" id="hungPostersyes" name="hungPosters" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="hungPostersyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="hungPostersno" name="hungPosters" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="hungPostersno">No</label>
                  </div>
                </div>
                <div class="row">
                  <label for="cleanAndDisinfect" class=" col-form-label">Does your workplace routinely clean and disinfect all frequently touched surfaces in the workplace, such as workstations, keyboards, telephones</label>
                </div>

                <div class="form-group row">
                  <div id="cleanAndDisinfect" class="custom-control custom-radio ">
                    <input type="radio" id="cleanAndDisinfectyes" name="cleanAndDisinfect" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="cleanAndDisinfectyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="cleanAndDisinfectno" name="cleanAndDisinfect" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="cleanAndDisinfectno">No</label>
                  </div>
                </div>
              

                <div class=" row">
                  <label for="disposableWipes" class=" col-form-label">Do you provide disposable wipes so that commonly used surfaces like doorknobs, keyboards, remotes control, desks can be wiped down by employees before each use?</label>
                </div>
                <div class="form-group row">
                  <div id="disposableWipes" class="custom-control custom-radio ">
                    <input type="radio" id="disposableWipesyes" name="disposableWipes" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="disposableWipesyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="disposableWipesno" name="disposableWipes" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="disposableWipesno">No</label>
                  </div>
                </div>

                <div class=" row">
                  <label for="workplaceClean" class="col-form-label">Has your workplace made cleaning and disinfection after persons suspected/confirmed to have COVID-19 have been in the facility</label>
                </div>
                <div class="form-group row">
                  <div id="workplaceClean" class="custom-control custom-radio ">
                    <input type="radio" id="workplaceCleanyes" name="workplaceClean" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="workplaceCleanyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="workplaceCleanno" name="workplaceClean" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="workplaceCleanno">No</label>
                  </div>
                </div>


              </section>

              <!-- Step 3 -->
              <h5>Policies, guidelines and tools</h5>
              <section style="padding-left: 30px;">
                <div class="clearfix" style="height: 5em;"> </div>
                <div class="row text-center ">
                  <h3 class="display-6 ">Policies, guidelines and tools</h3></br></br>
                </div>
                <div class="clearfix" > <hr></div>

               {{--  <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Is/are there any guiding document(s) for employer on COVID-19 prevention and control considerations in the setting Policies, guidelines and tools</label>
                      <div id="guidDoc" class="custom-control custom-radio ">
                  <input type="radio" id="guidDocyes" name="guidDoc" class="custom-control-input" value="0"  >
                  <label class="custom-control-label" for="guidDocyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="guidDocno" name="guidDoc" class="custom-control-input" value="1" >
                  <label class="custom-control-label" for="guidDocno">No</label>
                </div>    
                    </div>
                    <div class="form-group">
                      <label>Does the organization has or have any guidance to refer-to on workplace contact tracing</label>
                         <div id="contTrac" class="custom-control custom-radio ">
                  <input type="radio" id="contTracyes" name="contTrac" class="custom-control-input" value="0"   >
                  <label class="custom-control-label" for="contTracyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="contTracno" name="contTrac" class="custom-control-input" value="1"  >
                  <label class="custom-control-label" for="contTracno">No</label>
                </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Has facility an established protocol for identifying and informing  employees of possible exposure to COVID-19 in the event an employee is confirmed to have COVID-19 infection?</label>
                         <div id="protocol" class="custom-control custom-radio ">
                  <input type="radio" id="protocolyes" name="protocol" class="custom-control-input" value="0"   >
                  <label class="custom-control-label" for="protocolyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="protocolno" name="protocol" class="custom-control-input" value="1"  >
                  <label class="custom-control-label" for="protocolno">No</label>
                </div>
                    </div>
                    <div class="form-group">
                      <label>Is there a guideline which showes how masks are to be wear in the workplace as recommended MOH/EPHI?</label>
                        <div id="moh" class="custom-control custom-radio ">
                  <input type="radio" id="mohyes" name="moh" class="custom-control-input" value="0"   >
                  <label class="custom-control-label" for="mohyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="mohno" name="protocol" class="custom-control-input" value="1"  >
                  <label class="custom-control-label" for="mohno">No</label>
                </div>
                    </div>
                  </div>
                </div>
                 --}}

                <div class=" row">
                 <label for="guidDoc" class=" col-form-label">Is/are there any guiding document(s) for employer on COVID-19 prevention and control considerations in the setting Policies, guidelines and tools</label>
   
                  <div id="guidDoc" class="custom-control custom-radio ">
                    <input type="radio" id="guidDocyes" name="guidDoc" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="guidDocyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="guidDocno" name="guidDoc" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="guidDocno">No</label>
                  </div>      

                </div>


                <div class=" row">
                  <label for="contTrac" class=" col-form-label "> Does the organization has or have any guidance to refer-to on workplace contact tracing</label>
                </div>
                <div class="row">

                  <div id="contTrac" class="custom-control custom-radio ">
                    <input type="radio" id="contTracyes" name="contTrac" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="contTracyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="contTracno" name="contTrac" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="contTracno">No</label>
                  </div>
                </div>

                <div class=" row">
                  <label for="protocol" class=" col-form-label">Has facility an established protocol for identifying and informing  employees of possible exposure to COVID-19 in the event an employee is confirmed to have COVID-19 infection? </label>
                </div>
                <div class="row">

                  <div id="protocol" class="custom-control custom-radio ">
                    <input type="radio" id="protocolyes" name="protocol" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="protocolyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="protocolno" name="protocol" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="protocolno">No</label>
                  </div>
                </div>

                <div class=" row">
                  <label for="moh" class=" col-form-label">is there a guideline which showes how masks are to be wear in the workplace as recommended MOH/EPHI?</label>
                </div>

                <div class="row">

                  <div id="noh" class="custom-control custom-radio ">
                    <input type="radio" id="mohyes" name="moh" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="mohyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="mohno" name="moh" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="mohno">No</label>
                  </div>
                </div>

              </section>

              <!-- Step 4 -->
              <h5>Monitoring and evaluation system</h5>
              <section style="padding-left: 30px;">
                <div class="clearfix" style="height: 5em;"> </div>
                <div class="row text-center ">
                  <h3 class="display-6 ">Monitoring and evaluation system</h3></br></br>
                </div>
                <div class="clearfix" > <hr></div>

               {{--  <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Are systems in place for employees to notify their supervisor if they develop symptoms while at home?</label>
                      <div id="systemsToNotify" class="custom-control custom-radio ">
                  <input type="radio" id="systemsToNotifyyes" name="systemsToNotify" class="custom-control-input" value="0"   >
                  <label class="custom-control-label" for="systemsToNotifyyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="systemsToNotifyno" name="systemsToNotify" class="custom-control-input" value="1"  >
                  <label class="custom-control-label" for="systemsToNotifyno">No</label>
                </div>
                    </div>
                  </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label>Has the facility implemented measures to ensure employees testing positive for COVID-19 complete an isolation period of at least 10 days prior to return to work?</label>
                     <div id="isolationPeriod" class="custom-control custom-radio ">
                  <input type="radio" id="isolationPeriodyes" name="isolationPeriod" class="custom-control-input" value="0"   >
                  <label class="custom-control-label" for="isolationPeriodyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="isolationPeriodno" name="isolationPeriod" class="custom-control-input" value="1"  >
                  <label class="custom-control-label" for="isolationPeriodno">No</label>
                </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>For in-person meetings that must take place, are visitor logs and attendance records completed in the event contact tracing is necessary at a later date?</label>
                      <div id="inpersonMettings" class="custom-control custom-radio ">
                  <input type="radio" id="inpersonMettingsyes" name="inpersonMettings" class="custom-control-input" value="0"   >
                  <label class="custom-control-label" for="inpersonMettingsyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="inpersonMettingsno" name="inpersonMettings" class="custom-control-input" value="1"  >
                  <label class="custom-control-label" for="inpersonMettingsno">No</label>
                </div>
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Are employees being reminded to monitor and immediately report any signs and/or symptoms they develop while at work to their supervisor?</label>
                      <div id="reportsign" class="custom-control custom-radio ">
                  <input type="radio" id="reportsignyes" name="reportsign" class="custom-control-input" value="0"   >
                  <label class="custom-control-label" for="reportsignyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="reportsignno" name="reportsign" class="custom-control-input" value="1"  >
                  <label class="custom-control-label" for="reportsignno">No</label>
                </div>
                    </div>
                  </div>
                </div> --}}
                <div class="row">
                  <label for="systemsToNotify" class=" col-form-label">Are systems in place for employees to notify their supervisor if they develop symptoms while at home?</label>
                </div>
                <div class="form-group row">
                  
                  <div id="systemsToNotify" class="custom-control custom-radio ">
                    <input type="radio" id="systemsToNotifyyes" name="systemsToNotify" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="systemsToNotifyyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="systemsToNotifyno" name="systemsToNotify" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="systemsToNotifyno">No</label>
                  </div>
                </div> 


               

                <div class="row">
                  <label for="isolationPeriod" class=" col-form-label">Has the facility implemented measures to ensure employees testing positive for COVID-19 complete an isolation period of at least 10 days prior to return to work?</label>
                   {{--<div class="col-md-4">                          
                     <input class="form-control" type="text" name="isolationPeriod" id="isolationPeriod" value="{{ $value->isolationPeriod }}"> --}}
                </div>

                <div class="form-group row">
                    
                  <div id="isolationPeriod" class="custom-control custom-radio ">
                    <input type="radio" id="isolationPeriodyes" name="isolationPeriod" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="isolationPeriodyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="isolationPeriodno" name="isolationPeriod" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="isolationPeriodno">No</label>
                  </div>
                </div> 

                {{-- </div> --}}

                <div class="form-group row">
                  <label for="inpersonMettings" class=" col-form-label">For in-person meetings that must take place, are visitor logs and attendance records completed in the event contact tracing is necessary at a later date?</label>
                   <div class="col-md-4">                          
                    {{-- <input class="form-control" type="text" name="inpersonMettings" id="inpersonMettings" value="{{ $value->inpersonMettings }}"> --}}
                  </div>
                </div>

                <div class="form-group row">
                  
                  <div id="systemsToNotify" class="custom-control custom-radio ">
                    <input type="radio" id="inpersonMettingsyes" name="inpersonMettings" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="inpersonMettingsyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="inpersonMettingsno" name="inpersonMettings" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="inpersonMettingsno">No</label>
                  </div>
                </div>

              </section>

               <!-- Step 5 -->
              <h5> Preventive and control systems( business operations)</h5>
              <section style="padding-left: 30px;">
                <div class="clearfix" style="height: 5em;"> </div>
                <div class="row text-center ">
                  <h3 class="display-6 ">Preventive and control systems( business operations)</h3></br></br>
                </div>
                <div class="clearfix" > <hr></div>
                {{-- 
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Are employees who have symptoms (i.e., fever, cough, shortness of breath, body aches, chills, loss of taste/smell, chills, etc.) instructed to stay home?</label>
                       <div id="empWithSypm" class="custom-control custom-radio ">
                  <input type="radio" id="empWithSypmyes" name="empWithSypm" class="custom-control-input" value="0"  >
                  <label class="custom-control-label" for="empWithSypmyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="empWithSypmno" name="empWithSypm" class="custom-control-input" value="1" >
                  <label class="custom-control-label" for="empWithSypmno">No</label>
                </div>
                    </div>
                    <div class="form-group">
                      <label>Are employees being screened upon arrival at the facility for fever (>38°c) and other symptoms of COVID-19? And become sick during the day being immediately separated from other employees, customers, and visitors and sent home?</label>
                         <div id="empSick" class="custom-control custom-radio ">
                    <input type="radio" id="empSickreg" name="empSick" class="custom-control-input" value="1"  >
                    <label class="custom-control-label" for="empSickreg">Regularly</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="empSicksome" name="empSick" class="custom-control-input" value="2" >
                  <label class="custom-control-label" for="empSicksome">Sometimes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="empSicknev" name="empSick" class="custom-control-input" value="3" >
                  <label class="custom-control-label" for="empSicknev">Never</label>
                </div>
                    </div>
                    <div class="form-group">
                      <label>Have employees been educated about steps they can take to protect themselves at work and at home as well as those with serious chronic medical conditions are at higher risk for complications?</label>
                       <div id="educatedAboutSteps" class="custom-control custom-radio ">
                  <input type="radio" id="educatedAboutStepsall" name="educatedAboutSteps" class="custom-control-input" value="1"  >
                  <label class="custom-control-label" for="educatedAboutStepsall">All</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="educatedAboutStepspart" name="educatedAboutSteps" class="custom-control-input" value="2" >
                  <label class="custom-control-label" for="educatedAboutStepspart">Partliy</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="educatedAboutStepsnon" name="educatedAboutSteps" class="custom-control-input" value="3" >
                  <label class="custom-control-label" for="educatedAboutStepsnon">None</label>
                </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Have employees been educated about how to practice social distancing at work by avoiding large gatherings and maintaining distance (approximately 6 feet or 2 meters) from others when possible?</label>
                      <div id="educatedAboutSocialD" class="custom-control custom-radio ">
                  <input type="radio" id="educatedAboutSocialDyes" name="educatedAboutSocialD" class="custom-control-input" value="0"  >
                  <label class="custom-control-label" for="educatedAboutSocialDyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="educatedAboutSocialDno" name="educatedAboutSocialD" class="custom-control-input" value="1" >
                  <label class="custom-control-label" for="educatedAboutSocialDno">No</label>
                </div>
                    </div>
                     <div class="form-group">
                      <label>If visitors are necessary, are potential visitors screened prior to entry for fever and respiratory symptoms, restricting entry for those with symptoms?</label>
                      <div id="visitors" class="custom-control custom-radio ">
                  <input type="radio" id="visitorsyes" name="visitors" class="custom-control-input" value="0"  >
                  <label class="custom-control-label" for="visitorsyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="visitorsno" name="visitors" class="custom-control-input" value="1" >
                  <label class="custom-control-label" for="visitorsno">No</label>
                </div>
                    </div>
                     <div class="form-group">
                      <label>>Have you trained employees on the use of cloth/other face masks and other personal protective equipment (PPE)? Training should include when to use PPE, what PPE is necessary, how to properly don (put on), use, and doff PPE, and how to properly dispose of PPE.</label>
                      <div id="trainEmpOnUse" class="custom-control custom-radio ">
                  <input type="radio" id="trainEmpOnUseyes" name="trainEmpOnUse" class="custom-control-input" value="0"  >
                  <label class="custom-control-label" for="trainEmpOnUseyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="trainEmpOnUseno" name="trainEmpOnUse" class="custom-control-input" value="1" >
                  <label class="custom-control-label" for="trainEmpOnUseno">No</label>
                </div>
                    </div>
                  </div>
                </div> --}}

                <div class="row">
                  <label for="empWithSypm" class=" col-form-label">Are employees who have symptoms (i.e., fever, cough, shortness of breath, body aches, chills, loss of taste/smell, chills, etc.) instructed to stay home?</label>
                </div>
                
                <div class="row">
                  <div id="empWithSypm" class="custom-control custom-radio ">
                    <input type="radio" id="empWithSypmyes" name="empWithSypm" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="empWithSypmyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="empWithSypmno" name="empWithSypm" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="empWithSypmno">No</label>
                  </div>
                </div>

                <div class="row">
                  <label for="empSick" class=" col-form-label">Are employees being screened upon arrival at the facility for fever (>38°c) and other symptoms of COVID-19? And become sick during the day being immediately separated from other employees, customers, and visitors and sent home?</label>
                </div>

                <div class=" row">
                  <div id="empSick" class="custom-control custom-radio ">
                      <input type="radio" id="empSickreg" name="empSick" class="custom-control-input" value="1">
                      <label class="custom-control-label" for="empSickreg">Regularly</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="empSicksome" name="empSick" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="empSicksome">Sometimes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="empSicknev" name="empSick" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="empSicknev">Never</label>
                  </div>
                </div>

                 <div class="row">
                  <label for="educatedAboutSteps" class=" col-form-label">Have employees been educated about steps they can take to protect themselves at work and at home as well as those with serious chronic medical conditions are at higher risk for complications?</label>
                 </div> 

                <div class=" row">
                  <div id="educatedAboutSteps" class="custom-control custom-radio ">
                    <input type="radio" id="educatedAboutStepsall" name="educatedAboutSteps" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="educatedAboutStepsall">All</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="educatedAboutStepspart" name="educatedAboutSteps" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="educatedAboutStepspart">Partliy</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="educatedAboutStepsnon" name="educatedAboutSteps" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="educatedAboutStepsnon">None</label>
                  </div>
                </div>

                 <div class="row">
                  <label for="educatedAboutSocialD" class=" col-form-label">Have employees been educated about how to practice social distancing at work by avoiding large gatherings and maintaining distance (approximately 6 feet or 2 meters) from others when possible?</label>
                 </div> 

                <div class=" row">
                  <div id="educatedAboutSocialD" class="custom-control custom-radio ">
                    <input type="radio" id="educatedAboutSocialDyes" name="educatedAboutSocialD" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="educatedAboutSocialDyes">All</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="educatedAboutSocialDno" name="educatedAboutSocialD" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="educatedAboutSocialDno">Partly</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="educatedAboutSocialDnone" name="educatedAboutSocialD" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="educatedAboutSocialDnone">None</label>
                  </div>
                </div>

                <div class="row">
                  <label for="visitors" class=" col-form-label">If visitors are necessary, are potential visitors screened prior to entry for fever and respiratory symptoms, restricting entry for those with symptoms?</label>
                </div> 
                <div class="row">
                   <div id="visitors" class="custom-control custom-radio ">
                    <input type="radio" id="visitorsyes" name="visitors" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="visitorsyes">Regularly</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="visitorssometimes" name="visitors" class="custom-control-input" value="2">
                    <label class="custom-control-label" for="visitorssometimes">Sometimes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="visitorsno" name="visitors" class="custom-control-input" value="3">
                    <label class="custom-control-label" for="visitorsno">No</label>
                  </div>
                </div>
                  
                <div class="row">

                  <label for="trainEmpOnUse" class=" col-form-label">Have you trained employees on the use of cloth/other face masks and other personal protective equipment (PPE)? Training should include when to use PPE, what PPE is necessary, how to properly don (put on), use, and doff PPE, and how to properly dispose of PPE.</label>
                </div>
                <div class=" row">
                  <div id="trainEmpOnUse" class="custom-control custom-radio ">
                    <input type="radio" id="trainEmpOnUseyes" name="trainEmpOnUse" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="trainEmpOnUseyes">Yes</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="trainEmpOnUseno" name="trainEmpOnUse" class="custom-control-input" value="1">
                    <label class="custom-control-label" for="trainEmpOnUseno">No</label>
                  </div>
                </div>
              </section>
              <!-- Step 6 -->
              <h5>Risk and  Suggestion </h5>

              <section style="padding-left: 30px;">
                <div id="print_me">
                  <div class="clearfix" style="height: 7em;"> </div>
                  <div class="row text-center ">
                    <h3 class="display-6 ">Your campany was assessed and got this advice</h3></br></br>
                  </div>
                  <div class="clearfix" > <hr></div>

                  <h4 id="ass_date">Result <small>(<script> document.getElementById("ass_date").innerHTML = new Date().toDateString(); </script>)</small></h4>

                  <div class="col-sm-12 col-md-12 mb-30">
                    <div class="">
                      <div class="card-header">
                        Summary
                      </div>
                      <div class="card-body">
                        <blockquote class="blockquote mb-0">
                          <p id= "sum">
                            
                          </p>
                          <footer class="blockquote-footer">Summary of Your Input <cite title="Source Title"></cite></footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>


                  <div class="col-sm-12 col-md-12 mb-30">
                    <div class="">
                      <div class="card-header">
                        risk Value
                      </div>
                      <div class="card-body">
                        <blockquote class="blockquote mb-0">
                          <p class="text-blue text-small"> Based on your inpute we calculated your enviroment risk to covid-19. </p>
                          <p id= "ris">
                            <h4 id="infection_result" class="h6"></h4>
                            <h4 id="hospitalization_result" class="h6"></h4>
                            <h4 id="death_result" class="h6"></h4>
                            
                          </p>
                          <footer class="blockquote-footer">Over All Risk Value<cite title="Source Title"></cite></footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>



                    <div class="col-sm-12 col-md-12 mb-30">
                    <div class="">
                      <div class="card-header">
                        Our Advise
                      </div>
                      <div class="card-body">
                        <blockquote class="blockquote mb-0">
                          <p id= "adv"></p>
                          <footer class="blockquote-footer">Be Safe<cite title="Source Title"></cite></footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>

                  
                 {{--  <p >

                    
                    <h4 id="infection_result" class="h6"></h4>
                    <h4 id="hospitalization_result" class="h6"></h4>
                    <h4 id="death_result" class="h6"></h4>
                    <hr>
                    <h4>our advice </h4>
                  </p> --}}
                </div>

              </section>
             
            </form>
          </div>


</div>
</div>
<script type="text/javascript">
  function calculate_ri() {
    //alert('called');
/*    'typeSetting' => 'required',
    'avgSpace' => 'required',
    'popDen' => 'required',
    'noIndividual'  => 'required',
    'noFemale'  => 'required',
    'noDiag'  => 'required',
    'noAgeGreter'  => 'required',
    'guidDoc'  => 'required',
    'contTrac'  => 'required',
    'protocol'  => 'required',
    'moh'  => 'required',
    'empWithSypm'  => 'required',
    'empSick'  => 'required',
    'educatedAboutSteps'  => 'required',
    'educatedAboutSocialD'  => 'required',
    'visitors'  => 'required',
    'trainEmpOnUse'  => 'required',
    'covidCoordinator'  => 'required',
    'increasePhysicalSpace'  => 'required',
    'increasePhysicalSpaceBetween' => 'required',
    'adquatePpe'  => 'required',
    'provideTissues'  => 'required',
    'handSani'  => 'required',
    'hungPosters'  => 'required',
    'cleanAndDisinfect'  => 'required',
    'disposableWipes'  => 'required',
    'workplaceClean'  => 'required', 
    'systemsToNotify' => 'required',
    'isolationPeriod' => 'required',
    'inpersonMettings' => 'required', input[name="email"]*/

    typeSetting = $('select[name="typeSetting"] option:selected').text();
    //alert(typeSetting);
    avgSpace =  $('input[name="avgSpace"]').val();
    //alert(avgSpace);
    popDen = $('input[name="popDen"]').val();
    noIndividual = $('input[name="noIndividual"]').val();
    noFemale = $('input[name="noFemale"]').val();
    noDiag = $('input[name="noDiag"]').val();
    noAgeGreter = $('input[name="noAgeGreter"]').val();
    guidDoc = $('input[name="guidDoc"]').val();
    contTrac = $('input[name="contTrac"]').val();
    protocol = $('input[name="protocol"]').val();
    moh = $('input[name="moh"]').val();
    empWithSypm = $('input[name="empWithSypm"]').val();
    empSick = $('input[name="empSick"]');
    educatedAboutSteps = $('input[name="educatedAboutSteps"]').val();
    educatedAboutSocialD = $('input[name="educatedAboutSocialD"]').val();
    visitors = $('input[name="visitors"]').val();
    trainEmpOnUse = $('input[name="trainEmpOnUse"]').val();
    covidCoordinator = $('input[name="increasePhysicalSpace"]covidCoordinator').val();
    increasePhysicalSpace = $('input[name=""]').val();
    increasePhysicalSpaceBetween = $('input[name="increasePhysicalSpaceBetween"]').val();
    adquatePpe = $('input[name="adquatePpe"]').val();
    provideTissues = $('input[name=""]provideTissues').val();
    handSani = $('input[name="handSani"]').val();
    hungPosters = $('input[name="hungPosters"]').val();
    cleanAndDisinfect = $('input[name="cleanAndDisinfect"]').val();
    disposableWipes = $('input[name="disposableWipes"]').val();
    workplaceClean = $('input[name="workplaceClean"]').val(); 
    systemsToNotify = $('input[name="systemsToNotify"]').val();
    isolationPeriod = $('input[name="isolationPeriod"]').val();
    inpersonMettings = $('input[name="inpersonMettings"]').val();

    ri_infection = 0.0;
    ri_hospitalization = 0.0;
    ri_death = 0.0;

      if(typeSetting == "other"){
            ri_infection += 0.0;
        }else if (typeSetting == "None health related Office") {
            ri_infection += 0.14;
        }else if (typeSetting == "Health facility") {
            ri_infection += 0.29;
        }else if (typeSetting == "Covid-19 treatment centers") {
            ri_infection += 0.43;
        }else if (typeSetting == "Schools") {
            ri_infection += 0.57;
        }else if (typeSetting == "Stadium, Gym") {
            ri_infection += 0.71;
        }else if (typeSetting == "Churches") {
            ri_infection += 0.86;
        }else if (typeSetting == "Bars, Restaurants") {
            ri_infection +=1.0;
        }

        if(avgSpace < 2){
            ri_infection += 1.0;
        }else if (avgSpace <= 4) {
            ri_infection += 0.5;
        }else if (avgSpace <= 5) {
            ri_infection += 0.0;
        }

        if(popDen <= 5){
            ri_infection += 0.0;
        }else if (popDen <= 10) {
            ri_infection += 0.5;
        }else if (popDen > 10) {
            ri_infection += 1.0;
        }
        // *** draft 2 
        if(noIndividual < 20){
            ri_infection += 0.0;
        }else if (noIndividual <= 50) {
            ri_infection += 0.5;
        }else if (noIndividual > 50) {
            ri_infection += 1.0;
        }

        if(((noFemale/noIndividual)*100) < 50){
            ri_infection += 0.0;
            ri_hospitalization += 0.0;
            ri_death += 0.0;
        }else if (((noFemale/noIndividual)*100) >= 50) {
            ri_infection += 0.5;
            ri_hospitalization += 1.0;
            ri_death += 1.0;
        }

        if(noDiag == 0){
            ri_infection += 0.0;
            ri_hospitalization += 0.0;
            ri_death += 0.0;
        }else if (((noDiag/noIndividual)*100) < 5) {
            ri_infection += 0.33;
            ri_hospitalization += 0.33;
            ri_death += 0.33;
        }else if (((noDiag/noIndividual)*100) <= 20) {
            ri_infection += 0.67;
            ri_hospitalization += 0.67;
            ri_death += 0.67;
        }else if (((noDiag/noIndividual)*100) > 20) {
            ri_infection += 1.0;
            ri_hospitalization += 1.0;
            ri_death += 1.0;
        }

        if(noAgeGreter == 0){
            ri_infection += 0.0;
            ri_hospitalization += 0.0;
            ri_death += 0.0;
        }else if (((noAgeGreter/noIndividual)*100) < 5) {
            ri_infection += 0.33;
            ri_hospitalization += 0.33;
            ri_death += 0.33;
        }else if (((noAgeGreter/noIndividual)*100) <= 20) {
            ri_infection += 0.67;
            ri_hospitalization += 0.67;
            ri_death += 0.67;
        }else if (((noAgeGreter/noIndividual)*100) > 20) {
            ri_infection += 1.0;
            ri_hospitalization += 1.0;
            ri_death += 1.0;
        }

        if(covidCoordinator == 0){
            ri_infection += 0.0;
        }else if (covidCoordinator == 1) {
            ri_infection += 1.0;
        }

        if(increasePhysicalSpace == 0){
            ri_infection += 0.0;
        }else if (increasePhysicalSpace == 1) {
            ri_infection += 1.0;
        }

        if(increasePhysicalSpaceBetween == 0){
            ri_infection += 0.0;
        }else if (increasePhysicalSpaceBetween == 1) {
            ri_infection += 1.0;
        }

        if(adquatePpe == 1){
            ri_infection += 0.0;
        }else if (adquatePpe == 2) {
            ri_infection += 0.5;
        }else if (adquatePpe == 3) {
            ri_infection += 1.0;
        }

        if(provideTissues == 0){
            ri_infection += 0.0;
        }else if (provideTissues == 1) {
            ri_infection += 1.0;
        }

        if(handSani == 0){
            ri_infection += 0.0;
        }else if (handSani == 1) {
            ri_infection += 1.0;
        }

        if(hungPosters == 0){
            ri_infection += 0.0;
        }else if (hungPosters == 1) {
            ri_infection += 1.0;
        }

        if(cleanAndDisinfect == 0){
            ri_infection += 0.0;
        }else if (cleanAndDisinfect == 1) {
            ri_infection += 1.0;
        }

        if(disposableWipes == 0){
            ri_infection += 0.0;
        }else if (disposableWipes == 1) {
            ri_infection += 1.0;
        }

        if(workplaceClean == 0){
            ri_infection += 0.0;
        }else if (workplaceClean == 1) {
            ri_infection += 1.0;
        }

        // *** draft 3
        if(guidDoc == 0){
            ri_infection += 0.0;
        }else if (guidDoc == 1) {
            ri_infection += 1.0;
        }

        if(contTrac == 0){
            ri_infection += 0.0;
        }else if (contTrac == 1) {
            ri_infection += 1.0;
        }

        if(protocol == 0){
            ri_infection += 0.0;
        }else if(protocol == 1){
            ri_infection += 1.0;
        }

        if(noh == 0){
            ri_infection += 0.0;
        }else if(noh == 1){
            ri_infection += 1.0;
        }
        // ** draft 6

        if(systemsToNotify == 0){
            ri_infection += 0.0;
        }else if(systemsToNotify == 1){
            ri_infection += 1.0;
        }

        if(isolationPeriod == 0){
            ri_infection += 0.0;
        }else if(isolationPeriod == 1){
            ri_infection += 1.0;
        }

        if(inpersonMettings == 0){
            ri_infection += 0.0;
        }else if(inpersonMettings == 1){
            ri_infection += 1.0;
        }
        //** draft
        if(empWithSypm == 0){
            ri_infection += 0.0;
            ri_hospitalization += 0.0;
            ri_death += 0.0;
        }else if (empWithSypm == 1) {
            ri_infection += 1.0;
            ri_hospitalization += 1.0;
            ri_death += 1.0;
        }

        if(empSick == 1){
            ri_infection += 0.0;
            ri_hospitalization += 0.0;
            ri_death += 0.0;
        }else if (empSick == 2) {
            ri_infection += 0.5;
            ri_hospitalization += 0.5;
            ri_death += 0.5;
        }else if (empSick == 3) {
            ri_infection += 1.0;
            ri_hospitalization += 1.0;
            ri_death += 1.0;
        }

        if(educatedAboutSteps == 1){
            ri_infection += 0.0;
        }else if (educatedAboutSteps == 2) {
            ri_infection += 0.5;
        }else if (educatedAboutSteps == 3) {
            ri_infection += 1.0;
        }

        if(educatedAboutSocialD == 1){
            ri_infection += 0.0;
        }else if (educatedAboutSocialD == 2) {
            ri_infection += 0.5;
        }else if (educatedAboutSocialD == 3) {
            ri_infection += 1.0;
        }

        if(visitors == 1){
            ri_infection += 0.0;
        }else if (visitors == 2) {
            ri_infection += 0.5;
        }else if (visitors == 3) {
            ri_infection += 1.0;
        }

        if(visitors == 0){
            ri_infection += 0.0;
        }else if (visitors == 1) {
            ri_infection += 1.0;
        }

        if(ri_infection < 8){
            level_ri_infection = "Low"; inf_color = "light";
        }else if (ri_infection < 15) {
            level_ri_infection = "Moderate";  inf_color = "info";
        }else if (ri_infection < 22) {
            level_ri_infection = "High"; inf_color = "warning";
        }else if (ri_infection >= 22) {
            level_ri_infection = "Very High"; inf_color = "danger";
        }
        else{
            level_ri_infection = "no level";
        }

        if(ri_hospitalization < 2.5){
            level_ri_hospitalization = "Low"; hos_color = "light";
        }else if (ri_hospitalization < 4.5) {
            level_ri_hospitalization = "Moderate"; hos_color = "info";
        }else if (ri_hospitalization < 7) {
            level_ri_hospitalization = "High"; hos_color = "warning";
        }else if (ri_hospitalization >= 7) {
            level_ri_hospitalization = "Very High"; hos_color = "danger";
        }

        if(ri_death < 2.5){
            level_ri_death = "Low"; dea_color = "light";
        }else if (ri_death < 4.5) {
            level_ri_death = "Moderate"; dea_color = "info";
        }else if (ri_death < 7) {
            level_ri_death = "High"; dea_color = "warning";
        }else if (ri_death >= 7) {
            level_ri_death = "Very High"; dea_color = "danger";
        }

        document.getElementById('infection_result').innerHTML = "your overall risk to be <b>infected</b> with covid-19 is <b>"+ri_infection+"</b>, it means that you have <span class='badge badge-pill badge-"+inf_color+"'>"+level_ri_infection+"</span> vulnerablity for <b>infection</b>. ";
        document.getElementById('hospitalization_result').innerHTML = "your overall risk to be <b>hospitalized</b> with covid-19 is <b>"+ri_hospitalization+"</b>, it means that you have <span class='badge badge-pill badge-"+hos_color+"'>"+level_ri_hospitalization+"</span> vulnerablity for <b>hospitalization</b>";
        document.getElementById('death_result').innerHTML = "your overall risk of <b>mortality</b> due to covid-19 is <b>"+ri_death+"</b>, it means that you have <span class='badge badge-pill badge-"+dea_color+"'>"+level_ri_death+"</span> risk of <b>mortality</b>";



      /*  
your overall risk to be infected with covid-19 is 00 It means that you have xxx vulnerablity for infection 
your overall risk to be hospitalized with covid-19 is 00 it means that your have xxx vulnerablity for hospitalization
your overall risk of mortality due to covid-19 is 00 it means that your have xxx risk of mortality

      Your company employees risk for infection is : 
                        <span class="badge badge-pill badge-light">Moderate</span>
                        <span class="badge badge-pill badge-info">Moderate</span>
                        <span class="badge badge-pill badge-warning">Moderate</span>
                        <span class="badge badge-pill badge-danger">Moderate</span>

        level_ri_death+ level_ri_hospitalization+level_ri_infection);*/


  }
</script>
<script src="{{ asset('src/plugins/jquery-steps/jquery.steps.js') }}"></script>
  <script src="{{ asset('vendors/scripts/steps-setting.js') }}"></script>
  <script src="{{ asset('vendors/scripts/layout-settings.js') }}"></script>
 <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/jquery-steps/jquery.steps.css') }}">

@endsection