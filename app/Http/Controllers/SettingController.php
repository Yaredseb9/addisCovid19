<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SettingDatum;
use Illuminate\Support\Facades\Auth; 

class SettingController extends Controller
{
    //
  public function __construct()
  {
    $this->middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $setting_on_progress = DB::table('settingData')->where('userId','=', Auth::user()->id )->where('status','=',0);
            $setting_complete = DB::table('settingData')->where('userId','=', Auth::user()->id )->where('status','=',1)->get();

            if ($setting_on_progress->count() === 0) { // ** user have no active form

                $progress = "0";

                $setting_on_progress = $setting_on_progress->get();

                return view('office.home',compact('setting_complete','setting_on_progress','progress'))->with('sucess','new assessment created');

            }
            else{

                $progress = 100-((DB::table('settingData')
                                                    ->select(DB::raw('((CASE WHEN `typeSetting` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `avgSpace` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `popDen` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `noIndividual` IS NULL THEN 1 ELSE 0 END) +  (CASE WHEN `noFemale` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `noDiag` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `noAgeGreter` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `guidDoc` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `contTrac` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `protocol` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `moh` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `empWithSypm` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `empSick` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `educatedAboutSteps` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `educatedAboutSocialD` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `visitors` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `trainEmpOnUse` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `covidCoordinator` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `increasePhysicalSpace` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `increasePhysicalSpaceBetween` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `adquatePpe` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `provideTissues` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `handSani` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `hungPosters` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `cleanAndDisinfect` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `disposableWipes` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `workplaceClean` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `systemsToNotify` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `isolationPeriod` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `inpersonMettings` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `ri_infection` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `ri_hospitalization` IS NULL THEN 1 ELSE 0 END)) as progress'))
                                                    ->where('userId','=', Auth::user()->id )->where('status','=',0)->get()[0]->progress/30)*100);

                $setting_on_progress = $setting_on_progress->get();

                return view('office.home',compact('setting_complete','setting_on_progress', 'progress'));
            }
                return view('office.home');
            
        
    }

    public function formdata()
    {
        {//(CASE WHEN `noMale` IS NULL THEN 1 ELSE 0 END) +
           
                
            $settingvalues = DB::table('settingData')->where('userId','=', Auth::user()->id )->where('status','=',0);
            if ($settingvalues->count() === 0) { // ** user have no active form

                DB::table('settingData')->insert([
                    'status'=> 0,
                    'userId'=> Auth::user()->id,
                ]);
                $settingvalues = DB::table('settingData')->where('userId','=', Auth::user()->id )->where('status','=',0)->get();

                $progress = 100-((DB::table('settingData')
                                                    ->select(DB::raw('((CASE WHEN `typeSetting` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `avgSpace` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `popDen` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `noIndividual` IS NULL THEN 1 ELSE 0 END) +  (CASE WHEN `noFemale` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `noDiag` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `noAgeGreter` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `guidDoc` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `contTrac` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `protocol` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `moh` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `empWithSypm` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `empSick` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `educatedAboutSteps` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `educatedAboutSocialD` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `visitors` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `trainEmpOnUse` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `covidCoordinator` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `increasePhysicalSpace` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `increasePhysicalSpaceBetween` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `adquatePpe` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `provideTissues` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `handSani` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `hungPosters` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `cleanAndDisinfect` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `disposableWipes` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `workplaceClean` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `systemsToNotify` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `isolationPeriod` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `inpersonMettings` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `ri_infection` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `ri_hospitalization` IS NULL THEN 1 ELSE 0 END)) as progress'))
                                                    ->where('userId','=', Auth::user()->id )->where('status','=',0)->get()[0]->progress/30)*100);



                return view('office.form',compact('settingvalues','progress'))->with('sucess','new assessment created');

            }
            else{

                $progress = 100-((DB::table('settingData')
                                                    ->select(DB::raw('((CASE WHEN `typeSetting` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `avgSpace` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `popDen` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `noIndividual` IS NULL THEN 1 ELSE 0 END) +  (CASE WHEN `noFemale` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `noDiag` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `noAgeGreter` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `guidDoc` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `contTrac` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `protocol` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `moh` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `empWithSypm` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `empSick` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `educatedAboutSteps` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `educatedAboutSocialD` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `visitors` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `trainEmpOnUse` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `covidCoordinator` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `increasePhysicalSpace` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `increasePhysicalSpaceBetween` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `adquatePpe` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `provideTissues` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `handSani` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `hungPosters` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `cleanAndDisinfect` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `disposableWipes` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `workplaceClean` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `systemsToNotify` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `isolationPeriod` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `inpersonMettings` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `ri_infection` IS NULL THEN 1 ELSE 0 END) + (CASE WHEN `ri_hospitalization` IS NULL THEN 1 ELSE 0 END)) as progress'))
                                                    ->where('userId','=', Auth::user()->id )->where('status','=',0)->get()[0]->progress/30)*100);

                $settingvalues = $settingvalues->get();
                return view('office.form',compact('settingvalues', 'progress'));
            }
            
        }
    }
    public function historydata()
    {

            $settingvalues = DB::table('settingData')->where('userId','=', Auth::user()->id )->where('status','=',1)->orderby('calculated_at','desc')->get();

            return view('office.history',compact('settingvalues'));
 
    }



