@extends('inc.layout')

@section('nave')

@include('inc.navebar')

@endsection

@section('sidebar')

@include('inc.sidebar')

@endsection

{{-- 
  +"id": 1
  +"typeSetting": 34.0
  +"avgSpace": 80.0
  +"popDen": 43.0
  +"noIndividual": 45.0
  +"noMale": 78.0
  +"noFemale": 78.0
  +"noDiag": 67.0
  +"noAgeGreter": 43.0
  +"guidDoc": null
  +"contTrac": null
  +"protocol": null
  +"moh": null
  +"empWithSypm": null
  +"empSick": null
  +"educatedAboutSteps": null
  +"educatedAboutSocialD": null
  +"visitors": null
  +"trainEmpOnUse": null
  +"covidCoordinator": null
  +"increasePhysicalSpace": null
  +"increasePhysicalSpaceBetween": null
  +"adquatePpe": null
  +"provideTissues": null
  +"handSani": null
  +"hungPosters": null
  +"cleanAndDisinfect": null
  +"disposableWipes": null
  +"workplaceClean": null
  +"systemsToNotify": null
  +"isolationPeriod": null
  +"inpersonMettings": null
  +"status": 0
  +"userId": 24 
  --}}
@section('content')

<div class="pd-20 card-box mb-30">
@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><i class="icon-copy fa fa-check" aria-hidden="true"></i> Success !</strong> {{ $message }}.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
     </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger  alert-dismissible fade show">
        <strong><i class="icon-copy fa fa-cross" aria-hidden="true"></i> Whoops!</strong> There were some problems with your input.<br><br>
        <ul class="list-group">
            @foreach ($errors->all() as $error)
                <li class="list-group-item list-group-item-danger">{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
    </div>
@endif
@if(!isset($level_ri_infection))

 <form action="{{ route('office.store') }}" method="POST">
  @csrf
      
  {{-- ************ row 1 ***************** --}}
@foreach($settingvalues as $key=> $value)  
<input type="hidden" name="userid" value="{{ Auth::user()->id }}">
<input type="hidden" name="dataid" value="{{ $value->id }}">
<div class="progress" style="height: 25px;">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{$progress}}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><b>{{$progress}}%</b></div>
</div>
<div><hr></div>
<div class="row">

    {{-- ************ col 1-2 draft 1 ***************** --}}

    <div class="col-md-6 col-sm-12 d-flex">
   
      <div class="card card-body flex-fill bg-light">
          <div class="card-header">
            General information about the setting, Services type( HFs, nursing home)
          </div>
            <div class="card-body">
              <div class="form-group row">
                <label for="typeSetting" class="col-md-4 col-form-label text-right">Type of setting</label>
                <div class="col col-md-8">
                {{-- =IF(C5="other",0,
                IF(C5="None health related Office ",0.14,
                IF(C5="Health facility ",0.28,
                IF(C5="Covid-19 treatment centers ",0.42,
                IF(C5="schools",0.57,
                IF(C5="Stadium, Gym ",0.71,
                IF(C5="Churches",0.85,
                IF(C5="Bars, restaurants                           
                  <input class="form-control" type="text" name="typeSetting" id="typeSetting" value="{{ $value->typeSetting }} ">--}}
                  <select class="form-control" name="typeSetting" id="typeSetting">
                    <option value="Bars, Restaurants"@if($value->typeSetting === "Bars, Restaurants") selected="selected" @endif >Bars, Restaurants</option>
                    <option value="Churches"@if($value->typeSetting === "Churches") selected="selected" @endif>Churches</option>
                    <option value="Stadium, Gym"@if($value->typeSetting === "Stadium, Gym") selected="selected" @endif>Stadium, Gym</option>
                    <option value="Schools"@if($value->typeSetting === "Schools") selected="selected" @endif>Schools</option>
                    <option value="Covid-19 treatment centers"@if($value->typeSetting === "Covid-19 treatment centers") selected="selected" @endif>Covid-19 treatment centers</option>
                    <option value="Health facility"@if($value->typeSetting === "Health facility") selected="selected" @endif>Health facility</option>
                    <option value="None health related Office"@if($value->typeSetting === "None health related Office") selected="selected" @endif>None health related Office</option>
                    <option value="other"@if($value->typeSetting === "other") selected="selected" @endif>other</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="avgSpace" class=" col-md-4 col-form-label text-right">Average functional working/living space (m<sup>2</sup>)</label>
                <div class="col col-md-8">                          
                    <input class="form-control" type="number" name="avgSpace" id="avgSpace" value="{{ $value->avgSpace }}" >
                  {{-- <select class="form-control" name="avgSpace" id="avgSpace">
                    <option value="2m for 2 persons"@if($value->avgSpace === "2m for 2 persons") selected="selected" @endif >2m for 2 persons</option>
                    <option value="2m-4m for 2 person"@if($value->avgSpace === "2m-4m for 2 person") selected="selected" @endif>2m-4m for 2 person</option>
                    <option value=">=5m for 2 person"@if($value->avgSpace === ">=5m for 2 person") selected="selected" @endif>>=5m for 2 person</option>
                  </select> --}}
                </div>
              </div>
              <div class="form-group row">
                <label for="popDen" class=" col-md-4 col-form-label text-right">Population density per 10 m<sup>2</sup></label>

                <div class="col-md-8">                          
                    <input class="form-control" type="number" name="popDen" id="popDen" value="{{ $value->popDen }}">
                </div>
              </div>
   
              <div class="form-group text-right">
                <input type="submit" name="draft1" class="btn btn-primary" value="SAVE ">
                <!-- <button type="submit" name="draft" class="btn btn-primary">Save</button> -->
                <!-- <button type="clear" class="btn btn-danger">Discard</button> -->
              </div>
            </div>
      </div>
    </div>

                    
    {{-- ************ col 1-2 draft 2 ***************** --}}
               
    <div class="col-md-6 d-flex">
      <div class="card card-body flex-fill bg-info text-white">
        <div class="card-header">
          Genral information about individuals in the setting
        </div>
        <div class="card-body">

          <div class="form-group row">
            <label for="noIndividual" class=" col-md-4 col-form-label text-right">No of individuals in the setting</label>
            {{-- <input type="hidden" name="userid" value="{{ Auth::user()->id }}"> --}}
            <div class="col-md-8">                          
              <input class="form-control" type="number" name="noIndividual" id="noIndividual" value="{{ $value->noIndividual }}">
            </div>
          </div>

          {{-- <div class="form-group row">
            <label for="noMale" class=" col-md-4 col-form-label text-right">No of male individuals  in the setting</label>
            <div class="col-md-8">                          
              <input class="form-control" type="text" name="noMale" id="noMale" value="{{ $value->noMale }} ">
            </div>
          </div> --}}

          <div class="form-group row">
            <label for="noFemale" class=" col-md-4 col-form-label text-right">No of female individuals in the setting</label>
            <div class="col-md-8">                          
              <input class="form-control" type="number" name="noFemale" id="noFemale" value="{{ $value->noFemale }}">
            </div>
          </div>

          <div class="form-group row">
            <label for="noDiag" class=" col-md-4 col-form-label text-right">No of diagnosed individuals with co-morbid conditions </label>
            <div class="col-md-8">                          
              <input class="form-control" type="number" name="noDiag" id="noDiag" value="{{ $value->noDiag }}">
            </div>
          </div>
  
          <div class="form-group row">
            <label for="noAgeGreter" class="col-md-4 col-form-label text-right">Proportion of individuals in the setting with age >= 50 years</label>
            <div class="col-md-8">                          
              <input class="form-control" type="number" name="noAgeGreter" id="noAgeGreter" value="{{ $value->noAgeGreter }}">
            </div>
          </div>

          <div class="form-group text-right">
            <input type="submit" name="draft2" class="btn btn-primary" value="SAVE ">
            <!-- <button type="submit" name="draft" class="btn btn-primary">Save</button> -->
            <!-- <button type="clear" class="btn btn-danger">Discard</button> -->
          </div>
        
        </div>            
      </div>
   </div>
  </div>
{{--</form>  +++++++++++++++++++++  End of form ++++++++++++++++++++++++++++++++ --}}

<div class="clear-fix"><hr></div>
  



      <div class="row">
{{-- ************ col 1-2 draft 5 ***************** --}} 

        <div class="col-md-12 col-sm-12 d-flex ">
          <div class="card card-body flex-fill " style=" background-color: white;">
            <div class="card-header">
              Working/living environments
            </div>
            <div class="card-body">

              <div class="row">
                <label for="covidCoordinator" class=" col-form-label">Have you identified a workplace coordinator who will be responsible for COVID-19 issues and their impact at the workplace, who can also act as point of contact with the local health department?.</label>
              </div>

              <div class="form-group row">
                <div id="covidCoordinator" class="custom-control custom-radio ">
                  <input type="radio" id="covidCoordinatoryes" name="covidCoordinator" class="custom-control-input" value="0" 
                  @if($value->covidCoordinator ==='0')
                    checked="checked"

                  @endif
                   >
                  <label class="custom-control-label" for="covidCoordinatoryes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="covidCoordinatorno" name="covidCoordinator" class="custom-control-input" value="1" 
                  @if($value->covidCoordinator ==='1')
                    checked="checked"

                  @endif
                   >
                  <label class="custom-control-label" for="covidCoordinatorno">No</label>
                </div>
              </div>
              <div class="row">
                <label for="increasePhysicalSpace" class=" col-form-label">Have you increased physical space between employees at the worksite, including break areas and lunchrooms? Social distancing should be 6 feet or greater..</label>
              </div>
              <div class="form-group row">
                <div id="increasePhysicalSpace" class="custom-control custom-radio ">
                  <input type="radio" id="increasePhysicalSpaceyes" name="increasePhysicalSpace" class="custom-control-input" value="0"  
                  @if($value->increasePhysicalSpace ==='0')
                    checked="checked"

                  @endif
                   >
                  <label class="custom-control-label" for="increasePhysicalSpaceyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="increasePhysicalSpaceno" name="increasePhysicalSpace" class="custom-control-input" value="1" 
                  @if($value->increasePhysicalSpace ==='1')
                    checked="checked"

                  @endif
                   >
                  <label class="custom-control-label" for="increasePhysicalSpaceno">No</label>
                </div>
              </div>
              <div class="row">
                <label for="increasePhysicalSpaceBetween" class=" col-form-label">Have you increased physical space between employees and customers (e.g., drive through, partitions)?.</label>
              </div>

              <div class="form-group row">
                <div id="increasePhysicalSpaceBetween" class="custom-control custom-radio ">
                  <input type="radio" id="increasePhysicalSpaceBetweenyes" name="increasePhysicalSpaceBetween" class="custom-control-input" value="0"    
                  @if($value->increasePhysicalSpaceBetween ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="increasePhysicalSpaceBetweenyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="increasePhysicalSpaceBetweenno" name="increasePhysicalSpaceBetween" class="custom-control-input" value="1"     
                  @if($value->increasePhysicalSpaceBetween ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="increasePhysicalSpaceBetweenno">No</label>
                </div>
              </div>
              <div class="row">
                <label for="adquatePpe" class=" col-form-label">is there always adquate PPE (soap and water in the workplace or  alcohol-based hand sanitizer) at the institution? </label>
              </div>

              <div class="form-group row">
                <div id="adquatePpe" class="custom-control custom-radio ">
                  <input type="radio" id="adquatePpereg" name="adquatePpe" class="custom-control-input" value="1"       
                  @if($value->adquatePpe ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="adquatePpereg">Regularly</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="adquatePpesom" name="adquatePpe" class="custom-control-input" value="2"      
                  @if($value->adquatePpe ==='2')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="adquatePpesom">Sometimes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="adquatePpenev" name="adquatePpe" class="custom-control-input" value="3"      
                  @if($value->adquatePpe  ==='3')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="adquatePpenev">Never</label>
                </div>
              </div>
              <div class="row">
                <label for="provideTissues" class=" col-form-label">Do you provide tissues and no-touch disposal receptacles/trash cans throughout the facility?</label>
              </div>

              <div class="form-group row">
                <div id="gendprovideTissues" class="custom-control custom-radio ">
                  <input type="radio" id="provideTissuesyes" name="provideTissues" class="custom-control-input" value="0"       
                  @if($value->provideTissues ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="provideTissuesyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="provideTissuesno" name="provideTissues" class="custom-control-input" value="1"      
                  @if($value->provideTissues ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="provideTissuesno">No</label>
                </div>
              </div>
              <div class="row">
                <label for="handSani" class=" col-form-label">Have you placed hand sanitizers/handwash facilities in multiple locations to encourage hand hygiene?</label>
              </div>

              <div class="form-group row">
                <div id="handSani" class="custom-control custom-radio ">
                  <input type="radio" id="handSaniyes" name="handSani" class="custom-control-input" value="0"       
                  @if($value->handSani ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="handSaniyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="handSanino" name="handSani" class="custom-control-input" value="1"      
                  @if($value->handSani ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="handSanino">No</label>
                </div>
              </div>
              <div class="row">
                <label for="hungPosters" class=" col-form-label">Have you hung posters throughout the facility to encourage hand hygiene?</label>
              </div>

              <div class="form-group row">
                <div id="hungPosters" class="custom-control custom-radio">
                  <input type="radio" id="hungPostersyes" name="hungPosters" class="custom-control-input" value="0"       
                  @if($value->hungPosters ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="hungPostersyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="hungPostersno" name="hungPosters" class="custom-control-input" value="1"      
                  @if($value->hungPosters ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="hungPostersno">No</label>
                </div>
              </div>
              <div class="row">
                <label for="cleanAndDisinfect" class=" col-form-label">Does your workplace routinely clean and disinfect all frequently touched surfaces in the workplace, such as workstations, keyboards, telephones</label>
              </div>

              <div class="form-group row">
                <div id="cleanAndDisinfect" class="custom-control custom-radio ">
                  <input type="radio" id="cleanAndDisinfectyes" name="cleanAndDisinfect" class="custom-control-input" value="0"       
                  @if($value->cleanAndDisinfect ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="cleanAndDisinfectyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="cleanAndDisinfectno" name="cleanAndDisinfect" class="custom-control-input" value="1"      
                  @if($value->cleanAndDisinfect ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="cleanAndDisinfectno">No</label>
                </div>
              </div>
            

              <div class=" row">
                <label for="disposableWipes" class=" col-form-label">Do you provide disposable wipes so that commonly used surfaces like doorknobs, keyboards, remotes control, desks can be wiped down by employees before each use?</label>
                {{-- <div class="col-md-12 col-sm-12">                          
                  <input class="form-control" type="text" name="disposableWipes" id="disposableWipes" value="{{ $value->disposableWipes }}">
                </div> --}}
              </div>
                <div class="form-group row">
                <div id="disposableWipes" class="custom-control custom-radio ">
                  <input type="radio" id="disposableWipesyes" name="disposableWipes" class="custom-control-input" value="0"       
                  @if($value->disposableWipes ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="disposableWipesyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="disposableWipesno" name="disposableWipes" class="custom-control-input" value="1"      
                  @if($value->disposableWipes ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="disposableWipesno">No</label>
                </div>
              </div>

              <div class=" row">
                <label for="workplaceClean" class="col-form-label">Has your workplace made cleaning and disinfection after persons suspected/confirmed to have COVID-19 have been in the facility</label>
                {{-- <div class="col-md-12 col-sm-12">                          
                  <input class="form-control" type="text" name="workplaceClean" id="workplaceClean" value="{{ $value->workplaceClean }}">
                </div> --}}
              </div>
              <div class="form-group row">
                <div id="workplaceClean" class="custom-control custom-radio ">
                  <input type="radio" id="workplaceCleanyes" name="workplaceClean" class="custom-control-input" value="0"       
                  @if($value->workplaceClean ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="workplaceCleanyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="workplaceCleanno" name="workplaceClean" class="custom-control-input" value="1"      
                  @if($value->workplaceClean ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="workplaceCleanno">No</label>
                </div>
              </div>

              <div class="form-group text-right">
                <input type="submit" name="draft5" class="btn btn-primary" value="SAVE ">
                <!-- <button type="submit" name="draft" class="btn btn-primary">Save</button> -->
                <!-- <button type="clear" class="btn btn-danger">Discard</button> -->
              </div>
            </div>
          </div>
        </div>

      </div>

<div class="clear-fix"><hr></div>

    <div class="row">      

{{-- ************ col 1-2 draft 3 ***************** --}} 
      <div class="col-sm-6 d-flex ">

          <div class="card card-body flex-fill bg-info text-white">
            <div class="card-header">
              Policies, guidelines and tools
            </div>
            {{-- <input type="hidden" name="userid" value="{{ Auth::user()->id }}"> --}}
            <div class="card-body">
              <div class=" row">
               <label for="guidDoc" class=" col-form-label">Is/are there any guiding document(s) for employer on COVID-19 prevention and control considerations in the setting Policies, guidelines and tools</label>
 
                <div id="guidDoc" class="custom-control custom-radio ">
                  <input type="radio" id="guidDocyes" name="guidDoc" class="custom-control-input" value="0"       
                  @if($value->guidDoc ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="guidDocyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="guidDocno" name="guidDoc" class="custom-control-input" value="1"      
                  @if($value->guidDoc ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="guidDocno">No</label>
                </div>      

              </div>


              <div class=" row">
                <label for="contTrac" class=" col-form-label "> Does the organization has or have any guidance to refer-to on workplace contact tracing</label>
              </div>
              <div class="row">

                <div id="contTrac" class="custom-control custom-radio ">
                  <input type="radio" id="contTracyes" name="contTrac" class="custom-control-input" value="0"        
                  @if($value->contTrac ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="contTracyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="contTracno" name="contTrac" class="custom-control-input" value="1"       
                  @if($value->contTrac ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="contTracno">No</label>
                </div>
              </div>

              <div class=" row">
                <label for="protocol" class=" col-form-label">Has facility an established protocol for identifying and informing  employees of possible exposure to COVID-19 in the event an employee is confirmed to have COVID-19 infection? </label>
                {{-- <div class="col-md-12">                          
                  <input class="form-control" type="text" name="protocol" id="protocol" value="{{ $value->protocol }}">
                </div> --}}
              </div>
              <div class="row">

                <div id="protocol" class="custom-control custom-radio ">
                  <input type="radio" id="protocolyes" name="protocol" class="custom-control-input" value="0"        
                  @if($value->protocol ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="protocolyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="protocolno" name="protocol" class="custom-control-input" value="1"       
                  @if($value->protocol ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="protocolno">No</label>
                </div>
              </div>

              <div class=" row">
                <label for="moh" class=" col-form-label">is there a guideline which showes how masks are to be wear in the workplace as recommended MOH/EPHI?</label>
                {{-- <div class="col-md-12">                          
                  <input class="form-control" type="text" name="moh" id="moh" value="{{ $value->moh }}">
                </div> --}}
              </div>

              <div class="row">

                <div id="noh" class="custom-control custom-radio ">
                  <input type="radio" id="mohyes" name="moh" class="custom-control-input" value="0"        
                  @if($value->moh ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="mohyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="mohno" name="moh" class="custom-control-input" value="1"       
                  @if($value->moh ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="mohno">No</label>
                </div>
              </div>
              <div class="form-group"></div>

              <div class="form-group text-right">
                <input type="submit" name="draft3" class="btn btn-primary" value="SAVE ">
                <!-- <button type="submit" name="draft" class="btn btn-primary">Save</button> -->
                <!-- <button type="clear" class="btn btn-danger">Discard</button> -->
              </div>
         
            </div>
          </div>
        </div>

{{-- ************ col 1-2 draft 6 ***************** --}} 
        <div class="col-md-6 col-sm-12 d-flex ">
          <div class="card card-body flex-fill ">
            <div class="card-header">
              Monitoring and evaluation system
            </div>
            <div class="card-body">
              <div class="row">
                <label for="systemsToNotify" class=" col-form-label">Are systems in place for employees to notify their supervisor if they develop symptoms while at home?</label>
                 {{-- <div class="col-md-4">                          
                  <input class="form-control" type="text" name="systemsToNotify" id="systemsToNotify" value="{{ $value->systemsToNotify }}">
                </div> --}}
              </div>
              <div class="form-group row">
                
                <div id="systemsToNotify" class="custom-control custom-radio ">
                  <input type="radio" id="systemsToNotifyyes" name="systemsToNotify" class="custom-control-input" value="0"       
                  @if($value->systemsToNotify ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="systemsToNotifyyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="systemsToNotifyno" name="systemsToNotify" class="custom-control-input" value="1"      
                  @if($value->systemsToNotify ==='1')
                    checked="checked"

                  @endif
                  >
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
                  <input type="radio" id="isolationPeriodyes" name="isolationPeriod" class="custom-control-input" value="0"       
                  @if($value->isolationPeriod ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="isolationPeriodyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="isolationPeriodno" name="isolationPeriod" class="custom-control-input" value="1"      
                  @if($value->isolationPeriod ==='1')
                    checked="checked"

                  @endif
                  >
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
                  <input type="radio" id="inpersonMettingsyes" name="inpersonMettings" class="custom-control-input" value="0"       
                  @if($value->inpersonMettings ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="inpersonMettingsyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="inpersonMettingsno" name="inpersonMettings" class="custom-control-input" value="1"      
                  @if($value->inpersonMettings ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="inpersonMettingsno">No</label>
                </div>
              </div>

              <div class="form-group text-right">
                <input type="submit" name="draft6" class="btn btn-primary" value="SAVE ">
                <!-- <button type="submit" name="draft" class="btn btn-primary">Save</button> -->
                <!-- <button type="clear" class="btn btn-danger">Discard</button> -->
              </div>

            </div>
          </div> 
        </div>


    </div>

<div class="clear-fix"><hr></div>        
      <div class="row">
{{-- ************ col 1-2 draft 4 ***************** --}}
        <div class="col-md-12 col-sm-12 d-flex ">
          <div class="card card-body flex-fill bg-light">
            <div class="card-header">
              Preventive and control systems( business operations)
            </div>

            <div class="card-body">
              <div class="row">
                <label for="empWithSypm" class=" col-form-label">Are employees who have symptoms (i.e., fever, cough, shortness of breath, body aches, chills, loss of taste/smell, chills, etc.) instructed to stay home?</label>
              </div>
              
              <div class="row">
                <div id="empWithSypm" class="custom-control custom-radio ">
                  <input type="radio" id="empWithSypmyes" name="empWithSypm" class="custom-control-input" value="0"         
                  @if($value->empWithSypm ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="empWithSypmyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="empWithSypmno" name="empWithSypm" class="custom-control-input" value="1"        
                  @if($value->empWithSypm ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="empWithSypmno">No</label>
                </div>
              </div>

              <div class="row">
                <label for="empSick" class=" col-form-label">Are employees being screened upon arrival at the facility for fever (>38°c) and other symptoms of COVID-19? And become sick during the day being immediately separated from other employees, customers, and visitors and sent home?</label>
              </div>

              <div class=" row">
                <div id="empSick" class="custom-control custom-radio ">
                    <input type="radio" id="empSickreg" name="empSick" class="custom-control-input" value="1"         
                  @if($value->empSick ==='1')
                    checked="checked"

                  @endif
                  >
                    <label class="custom-control-label" for="empSickreg">Regularly</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="empSicksome" name="empSick" class="custom-control-input" value="2"        
                  @if($value->empSick ==='2')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="empSicksome">Sometimes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="empSicknev" name="empSick" class="custom-control-input" value="3"        
                  @if($value->empSick  ==='3')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="empSicknev">Never</label>
                </div>
              </div>

               <div class="row">
                <label for="educatedAboutSteps" class=" col-form-label">Have employees been educated about steps they can take to protect themselves at work and at home as well as those with serious chronic medical conditions are at higher risk for complications?</label>
               </div> 

              <div class=" row">
                <div id="educatedAboutSteps" class="custom-control custom-radio ">
                  <input type="radio" id="educatedAboutStepsall" name="educatedAboutSteps" class="custom-control-input" value="1"         
                  @if($value->educatedAboutSteps ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="educatedAboutStepsall">All</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="educatedAboutStepspart" name="educatedAboutSteps" class="custom-control-input" value="2"        
                  @if($value->educatedAboutSteps ==='2')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="educatedAboutStepspart">Partliy</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="educatedAboutStepsnon" name="educatedAboutSteps" class="custom-control-input" value="3"        
                  @if($value->educatedAboutSteps === 3
                    )
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="educatedAboutStepsnon">None</label>
                </div>
              </div>

               <div class="row">
                <label for="educatedAboutSocialD" class=" col-form-label">Have employees been educated about how to practice social distancing at work by avoiding large gatherings and maintaining distance (approximately 6 feet or 2 meters) from others when possible?</label>
               </div> 

              <div class=" row">
                <div id="educatedAboutSocialD" class="custom-control custom-radio ">
                  <input type="radio" id="educatedAboutSocialDyes" name="educatedAboutSocialD" class="custom-control-input" value="1"         
                  @if($value->educatedAboutSocialD ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="educatedAboutSocialDyes">All</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="educatedAboutSocialDno" name="educatedAboutSocialD" class="custom-control-input" value="2"        
                  @if($value->educatedAboutSocialD ==='2')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="educatedAboutSocialDno">Partly</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="educatedAboutSocialDnone" name="educatedAboutSocialD" class="custom-control-input" value="3"        
                  @if($value->educatedAboutSocialD  ==='3')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="educatedAboutSocialDnone">None</label>
                </div>
              </div>

              <div class="row">
                <label for="visitors" class=" col-form-label">If visitors are necessary, are potential visitors screened prior to entry for fever and respiratory symptoms, restricting entry for those with symptoms?</label>
              </div> 
              <div class="row">
                 <div id="visitors" class="custom-control custom-radio ">
                  <input type="radio" id="visitorsyes" name="visitors" class="custom-control-input" value="1"         
                  @if($value->visitors ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="visitorsyes">Regularly</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="visitorssometimes" name="visitors" class="custom-control-input" value="2"        
                  @if($value->visitors ==='2')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="visitorssometimes">Sometimes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="visitorsno" name="visitors" class="custom-control-input" value="3"        
                  @if($value->visitors  ==='3')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="visitorsno">No</label>
                </div>
              </div>
                
              <div class="row">

                <label for="trainEmpOnUse" class=" col-form-label">Have you trained employees on the use of cloth/other face masks and other personal protective equipment (PPE)? Training should include when to use PPE, what PPE is necessary, how to properly don (put on), use, and doff PPE, and how to properly dispose of PPE.</label>
              </div>
              <div class=" row">
                <div id="trainEmpOnUse" class="custom-control custom-radio ">
                  <input type="radio" id="trainEmpOnUseyes" name="trainEmpOnUse" class="custom-control-input" value="0"         
                  @if($value->trainEmpOnUse ==='0')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="trainEmpOnUseyes">Yes</label>
                </div>
                <div class="custom-control custom-radio ">
                  <input type="radio" id="trainEmpOnUseno" name="trainEmpOnUse" class="custom-control-input" value="1"        
                  @if($value->trainEmpOnUse ==='1')
                    checked="checked"

                  @endif
                  >
                  <label class="custom-control-label" for="trainEmpOnUseno">No</label>
                </div>
              </div>

              <div class="form-group"></div>

              <div class="form-group text-right">
                <input type="submit" name="draft4" class="btn btn-primary" value="SAVE ">
                <!-- <button type="submit" name="draft" class="btn btn-primary">Save</button> -->
                <!-- <button type="clear" class="btn btn-danger">Discard</button> -->
              </div>
          
            </div>
          </div>
        </div>

      </div>
      <div class="clear-fix"><hr></div>
    <div class="form-group  text-right">
          
          <input type="submit" name="savedata" class="btn btn-primary" value="CALCULATE RISK ">
          <button type="clear" name="clerar" class="btn btn-danger">Discard</button>
        </div>
      </div> 
   @endforeach
<div class="clear-fix"><hr></div>  

        

@else

<div class="timeline-desc card-box">
  <div class="pd-20">
    {{-- <h4 class="mb-10 h4">Based on the data you intered your enviroment is assessed.</h4> --}}
      <div class="col-sm-12 col-md-12 mb-30">
                    <div class="">
                      <div class="card-header">
                        risk Value
                      </div>
                      <div class="card-body">
                        <blockquote class="blockquote mb-0">
                          <p class="text-blue text-small"> Based on your inpute we calculated your enviroment risk to covid-19. </p>
                          <p id= "ris">
                            
                            <h4 class="h6">
                              your overall risk to be infected with covid-19 is 00 It means that you have  
                              @if($level_ri_infection == 'Low')
                                <span class="badge badge-pill badge-light">{{ $level_ri_infection }}</span>
                              @elseif($level_ri_infection == 'Moderate')
                                <span class="badge badge-pill badge-info">{{ $level_ri_infection }}</span>
                              @elseif($level_ri_infection == 'High')
                                <span class="badge badge-pill badge-warning">{{ $level_ri_infection }}</span>
                              @elseif($level_ri_infection == 'Very High')
                                <span class="badge badge-pill badge-danger">{{ $level_ri_infection }}</span>
                              @endif
                               vulnerablity for infection
                            </h4>
                            <h4 class="h6">
                              your overall risk to be hospitalized with covid-19 is 00 it means that your have 
                              @if($level_ri_hospitalization == 'Low')
                                <span class="badge badge-pill badge-light">{{ $level_ri_hospitalization }}</span>
                              @elseif($level_ri_hospitalization == 'Moderate')
                                <span class="badge badge-pill badge-info">{{ $level_ri_hospitalization }}</span>
                              @elseif($level_ri_hospitalization == 'High')
                                <span class="badge badge-pill badge-warning">{{ $level_ri_hospitalization }}</span>
                              @elseif($level_ri_hospitalization == 'Very High')
                                <span class="badge badge-pill badge-danger">{{ $level_ri_hospitalization }}</span>
                              @endif 
                               vulnerablity for hospitalization
                            </h4>
                            <h4 class="h6">
                              your overall risk of mortality due to covid-19 is 00 it means that your have 
                              @if($level_ri_death == 'Low')
                                <span class="badge badge-pill badge-light">{{ $level_ri_death }}</span>
                              @elseif($level_ri_death == 'Moderate')
                                <span class="badge badge-pill badge-info">{{ $level_ri_death }}</span>
                              @elseif($level_ri_death == 'High')
                                <span class="badge badge-pill badge-warning">{{ $level_ri_death }}</span>
                              @elseif($level_ri_death == 'Very High')
                                <span class="badge badge-pill badge-danger">{{ $level_ri_death }}</span>
                              @endif
                               risk of mortality  
                            </h4>
                            
                          </p>
                          <footer class="blockquote-footer">Over All Risk Value<cite title="Source Title"></cite></footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
    <p>
  {{--                         if($ri_infection < 8){
  $level_ri_infection = "Low";
  }elseif ($ri_infection < 15) {
  $level_ri_infection = "Moderate";
  }elseif ($ri_infection < 22) {
  $level_ri_infection = "High";
  }elseif ($ri_infection >= 22) {
  $level_ri_infection = "Very High" 
  Primary Secondary Success Danger Warning Info Light Dark 
  your overall risk to be infected with covid-19 is 00 It means that you have xxx vulnerablity for infection 
your overall risk to be hospitalized with covid-19 is 00 it means that your have xxx vulnerablity for hospitalization
your overall risk of mortality due to covid-19 is 00 it means that your have xxx risk of mortality
  --}}
</p>
  </div>
</div>

<a href="{{ route('formdata') }}" class="btn btn-link"> new assessment</a>
@endif
 </form>

    </div>
  </div>

<!--- end row --->

</div>


@endsection