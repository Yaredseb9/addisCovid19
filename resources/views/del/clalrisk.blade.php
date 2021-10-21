<!-- <!DOCTYPE html>
<html>
<head>
  <!-- Basic Page Info -->
  <meta charset="utf-8">
  <title>covid Vulnereblity </title>

  <!-- Site favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
  <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-119386393-1');
  </script>
</head>
<body>


 <nav class="main-header navbar navbar-expand navbar-white navbar-light">

  <!-- Left navbar links -->
  <ul class="navbar-nav">

    <li class="nav-item d-none d-sm-inline-block">
      <h1> <img class="animation__shake" src="imgs/alp.jpg" alt="AlephTavLogo" class="rounded" height="100" width="100">
       Covid 19 Vulnerebility In <em> Addis Ababa </em></h1>

     </li>
     <!--  <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">

            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <ul class="navbar-nav">

        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Calculate risk</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>

      </ul>
      
      

    <!--   <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->
      <li class="nav-item d-none d-sm-inline-block">
        <a href="login.html" class="nav-link">Login</a>
      </li>
      <li>
        <i class="icon-copy fi-list"></i>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>




  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper" > -->
    <!-- Content Header (Page header) -->
   <!--  <div class="content-header">
      <div class="jumbotron jumbotron-fluid">
        <div class="container"> -->