    public function store(Request $request)
    {        
        // ************ save draft of  General information about the setting, Services typ
        if ($request->has('draft1'))// draft
        {
            DB::table('settingData')->where('id', $request->dataid)
                ->update([            
                 'typeSetting' => $request->typeSetting,
                 'avgSpace' => $request->avgSpace,
                 'popDen' => $request->popDen,
             ]);
            return redirect()->route('formdata')
                            ->with('success','draft stored successfully.');
        }


        // ************ save draft of of general information about individualis in setting
        else if ($request->has('draft2')) 
        {
             DB::table('settingData')->where('id', $request->dataid)
                  ->update([            
                 'noIndividual' => $request->noIndividual,
                 'noMale' => $request->noMale,
                 'noFemale' => $request->noFemale,
                 'noDiag' => $request->noDiag,
                 'noAgeGreter' => $request->noAgeGreter,
             ]);

            return redirect()->route('formdata')
                            ->with('success','draft stored successfully.');

        }

        //******************save draft Policies, guidelines and tools

        else if ($request->has('draft3')) 
        {
                 DB::table('settingData')->where('id', $request->dataid)
                      ->update([            
                     'guidDoc' => $request->guidDoc,
                     'contTrac' => $request->contTrac,
                     'protocol' => $request->protocol,
                     'moh' => $request->moh,
                 ]);

            return redirect()->route('formdata')
                            ->with('success','draft stored successfully.');

       }
        //**************save draft Preventive and control systems
        else if ($request->has('draft4')) 
        {
                DB::table('settingData')->where('id', $request->dataid)
                      ->update([            
                     'empWithSypm' => $request->empWithSypm,
                     'empSick' => $request->empSick,
                     'educatedAboutSteps' => $request->educatedAboutSteps,
                     'educatedAboutSocialD' => $request->educatedAboutSocialD,
                     'visitors' =>$request->visitors,
                     'trainEmpOnUse' => $request->trainEmpOnUse,

                 ]);

            return redirect()->route('formdata')
                                ->with('success','draft stored successfully.');

        }

        //***************save draft  tWorking/living environment
        else if ($request->has('draft5')) 
        {
                DB::table('settingData')->where('id', $request->dataid)
                      ->update([            
                     'covidCoordinator' => $request->covidCoordinator,
                     'increasePhysicalSpace' => $request->increasePhysicalSpace,
                     'increasePhysicalSpaceBetween' => $request->increasePhysicalSpaceBetween,
                     'adquatePpe' => $request->adquatePpe,
                     'provideTissues' =>$request->provideTissues,
                     'handSani' => $request->handSani,
                     'hungPosters' => $request->hungPosters,
                     'cleanAndDisinfect' => $request->cleanAndDisinfect,
                     'disposableWipes' => $request->disposableWipes,
                     'workplaceClean' => $request->workplaceClean,
                 ]);

            return redirect()->route('formdata')
                            ->with('success','draft stored successfully.');

        }
    //***************save draft Monitoring and evaluation system
    else if ($request->has('draft6')) 
    {
            DB::table('settingData')->where('id', $request->dataid)
                  ->update([            
                 'systemsToNotify' => $request->systemsToNotify,
                 'isolationPeriod' => $request->isolationPeriod,
                 'inpersonMettings' => $request->inpersonMettings,
                 
             ]);

        return redirect()->route('formdata')
                        ->with('success','draft stored successfully.');

    }

    //**********Save ALL and retrun risk index and advice

    else if ($request->has('savedata'))
    {
        $request->validate([
            'typeSetting' => 'required',
            'avgSpace' => 'required',
            'popDen' => 'required',
            'noIndividual'  => 'required',
            /*'noMale'  => 'required',*/
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
            'inpersonMettings' => 'required',


        ]);
        /*            
        for $request->popDen

        popDen
        IF(C13=">10 persons ",1,
        IF(C13="6-10 persons ",0.5,
        IF(C13="<=5 persons ",0
                         */

        // **** select risk index
        $ri_infection = 0.0;
        $ri_hospitalization = 0.0;
        $ri_death = 0.0;

        // *** draft 1 
        if($request->typeSetting == "other"){
            $ri_infection += 0.0;
        }elseif ($request->typeSetting == "None health related Office") {
            $ri_infection += 0.14;
        }elseif ($request->typeSetting == "Health facility") {
            $ri_infection += 0.29;
        }elseif ($request->typeSetting == "Covid-19 treatment centers") {
            $ri_infection += 0.43;
        }elseif ($request->typeSetting == "Schools") {
            $ri_infection += 0.57;
        }elseif ($request->typeSetting == "Stadium, Gym") {
            $ri_infection += 0.71;
        }elseif ($request->typeSetting == "Churches") {
            $ri_infection += 0.86;
        }elseif ($request->typeSetting == "Bars, Restaurants") {
            $ri_infection +=1.0;
        }

        if($request->avgSpace < 2){
            $ri_infection += 1.0;
        }elseif ($request->avgSpace <= 4) {
            $ri_infection += 0.5;
        }elseif ($request->avgSpace <= 5) {
            $ri_infection += 0.0;
        }

        if($request->popDen <= 5){
            $ri_infection += 0.0;
        }elseif ($request->popDen <= 10) {
            $ri_infection += 0.5;
        }elseif ($request->popDen > 10) {
            $ri_infection += 1.0;
        }
        // *** draft 2 
        if($request->noIndividual < 20){
            $ri_infection += 0.0;
        }elseif ($request->noIndividual <= 50) {
            $ri_infection += 0.5;
        }elseif ($request->noIndividual > 50) {
            $ri_infection += 1.0;
        }

        if((($request->noFemale/$request->noIndividual)*100) < 50){
            $ri_infection += 0.0;
            $ri_hospitalization += 0.0;
            $ri_death += 0.0;
        }elseif ((($request->noFemale/$request->noIndividual)*100) >= 50) {
            $ri_infection += 0.5;
            $ri_hospitalization += 1.0;
            $ri_death += 1.0;
        }

        if($request->noDiag == 0){
            $ri_infection += 0.0;
            $ri_hospitalization += 0.0;
            $ri_death += 0.0;
        }elseif ((($request->noDiag/$request->noIndividual)*100) < 5) {
            $ri_infection += 0.33;
            $ri_hospitalization += 0.33;
            $ri_death += 0.33;
        }elseif ((($request->noDiag/$request->noIndividual)*100) <= 20) {
            $ri_infection += 0.67;
            $ri_hospitalization += 0.67;
            $ri_death += 0.67;
        }elseif ((($request->noDiag/$request->noIndividual)*100) > 20) {
            $ri_infection += 1.0;
            $ri_hospitalization += 1.0;
            $ri_death += 1.0;
        }

        if($request->noAgeGreter == 0){
            $ri_infection += 0.0;
            $ri_hospitalization += 0.0;
            $ri_death += 0.0;
        }elseif ((($request->noAgeGreter/$request->noIndividual)*100) < 5) {
            $ri_infection += 0.33;
            $ri_hospitalization += 0.33;
            $ri_death += 0.33;
        }elseif ((($request->noAgeGreter/$request->noIndividual)*100) <= 20) {
            $ri_infection += 0.67;
            $ri_hospitalization += 0.67;
            $ri_death += 0.67;
        }elseif ((($request->noAgeGreter/$request->noIndividual)*100) > 20) {
            $ri_infection += 1.0;
            $ri_hospitalization += 1.0;
            $ri_death += 1.0;
        }

        if($request->covidCoordinator == 0){
            $ri_infection += 0.0;
        }elseif ($request->covidCoordinator == 1) {
            $ri_infection += 1.0;
        }

        if($request->increasePhysicalSpace == 0){
            $ri_infection += 0.0;
        }elseif ($request->increasePhysicalSpace == 1) {
            $ri_infection += 1.0;
        }

        if($request->increasePhysicalSpaceBetween == 0){
            $ri_infection += 0.0;
        }elseif ($request->increasePhysicalSpaceBetween == 1) {
            $ri_infection += 1.0;
        }

        if($request->adquatePpe == 1){
            $ri_infection += 0.0;
        }elseif ($request->adquatePpe == 2) {
            $ri_infection += 0.5;
        }elseif ($request->adquatePpe == 3) {
            $ri_infection += 1.0;
        }

        if($request->provideTissues == 0){
            $ri_infection += 0.0;
        }elseif ($request->provideTissues == 1) {
            $ri_infection += 1.0;
        }

        if($request->handSani == 0){
            $ri_infection += 0.0;
        }elseif ($request->handSani == 1) {
            $ri_infection += 1.0;
        }

        if($request->hungPosters == 0){
            $ri_infection += 0.0;
        }elseif ($request->hungPosters == 1) {
            $ri_infection += 1.0;
        }

        if($request->cleanAndDisinfect == 0){
            $ri_infection += 0.0;
        }elseif ($request->cleanAndDisinfect == 1) {
            $ri_infection += 1.0;
        }

        if($request->disposableWipes == 0){
            $ri_infection += 0.0;
        }elseif ($request->disposableWipes == 1) {
            $ri_infection += 1.0;
        }

        if($request->workplaceClean == 0){
            $ri_infection += 0.0;
        }elseif ($request->workplaceClean == 1) {
            $ri_infection += 1.0;
        }

        // *** draft 3
        if($request->guidDoc == 0){
            $ri_infection += 0.0;
        }elseif ($request->guidDoc == 1) {
            $ri_infection += 1.0;
        }

        if($request->contTrac == 0){
            $ri_infection += 0.0;
        }elseif ($request->contTrac == 1) {
            $ri_infection += 1.0;
        }

        if($request->protocol == 0){
            $ri_infection += 0.0;
        }elseif($request->protocol == 1){
            $ri_infection += 1.0;
        }

        if($request->noh == 0){
            $ri_infection += 0.0;
        }elseif($request->noh == 1){
            $ri_infection += 1.0;
        }
        // ** draft 6

        if($request->systemsToNotify == 0){
            $ri_infection += 0.0;
        }elseif($request->systemsToNotify == 1){
            $ri_infection += 1.0;
        }

        if($request->isolationPeriod == 0){
            $ri_infection += 0.0;
        }elseif($request->isolationPeriod == 1){
            $ri_infection += 1.0;
        }

        if($request->inpersonMettings == 0){
            $ri_infection += 0.0;
        }elseif($request->inpersonMettings == 1){
            $ri_infection += 1.0;
        }
        //** draft
        if($request->empWithSypm == 0){
            $ri_infection += 0.0;
            $ri_hospitalization += 0.0;
            $ri_death += 0.0;
        }elseif ($request->empWithSypm == 1) {
            $ri_infection += 1.0;
            $ri_hospitalization += 1.0;
            $ri_death += 1.0;
        }

        if($request->empSick == 1){
            $ri_infection += 0.0;
            $ri_hospitalization += 0.0;
            $ri_death += 0.0;
        }elseif ($request->empSick == 2) {
            $ri_infection += 0.5;
            $ri_hospitalization += 0.5;
            $ri_death += 0.5;
        }elseif ($request->empSick == 3) {
            $ri_infection += 1.0;
            $ri_hospitalization += 1.0;
            $ri_death += 1.0;
        }

        if($request->educatedAboutSteps == 1){
            $ri_infection += 0.0;
        }elseif ($request->educatedAboutSteps == 2) {
            $ri_infection += 0.5;
        }elseif ($request->educatedAboutSteps == 3) {
            $ri_infection += 1.0;
        }

        if($request->educatedAboutSocialD == 1){
            $ri_infection += 0.0;
        }elseif ($request->educatedAboutSocialD == 2) {
            $ri_infection += 0.5;
        }elseif ($request->educatedAboutSocialD == 3) {
            $ri_infection += 1.0;
        }

        if($request->visitors == 1){
            $ri_infection += 0.0;
        }elseif ($request->visitors == 2) {
            $ri_infection += 0.5;
        }elseif ($request->visitors == 3) {
            $ri_infection += 1.0;
        }

        if($request->visitors == 0){
            $ri_infection += 0.0;
        }elseif ($request->visitors == 1) {
            $ri_infection += 1.0;
        }

        if($ri_infection < 8){
            $level_ri_infection = "Low";
        }elseif ($ri_infection < 15) {
            $level_ri_infection = "Moderate";
        }elseif ($ri_infection < 22) {
            $level_ri_infection = "High";
        }elseif ($ri_infection >= 22) {
            $level_ri_infection = "Very High";
        }
        else{
            $level_ri_infection = "no level";
        }

        if($ri_hospitalization < 2.5){
            $level_ri_hospitalization = "Low";
        }elseif ($ri_hospitalization < 4.5) {
            $level_ri_hospitalization = "Moderate";
        }elseif ($ri_hospitalization < 7) {
            $level_ri_hospitalization = "High";
        }elseif ($ri_hospitalization >= 7) {
            $level_ri_hospitalization = "Very High";
        }

        if($ri_death < 2.5){
            $level_ri_death = "Low";
        }elseif ($ri_death < 4.5) {
            $level_ri_death = "Moderate";
        }elseif ($ri_death < 7) {
            $level_ri_death = "High";
        }elseif ($ri_death >= 7) {
            $level_ri_death = "Very High";
        }

        //dd($ri_infection, $ri_infection, $ri_death);
        DB::table('settingData')->where('id', $request->dataid)
           ->update([            
            'typeSetting' => $request->typeSetting,
            'avgSpace' => $request->avgSpace,
            'popDen' => $request->popDen,


            'noIndividual' => $request->noIndividual,
            /*'typeSetting' => $request->typeSetting,*/
            /*'noMale' => $request->noMale,*/
            'noFemale' => $request->noFemale,
            'noDiag' => $request->noDiag,
            'noAgeGreter' => $request->noAgeGreter,

            'guidDoc' => $request->guidDoc,
            'contTrac' => $request->contTrac,
            'protocol' => $request->protocol,
            'moh' => $request->moh,
            'empWithSypm' => $request->empWithSypm,
            'empSick' => $request->empSick,
            'educatedAboutSteps' => $request->educatedAboutSteps,
            'educatedAboutSocialD' => $request->educatedAboutSocialD,
            'visitors' => $request->visitors,
            'trainEmpOnUse' => $request->trainEmpOnUse,

            'covidCoordinator' => $request->covidCoordinator,
            'increasePhysicalSpace' => $request->increasePhysicalSpace,
            'increasePhysicalSpaceBetween' => $request->increasePhysicalSpaceBetween,
            'adquatePpe' => $request->adquatePpe,
            'provideTissues' => $request->provideTissues,
            'handSani' => $request->handSani,
            'hungPosters' => $request->hungPosters,
            'cleanAndDisinfect' => $request->cleanAndDisinfect,
            'disposableWipes' => $request->disposableWipes,
            'workplaceClean' => $request->workplaceClean,

            'systemsToNotify' => $request ->systemsToNotify,
            'isolationPeriod' => $request->isolationPeriod,
            'inpersonMettings' => $request->inpersonMettings,
            'ri_infection' => $ri_infection,
            'ri_hospitalization' => $ri_hospitalization,
            'ri_death' => $ri_death,
            'level_ri_infection' => $level_ri_infection,
            'level_ri_hospitalization' => $level_ri_hospitalization,
            'level_ri_death' => $level_ri_death,
            'userId' => $request->userid,
            'status' => 1,
            'calculated_at' => now(),
        ]);
        
        return view('office.form',compact('ri_infection', 'ri_hospitalization', 'ri_death', 'level_ri_infection', 'level_ri_hospitalization', 'level_ri_death'))
           ->with('success','data stored successfully.');
    }
    else{
        return redirect()->route('formdata');
    }
}







}