<!-- form ------------------------->
<div class="container-fluid">
<div class="pd-ltr-20 xs-pd-20-10">
<div class="pd-24 card-box mb-30">
          <div class="clearfix">
            <h4 class="text-blue h4">Covid Risk </h4>
            <p class="mb-2">Input your information</p>
          </div>
          <div class="wizard-content">
            <form class="tab-wizard wizard-circle wizard">
              <h5>Personal Info</h5>
              <section>

                <!----row1-------------->
                <div class="row justify-content-center">
                  <!-----------col 1 ------>
  <!--                  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="colFormLabel" placeholder="col-form-label">
    </div>
  </div> -->
                  <div class="col-md-6">
                    <div class="form-group row">
                    <label class="col-sm-4 col-md-2 col-form-label">Gender</label>
                  <div class="custom-control custom-radio ">
                  <input type="radio" id="customRadio1" name="gender" class="custom-control-input" value="1">
                  <label class="custom-control-label" for="customRadio1">Male</label>
                  </div>
                  <div class="custom-control custom-radio ">
                    <input type="radio" id="customRadio2" name="gender" class="custom-control-input" value="0">
                    <label class="custom-control-label" for="customRadio2">Female</label>
                  </div>
                  </div>
                </div>
                  <!------------col 2 -------->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label for ="age" class="col-sm-4 col-form-label">Age</label>
            <div class="col-sm-4 col-md-10">
              <select class="custom-select col-6" name="age" id="age" data-style="btn-outline-secondary">
                <option selected="0">Choose...</option>
                <option value="1"> >=50 </option>
              <option value="0"> <50 </option>

              </select>
              </div>
                    </div>
                  </div>
                </div>
                <!-----------row 2----->
                <div class="row">
                  <!---------col 1 -------------->
                  <div class="col-md-4">
                    <div class="form-group row">
                    <label  for='weight' class="col-sm-4 col-form-label">Weight (In KG)</label>
            <input type="text"  name="weight" id="weight" data-style="btn-outline-secondary">
                    </div>
                  </div>

                  <!-----------col 2 ----------------> 
                  <div class="col-md-4">
                    <div class="form-group row">
                     <label  for="height" class="col-sm-4 col-form-label">Height (In CM)</label>
            <input type="text"  name= "height" id="height" onKeyPress="bmic()" onKeyUp="bmic()" data-style="btn-outline-secondary" >
                    </div>
                  </div>

                  <!------------col 3 -------------->
                  <div class="col-md-4">
                    <div class="form-group row ">
                     <label for ="bmi" class="col-sm-4 col-form-label">BMI (kg/m2)</label>
            <input type="text"  name="bmi" id="bmi" disabled>
          </div>
                  </div>
                
                </div>

                <!------------row 3 ------------------->
                <div class="row">
                  <!----------col 1 ------>
                  <div class="col-md-6">
                    <div class="form-group row">
                       <label class="col-sm-4 col-md-2 col-form-label">Occopation</label>
        <div class="col-sm-4 col-md-10">
          <select class="selectpicker col-6" name="occop" id="occop" data-style="btn-outline-secondary">
            <option selected="0">Choose...</option>
            <option value="1"> Helath Worker </option>
            <option value="0.8">Customer Service(eg. Bank,Hotel ..)</option>
            <option value="0.6">Daily Labour(eg. construction, guard,Cleaner ...)</option>
            <option value="0.4">Teacher</option>
            <option value="0.2">Office Worker</option>
            <option value="0">Other</option>
          </select>
        </div>
                  </div></div>
                  <!---------col2 ------------------->
                  <div class="col-md-6">
                    <div class="form-group row">
                      <label class="col-sm-4 col-md-2 col-form-label">Co morbidity</label>
       <div class="col-sm-4 col-md-10">
        <select class="selectpicker col-6" data-size="5" data-style="btn-outline-secondary" multiple data-max-options="6" name="como" id="como" multiple="multiple">
         <!--  <optgroup label="Illenses"> -->
          <option value = "1">NONE</option>
          <option  value = "1">HTN</option>
          <option  value = "1">DM</option>
          <option  value = "1">HIV</option>
                   <!--  </optgroup>
                    <optgroup label="Breads"> -->
                      <option  value = "1">TB</option>
                      <option  value = "1">CKD</option>
                      <option  value = "1">Cancer</option>
                      <!--   </optgroup> -->
                    </select>
                    </div>
                  </div>
                </div>
              </div>
               <div class="row">
                  <!-----------col 1 ------>
                  <div class="col-md-6">
                    <div class="form-group row">
                   
                   <label class="col-sm-4 col-md-2 col-form-label">Symptoms</label>
                   <div class="col-sm-4 col-md-6">
                    <select class="selectpicker " data-size="5" data-style="btn-outline-secondary" multiple data-max-options="6" name="symp" id="symp" multiple="multiple">
                      <!--   <optgroup label="Symptoms"> -->
                        <option  value = "0">No symptoms</option>
                        <option  value = "1">Fever</option>
                        <option  value = "1">Cough</option>
                        <option  value = "1">Sore throte</option>
                    <!-- </optgroup>
                      <optgroup label="Breads"> -->
                        <option  value = "1">Fatigue</option>
                        <option  value = "1">Muscle pain</option>
                        <option value = "1">Headeche</option>
                        <!--  </optgroup> -->
                      </select>
                    </div>
                  </div>
                </div>
                  <!------------col 2 -------->
                  <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-4 col-md-2 col-form-label">Wearing a mask</label>
                      <div class="col-sm-4 col-md-10">
                        <select class="selectpicker col-6" name="mask" id="mask" data-style="btn-outline-secondary">
                          <option selected="0">Choose...</option>
                          <option value="0.5">Sometimes</option>
                          <option value="0">Always</option>
                          <option value="1">I do not ware mask</option>

                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <!-----------col 1 ------>
                  <div class="col-md-6">
                    <div class="form-group row">
                   
                 <label class="col-sm-4 col-md-2 col-form-label"> Sanitize/Washing hand </label>
                        <div class="col-sm-4 col-md-10">
                          <select class="selectpicker col-6" name="sani" id="sani" data-style="btn-outline-secondary">
                            <option selected="0">Choose...</option>
                            <option value="0.5">Sometimes</option>
                            <option value="0">Always</option>
                            <option value="1">No</option>

                          </select>
                        </div>
                  </div>
                </div>
                  <!------------col 2 -------->
                  <div class="col-md-6">
                    <div class="form-group row">
                         <label class="col-sm-4 col-md-2 col-form-label">Keep Social Distancing</label>
                          <div class="col-sm-4 col-md-10">
                            <select class="selectpicker col-6" name="dist" id="dist" data-style="btn-outline-secondary">
                              <option selected="0">Choose...</option>
                              <option value="0.5">Sometimes</option>
                              <option value="0">Always</option>
                              <option value="1">I do not ware mask</option>

                            </select>
                          </div>
                  </div>
                </div>
              </div>

              <div class="row">
                  <!-----------col 1 ------>
                  <div class="col-md-6">
                    <div class="form-group row">
                   
                <label class="col-sm-4 col-md-2 col-form-label">Do you smoke</label>
                            <div class="col-sm-4 col-md-10">
                              <select class="selectpicker col-6" name="smoke" id="smoke" data-style="btn-outline-secondary">
                                <option selected="0">Choose...</option>
                                <option value="1">Regularliy</option>
                                <option value="0.5">sometimes</option>
                                <option value="0">No</option>

                              </select>
                            </div>
                  </div>
                </div>
                  <!------------col 2 -------->
                  <div class="col-md-6">
                    <div class="form-group row">
                         <label class="col-sm-4 col-md-2 col-form-label">Chew Khat</label>
                              <div class="col-sm-4 col-md-10">
                                <select class="selectpicker col-6" name="chat" id="chat" data-style="btn-outline-secondary"> 
                                  <option selected="0">Choose...</option>
                                  <option value="1">Regularliy</option>
                                  <option value="0.5">Sometimes</option>
                                  <option value="0">No</option>

                                </select>
                              </div>
                </div>
              </div></div>

              <div class="row">
                  <!-----------col 1 ------>
                  <div class="col-md-6">
                    <div class="form-group row">
                   
                 <label class="col-sm-4 col-md-2 col-form-label">Drink Alchol</label>
                                <div class="col-sm-4 col-md-10">
                                  <select class="selectpicker col-6" name="alc" id="alc" data-style="btn-outline-secondary">
                                    <option selected="0">Choose...</option>
                                    <option value="1">Regularliy</option>
                                    <option value="0.5">Sometimes</option>
                                    <option value="0">No</option>

                                  </select>
                                </div>
                  </div>
                </div>
                  <!------------col 2 -------->
                  <div class="col-md-6">
                    <div class="form-group row">
                         <input type="button" onClick="calrisk()" Value="Calculate" />
                         <span id='result'> </span>
                          </div>
                  </div>
                </div>
              </section>
              <!-- Step 2 -->
              <h5>Summary and Risk value</h5>
              <section>
                <div class="row clearfix">
                  <div class="col-sm-12 col-md-4 mb-30">
            <div class="card card-box">
              <div class="card-header">
                Summary
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p id= "sum"></p>
                  <footer class="blockquote-footer">Summary of Your personal Input <cite title="Source Title"></cite></footer>
                </blockquote>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 mb-30">
            <div class="card card-box">
              <div class="card-header">
                Risk Value
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p id= "ris"></p>
                  <footer class="blockquote-footer">Over All Risk Value<cite title="Source Title"></cite></footer>
                </blockquote>
              </div>
            </div>
          </div>
            <div class="col-sm-12 col-md-4 mb-30">
            <div class="card card-box">
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
            <div class="footer-wrap pd-20 mb-20 card-box">
            Aleph Tav </a>
          </div>
        </div>
      </div>
      <!-- js -->
      <script src="vendors/scripts/core.js"></script>
      <script src="vendors/scripts/script.min.js"></script>
      <script src="vendors/scripts/process.js"></script>
      <script src="vendors/scripts/layout-settings.js"></script>
      <script src="src/plugins/jquery-steps/jquery.steps.js"></script>
      <script src="vendors/scripts/steps-setting.js"></script>


<script>
  function bmic() {
    var w = parseFloat(document.getElementById("weight").value);
    var h = parseFloat(document.getElementById("height").value);
    var bmi = document.getElementById("bmi");
    bmi.value =w / (Math.pow(h,2)/ 10000);
     }
</script>
      

<script>
  function calrisk() {
    var ele = document.getElementsByName('gender');
    var gender;
    for(i = 0; i < ele.length; i++) {
          if(ele[i].checked)
            gender = ele[i].value;
             }
    
  //  var age = document.getElementsByName('age').value;
    
    // var sel = document.getElementById('occop');*/
   // =IF(H2="<30",0,IF(H2="30-34.9",0.3,IF(H2="35-39.9",0.7,IF(H2=">=40",1,""))))
   var b;
     var bmi = document.getElementsByName('bmi').value;
      if (bmi < 30) 
        b = 0;
      else if (bmi >= 30&& bmi < 34.9) 
        b = 0.3;
      else if (bmi >= 35 && bmi < 39.9) 
        b = 0.7;
      else if (bmi >= 40) 
        b = 1;
      else
        b= 0;

     var ag = document.getElementById("age");
     var age = ag.options[ag.selectedIndex].value;

     var oc = document.getElementById("occop");
     var occop = oc.options[oc.selectedIndex].value;

     var ma = document.getElementById("mask");
     var mask = ma.options[ma.selectedIndex].value;

     var sa = document.getElementById("sani");
     var sani = sa.options[sa.selectedIndex].value;

     var di = document.getElementById("dist");
     var dist = di.options[di.selectedIndex].value;

     var sm = document.getElementById("smoke");
     var smoke = sm.options[sm.selectedIndex].value;

     var ch = document.getElementById("chat");
     var chat = ch.options[ch.selectedIndex].value;

     var al = document.getElementById("alc");
     var alc = al.options[al.selectedIndex].value;
    // var result =Number(mask) + Number(sani);

       var selected = [];
       var symp = 0 ;
    for (var option of document.getElementById('symp').options)
    {
        if (option.selected) {
            
            symp = symp + selected.push(option.value);
        }
    }
    var co = [];
    var como = 0;
    for (var option of document.getElementById('como').options){
      if (option.selected){
        como = como + co.push(option.value);
      }
    }

    var ori = Number(gender) + Number(b) + Number(age) + Number(occop) + Number(mask) + Number(sani) + Number(dist) + Number(smoke) + Number(chat) + Number(alc) + Number(symp) + Number(como) ;
   // =IF(Z2>9,"VERY HIGH", IF(Z2>6,"HIGH",IF(Z2>=3,"MODERATE", "LOW")))
    var vul;
    var adv;
    if (ori > 9){
      vul = "VERY HIGH";
      adv = "Your vulnereblity for Covid 19 is very high. you should take coution on the way you live"
    }

    else if (ori > 6 && ori < 9){
      vul = "HIGH";
      adv = "Your vulnereblity for Covid 19 is High.";
    }
    else if (ori >= 3 && ori < 6){
      vul = "MODERATE";
      adv ="Your vulnereblity for Covid 19 is Moderate";
    }

    else{
      vul = "LOW";
      adv= "Your vulnereblity for covid is low; keep it that way ";
    }

    



 

    // assign onclick handlers to the buttons
  /*  document.getElementById('bmi').onclick = function () {
    el.value = sel.value; */   
    
  /* var occp ;
   var como;
   var sim;
   var mask;*/



   document.getElementById("ris").innerHTML=  "Ur Overall index is " +  ori + "your vulnerebility is" + vul;
   document.getElementById("sum").innerHTML= "Gender= " + gender + "BMI = " +  bmi ;
   document.getElementById("adv").innerHTML= adv;
 }
</script>
</body>
</html> 