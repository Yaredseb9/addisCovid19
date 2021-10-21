<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Models\indicator;

use App\Models\Ketena;
use App\Models\KetenaRi;

use App\Models\Woreda;
use App\Models\WoredaRi;

use App\Models\Subcity;
use App\Models\SubcitiesRi;

use App\Models\Indicator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CalculateRI;

class IncoderController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');
    }
    // ******************************************************************************************    
    // ***************** FUNCTION FOR CONTROLING ENCODERS HOME DASHBOARD ************************

    public function index()
    {



    // ***************** RETRIVE USER DATA *******************************************
       $userInfo = DB::table('users')
                ->select('users.name', DB::raw('subcities.id as subcity_id'),'subcities.subcity_name', 'woreda.woreda_name', DB::raw('ketena.id as ketena_id'),'ketena.ketana_name', 'woreda.review', 'subcities.review', 'ketena.review', DB::raw('woreda.id as woreda_id'))

                ->leftJoin('woreda', 'users.assiged_at', '=', 'woreda.id')
                ->leftJoin('subcities', 'woreda.subcity_id', '=', 'subcities.id')
                ->leftJoin('ketena', 'ketena.woreda_id', '=', 'woreda.id')
                ->where('users.id','=', Auth::user()->id )->get();

    // ***************** RETRIVE ALL DATA *******************************************
        $noAllData = DB::table('data')->get()->count();

    // ***************** RETRIVE ENCODED DATA *******************************************
        $indicatorsDataEncoded = DB::table('indicators')
                                    ->select(DB::raw('data.id as data_id'), DB::raw('indicators.id as indicator_id'),DB::raw('indicators.name as indicator_name'), 'data.ketena_id', 'data.subcity_id', 'data.woreda_id', 'data.value', 'data.user_id', 'data.pationt', 'data.office_id','data.updated_at')
                                    ->leftJoin('data', 'indicators.id', '=', 'data.indicator_id')
                                    ->where('value','!=', 0)->where('data.woreda_id','=', $userInfo[0]->woreda_id )
                                    ->get();

    // ***************** RETRIVE NOT ENCODED DATA *******************************************
        $indicatorsDataNotEncoded = DB::table('indicators')
                                    ->select(DB::raw('data.id as data_id'), DB::raw('indicators.id as indicator_id'),DB::raw('indicators.name as indicator_name'), 'data.ketena_id', 'data.subcity_id', 'data.woreda_id', 'data.value', 'data.user_id', 'data.pationt', 'data.office_id','data.updated_at')
                                    ->leftJoin('data', 'indicators.id', '=', 'data.indicator_id')
                                    ->where('value','=', 0)->where('data.woreda_id','=', $userInfo[0]->woreda_id )
                                    ->get();
        $i = 1;

        return view('incoder.home',compact('indicatorsDataEncoded','indicatorsDataNotEncoded','noAllData','i'));
 
    }

    /*   
    // **********************************************************************************    
    // ***************** FUNCTION FOR CONTROLING ENCODERS MANAGE DASHBOARD **************
    // ************************************** SUBCITY ***********************************   
    // **********************************************************************************   
    */

    public function manage_subcity()
    {
        $userInfo = DB::table('users')
                ->select('users.name', DB::raw('subcities.id as subcity_id'),'subcities.subcity_name', 'woreda.woreda_name','woreda.population', DB::raw('ketena.id as ketena_id'),'ketena.ketana_name', 'woreda.review', 'subcities.review', 'ketena.review', DB::raw('woreda.id as woreda_id'))

                ->leftJoin('woreda', 'users.assiged_at', '=', 'woreda.id')
                ->leftJoin('subcities', 'woreda.subcity_id', '=', 'subcities.id')
                ->leftJoin('ketena', 'ketena.woreda_id', '=', 'woreda.id')
                ->where('users.id','=', Auth::user()->id )->get();

        $mySubcity = Subcity::where( 'id','=', $userInfo[0]->subcity_id )->get();
        $cross = Subcity::where( 'subcities.id','=', $userInfo[0]->subcity_id )
                            ->crossJoin('indicators')
                            ->select(DB::raw('subcities.id as subcity_id'), DB::raw('indicators.id as indicator_id') )
                            ->get();

        foreach ($cross as $key => $data) {
            SubcitiesRi::updateOrCreate(
                ['subcity_id'=>$data->subcity_id, 'indicator_id'=>$data->indicator_id ],
                ['subcity_id'=>$data->subcity_id, 'indicator_id'=>$data->indicator_id ],
            );
        }
        $subcity_ri = SubcitiesRi::all()->where('subcity_id','=',$userInfo[0]->subcity_id);

        return view('incoder.manage', compact('userInfo','mySubcity',  'subcity_ri')); 
    }

    /*   
    // **********************************************************************************    
    // ***************** FUNCTION FOR CONTROLING ENCODERS MANAGE DASHBOARD **************
    // ************************************** WOREDA ************************************ 
    // **********************************************************************************   
    */
    
    public function manage_woreda()
    {
        if(Auth::user()->role == "admin-subcity"){
            $myWoreda = Woreda::where( 'subcity_id','=', Auth::user()->manage )->get();
            $cross = Woreda::where( 'woreda.subcity_id','=', Auth::user()->manage )
                                ->crossJoin('indicators')
                                ->select(DB::raw('woreda.id as woreda_id'), DB::raw('indicators.id as indicator_id') )
                                ->get();

            foreach ($cross as $key => $data) {
                WoredaRi::updateOrCreate(
                    ['woreda_id'=>$data->woreda_id, 'indicator_id'=>$data->indicator_id ],
                    ['woreda_id'=>$data->woreda_id, 'indicator_id'=>$data->indicator_id ],
                );
            }
            $woreda_ri = WoredaRi::all()->where('Woreda.subcity_id','=',Auth::user()->manage);

        return view('incoder.manage', compact('myWoreda',  'woreda_ri')); 
        }
        $userInfo = DB::table('users')
                ->select('users.name', DB::raw('subcities.id as subcity_id'),'subcities.subcity_name', 'woreda.woreda_name','woreda.population', DB::raw('ketena.id as ketena_id'),'ketena.ketana_name', 'woreda.review', 'subcities.review', 'ketena.review', DB::raw('woreda.id as woreda_id'))

                ->leftJoin('woreda', 'users.assiged_at', '=', 'woreda.id')
                ->leftJoin('subcities', 'woreda.subcity_id', '=', 'subcities.id')
                ->leftJoin('ketena', 'ketena.woreda_id', '=', 'woreda.id')
                ->where('users.id','=', Auth::user()->id )->get();

        $myWoreda = Woreda::where( 'id','=', $userInfo[0]->woreda_id )->get();
        $cross = Woreda::where( 'woreda.id','=', $userInfo[0]->woreda_id )
                            ->crossJoin('indicators')
                            ->select(DB::raw('woreda.id as woreda_id'), DB::raw('indicators.id as indicator_id') )
                            ->get();

        foreach ($cross as $key => $data) {
            WoredaRi::updateOrCreate(
                ['woreda_id'=>$data->woreda_id, 'indicator_id'=>$data->indicator_id ],
                ['woreda_id'=>$data->woreda_id, 'indicator_id'=>$data->indicator_id ],
            );
        }
        $woreda_ri = WoredaRi::all()->where('woreda.id','=',$userInfo[0]->woreda_id);

        return view('incoder.manage', compact('userInfo','myWoreda',  'woreda_ri')); 
    }

    /*   
    // **********************************************************************************    
    // ***************** FUNCTION FOR CONTROLING ENCODERS MANAGE DASHBOARD **************
    // ************************************** KETENA ************************************ 
    // **********************************************************************************   
    */
    public function manage_ketena()
    {


       $userInfo = DB::table('users')
                ->select('users.name', DB::raw('subcities.id as subcity_id'),'subcities.subcity_name', 'woreda.woreda_name','woreda.population', DB::raw('ketena.id as ketena_id'),'ketena.ketana_name', 'woreda.review', 'subcities.review', 'ketena.review', DB::raw('woreda.id as woreda_id'))

                ->leftJoin('woreda', 'users.assiged_at', '=', 'woreda.id')
                ->leftJoin('subcities', 'woreda.subcity_id', '=', 'subcities.id')
                ->leftJoin('ketena', 'ketena.woreda_id', '=', 'woreda.id')
                ->where('users.id','=', Auth::user()->id )->get();

        if(Auth::user()->role == "admin-subcity"){
            $myKetena = Ketena::all()->where( 'Woreda.subcity_id','=',Auth::user()->manage );
//dd($myKetena);
            $indic = Indicator::all();

            foreach ($myKetena as $key => $ket) {
                foreach ($indic as $inkey => $in) {
                   KetenaRi::updateOrCreate(
                        ['ketena_id'=>$ket->id, 'indicator_id'=>$in->id ],
                        ['ketena_id'=>$ket->id, 'indicator_id'=>$in->id ],
                    );
                }
                /*KetenaRi::updateOrCreate(
                    ['ketena_id'=>$data->ketena_id, 'indicator_id'=>$data->indicator_id ],
                    ['ketena_id'=>$data->ketena_id, 'indicator_id'=>$data->indicator_id ],
                );*/
            }
            $ketena_ri = KetenaRi::all()->where( 'Ketena.Woreda.subcity_id','=',Auth::user()->manage );
            

            return view('incoder.manage', compact('userInfo','myKetena',  'ketena_ri'));
        }
        else{
            $myKetena = Ketena::where( 'woreda_id','=', $userInfo[0]->woreda_id )->get();

            $cross = Ketena::where( 'ketena.woreda_id','=', $userInfo[0]->woreda_id )
                            ->crossJoin('indicators')
                            ->select(DB::raw('ketena.id as ketena_id'), DB::raw('indicators.id as indicator_id') )
                            ->get();

            foreach ($cross as $key => $data) {
                KetenaRi::updateOrCreate(
                    ['ketena_id'=>$data->ketena_id, 'indicator_id'=>$data->indicator_id ],
                    ['ketena_id'=>$data->ketena_id, 'indicator_id'=>$data->indicator_id ],
                );
            }
            $ketena_ri = KetenaRi::all()->where('Ketena.woreda_id','=',$userInfo[0]->woreda_id);

            return view('incoder.manage', compact('userInfo','myKetena',  'ketena_ri'));

        }

        
        
 
    }


    public function create()
    {
        {
            return view('incoder.home');
        }
    }
    // **************************************************************************************    
    // ***************** FUNCTION FOR CONTROLING ENCODERS ENCODEING ACTION ******************
    // **************************************************************************************    
    public function store(Request $request)
    {
if($request->has('submitKetena')){
        /* ***************** LOGIC IS  *****************************************
            FOR EACH INCODED INDICATOR 
            RETREVE RISK INDEX FROM CalculateRI 
            IF NOT IN DATA TABELE INSERT IT'S VALUE BUT IF EXISTS UPDATE
            UPDATE WOREDA RISK INDEX
            UPDATE SUBCITY RISK INDEX
        */
            //dd($request);
        // **** inpute validation  *******
        $request->validate([
            'ketena_population' => ['required','numeric'],
            'ketena_area' => ['required','numeric'],
            'ketena_adult' => ['required','numeric'],
            'ketena_hh' => ['required','numeric']
        
       ]);

       
        if($request->ketena_population == 0){
            return redirect()->back()
                        ->with('error',' subcity population cant be 0 .');
        }
        if($request->ketena_area == 0){
            return redirect()->route('manage')
                        ->with('error',' subcity area cant be 0 .');
        }
        if($request->ketena_adult == 0){
            return redirect()->back()
                        ->with('error',' subcity adult cant be 0 .');
        }
        if($request->ketena_hh == 0){
            return redirect()->back()
                        ->with('error',' subcity hh cant be 0 .');
        }


        $IR = new CalculateRI;

        $woreda_id = 0;
        $i = 0;
        //dd($request->request);
        // **** data priparatin  *******
        while ( $i < count($request->data_id)) /*{
            # code...
        }
        foreach ($request->request as $key => $value)*/
        {

           

                    //*** special indicatour value for HH Size ******
                    if($request->indicator_name[$i] == "HH Size" or $request->indicator_name[$i] == "Hand Washing" or $request->indicator_name[$i] == "Soap and Detergents" or $request->indicator_name[$i] == "Sanitation" or $request->indicator_name[$i] == "Cooking" or $request->indicator_name[$i] == "Solid Fuel"){
                        if($request->woreda_hh == '' or $request->woreda_hh == 0){

                            $indicator_ir = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                            $portion = false;
                        }
                        else $portion = ($request->value[$i]/$request->woreda_hh)*100;

                    }
                    else if($request->indicator_name[$i] == "Population density"){
                        if($request->woreda_area == '' or $request->woreda_area == 0){
                            $indicator_ir = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                            $portion = false;
                        }
                        else $portion = ($request->value[$i]/$request->woreda_area)*100;

                    }
                    else if($request->indicator_name[$i] == "Informal Employment"){
                        if($request->woreda_age == '' or $request->woreda_age == 0){
                            $indicator_ir = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                            $portion = false;
                        }
                        else $portion = ($request->value[$i]/$request->woreda_age)*100;

                    }
                    else if($request->ketena_population == 0){
                         $indicator_ir = array(
                            'risk_index_infection' => 'unavailable', 
                            'risk_index_hospital' => 'unavailable', 
                            'risk_index_death' => 'unavailable'
                        );
                         $portion = false;
                    }
                    else $portion = ($request->value[$i] / $request->ketena_population) * 100;



                if($portion != false){
/*
                    //*** special indicatour value for HH Size ******
                    if($request->indicator_name[$i] == 'HH Size') $portion = $request->value[$i];
                    else $portion = ($request->value[$i] / $request->ketena_population) * 100; // **calculate portion % for indicatour***/
                    
                    //***** retrving indicators ranking index from calculateRI get_ri function *********
                    $indicator_ir = $IR->get_ri($request->indicator_name[$i], $portion);
                    //$IR->calculate_ketena_ri($request->ketena_id, $request->indicator_id[$i], $request->indicator_name[$i], $portion);
                    //$IR->calculate_subcity_ri();
               
                } 
               /* if($request->indicator_name[$i] == "Alcohol"){
                    dd($request->value[$i]);
                }*/
                if($request->value[$i] === null){ $value = 0;}
                else{$value = $request->value[$i];}

                $data_exist = DB::table('ketena_ri')->where('ketena_id', $request->value[$i] )->where('indicator_id',$request->indicator_id[$i]);

                if (false) {
                    DB::table('ketena_ri')
                        ->insert([            
                            'indicator_id' => $request->indicator_id[$i],
                            'ketena_id' => $request->my_ketena_id[$i],
                           /* 'woreda_id' => $request->my_woreda_id[$i],
                            'subcity_id' => $request->my_subcity_id[$i],*/
                            'value' => $value,
                            'risk_index_infection' => $indicator_ir['risk_index_infection'],
                            'risk_index_hospital' => $indicator_ir['risk_index_hospital'],
                            'risk_index_death' => $indicator_ir['risk_index_death'],
                            'updated_by' => Auth::user()->id,
                        ]);
                }
                else{
                    //***** update data table *********
                    DB::table('ketena_ri')
                        ->where('id', $request->data_id[$i])
                        ->update(
                            [
                                'value' => $value,
                                'risk_index_infection' => $indicator_ir['risk_index_infection'],
                                'risk_index_hospital' => $indicator_ir['risk_index_hospital'],
                                'risk_index_death' => $indicator_ir['risk_index_death'],
                                'updated_by' => Auth::user()->id
                            ]);
                }


                
                        
                $woreda_id = $request->my_woreda_id[$i];

            
            
            $i++;
            /*if(count($request->data_id) == $i){ break;}*/

        }

        //dd($i,$request);

        /* ************************ INSERT KETENA POPULATION  ************************************************* */

        DB::table('ketena')
            ->where('id', $request->ketena_id)
            ->update([
                'population' => $request->ketena_population,
                'area' => $request->ketena_area,
                'hh' => $request->ketena_hh,
                'adult' => $request->ketena_adult
            ]);
}
elseif($request->has('submitWoreda')){
         /* ***************** LOGIC IS  *****************************************
            FOR EACH INCODED INDICATOR 
            RETREVE RISK INDEX FROM CalculateRI 
            IF NOT IN DATA TABELE INSERT IT'S VALUE BUT IF EXISTS UPDATE
            UPDATE WOREDA RISK INDEX
            UPDATE SUBCITY RISK INDEX
        */
            //dd($request);
        // **** inpute validation  *******
        $request->validate([
            'ketena_population' => ['required','numeric'],
            'ketena_area' => ['required','numeric'],
            'ketena_adult' => ['required','numeric'],
            'ketena_hh' => ['required','numeric']
        
        ]);

        if($request->ketena_population == 0){
            return redirect()->back()
                        ->with('error',' subcity population cant be 0 .');
        }
        if($request->ketena_area == 0){
            return redirect()->route('manage')
                        ->with('error',' subcity area cant be 0 .');
        }
        if($request->ketena_adult == 0){
            return redirect()->back()
                        ->with('error',' subcity adult cant be 0 .');
        }
        if($request->ketena_hh == 0){
            return redirect()->back()
                        ->with('error',' subcity hh cant be 0 .');
        }

        $IR = new CalculateRI;

        $woreda_id = 0;
        $i = 0;
        //dd($request->request);
        // **** data priparatin  *******
        while ( $i < count($request->data_id)) /*{
            # code...
        }
        foreach ($request->request as $key => $value)*/
        {

                    //*** special indicatour value for HH Size ******
                    if($request->indicator_name[$i] == "HH Size" or $request->indicator_name[$i] == "Hand Washing" or $request->indicator_name[$i] == "Soap and Detergents" or $request->indicator_name[$i] == "Sanitation" or $request->indicator_name[$i] == "Cooking" or $request->indicator_name[$i] == "Solid Fuel"){
                        if($request->ketena_hh == '' or $request->ketena_hh == 0){
                            $indicator_ir = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                            $portion = false;
                        }
                        else $portion = ($request->value[$i]/$request->ketena_hh)*100;

                    }
                    else if($request->indicator_name[$i] == "Population density"){
                        if($request->ketena_area == '' or $request->ketena_area == 0){
                            $indicator_ir = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                            $portion = false;
                        }
                        else $portion = ($request->value[$i]/$request->ketena_area)*100;

                    }
                    else if($request->indicator_name[$i] == "Informal Employment"){
                        if($request->ketena_age == '' or $request->ketena_age == 0){
                            $indicator_ir = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                            $portion = false;
                        }
                        else $portion = ($request->value[$i]/$request->ketena_age)*100;

                    }
                    else if($request->ketena_population == 0){
                         $indicator_ir = array(
                            'risk_index_infection' => 'unavailable', 
                            'risk_index_hospital' => 'unavailable', 
                            'risk_index_death' => 'unavailable'
                        );
                         $portion = false;
                    }
                    else $portion = ($request->value[$i] / $request->ketena_population) * 100;



                if($portion != false){
                    
                    //***** retrving indicators ranking index from calculateRI get_ri function *********
                    $indicator_ir = $IR->get_ri($request->indicator_name[$i], $portion);
                    //$IR->calculate_ketena_ri($request->ketena_id, $request->indicator_id[$i], $request->indicator_name[$i], $portion);
                    //$IR->calculate_subcity_ri();
               
                } 
                //dd($request->indicator_name,$request->indicator_name[$i], $portion,$indicator_ir);
               /* if($request->indicator_name[$i] == "Alcohol"){
                    dd($request->value[$i]);
                }*/
                if($request->value[$i] === null){ $value = 0;}
                else{$value = $request->value[$i];}

                $data_exist = DB::table('woreda_ri')->where('ketena_id', $request->value[$i] )->where('indicator_id',$request->indicator_id[$i]);

                if (false) {
                    DB::table('woreda_ri')
                        ->insert([            
                            'indicator_id' => $request->indicator_id[$i],
                            'ketena_id' => $request->my_ketena_id[$i],
                           /* 'woreda_id' => $request->my_woreda_id[$i],
                            'subcity_id' => $request->my_subcity_id[$i],*/
                            'woreda_value' => $value,
                            'risk_index_infection' => $indicator_ir['risk_index_infection'],
                            'risk_index_hospital' => $indicator_ir['risk_index_hospital'],
                            'risk_index_death' => $indicator_ir['risk_index_death'],
                            'updated_by' => Auth::user()->id,
                        ]);
                }
                else{
                    //***** update data table *********
                    DB::table('woreda_ri')
                        ->where('id', $request->data_id[$i])
                        ->update(
                            [
                                'woreda_value' => $value,
                                'risk_index_infection' => $indicator_ir['risk_index_infection'],
                                'risk_index_hospital' => $indicator_ir['risk_index_hospital'],
                                'risk_index_death' => $indicator_ir['risk_index_death'],
                                'updated_by' => Auth::user()->id
                            ]);
                }


                
                        
                $woreda_id = $request->my_woreda_id[$i];
            $i++;
        }

        /* ********************* INSERT KETENA POPULATION  *********************** */

        DB::table('woreda')
            ->where('id', $request->woreda_id)
            ->update([
                'population' => $request->ketena_population,
                'area' => $request->ketena_area,
                'hh' => $request->ketena_hh,
                'adult' => $request->ketena_adult
            ]);
 }
elseif($request->has('submitSubcity')){
         /* ***************** LOGIC IS  *****************************************
            FOR EACH INCODED INDICATOR 
            RETREVE RISK INDEX FROM CalculateRI 
            IF NOT IN DATA TABELE INSERT IT'S VALUE BUT IF EXISTS UPDATE
            UPDATE WOREDA RISK INDEX
            UPDATE SUBCITY RISK INDEX
        */
       
        // **** inpute validation  *******
        $request->validate([
            'ketena_population' => ['required','numeric'],
            'ketena_area' => ['required','numeric'],
            'ketena_adult' => ['required','numeric'],
            'ketena_hh' => ['required','numeric']
        
       ]);

        if($request->ketena_population == 0){
            return redirect()->back()
                        ->with('error',' subcity population cant be 0 .');
        }
        if($request->ketena_area == 0){
            return redirect()->route('manage')
                        ->with('error',' subcity area cant be 0 .');
        }
        if($request->ketena_adult == 0){
            return redirect()->back()
                        ->with('error',' subcity adult cant be 0 .');
        }
        if($request->ketena_hh == 0){
            return redirect()->back()
                        ->with('error',' subcity hh cant be 0 .');
        }

        $IR = new CalculateRI;

        $woreda_id = 0;
        $i = 0;
        //dd($request->request);
        // **** data priparatin  *******
        while ( $i < count($request->data_id))
        {
                    //*** special indicatour value for HH Size ******
                    if($request->indicator_name[$i] == "HH Size" or $request->indicator_name[$i] == "Hand Washing" or $request->indicator_name[$i] == "Soap and Detergents" or $request->indicator_name[$i] == "Sanitation" or $request->indicator_name[$i] == "Cooking" or $request->indicator_name[$i] == "Solid Fuel"){
                        if($request->woreda_hh == '' or $request->woreda_hh == 0){
                            $indicator_ir = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                            $portion = false;
                        }
                        else $portion = ($request->value[$i]/$request->woreda_hh)*100;

                    }
                    else if($request->indicator_name[$i] == "Population density"){
                        if($request->woreda_area == '' or $request->woreda_area == 0){
                            $indicator_ir = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                            $portion = false;
                        }
                        else $portion = ($request->value[$i]/$request->woreda_area)*100;

                    }
                    else if($request->indicator_name[$i] == "Informal Employment"){
                        if($request->woreda_age == '' or $request->woreda_age == 0){
                            $indicator_ir = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                            $portion = false;
                        }
                        else $portion = ($request->value[$i]/$request->woreda_age)*100;

                    }
                    else if($request->ketena_population == 0){
                         $indicator_ir = array(
                            'risk_index_infection' => 'unavailable', 
                            'risk_index_hospital' => 'unavailable', 
                            'risk_index_death' => 'unavailable'
                        );
                         $portion = false;
                    }
                    else $portion = ($request->value[$i] / $request->ketena_population) * 100;


                if($portion != false){
                    $indicator_ir = $IR->get_ri($request->indicator_name[$i], $portion);               
                } 
                if($request->value[$i] === null){ $value = 0;}
                else{$value = $request->value[$i];}

                    //***** update data table *********
                    DB::table('subcities_ri')
                        ->where('id', $request->data_id[$i])
                        ->update(
                            [
                                'subcity_value' => $value,
                                'risk_index_infection' => $indicator_ir['risk_index_infection'],
                                'risk_index_hospital' => $indicator_ir['risk_index_hospital'],
                                'risk_index_death' => $indicator_ir['risk_index_death'],
                                'updated_by' => Auth::user()->id
                            ]);

                $my_subcity_id = $request->my_subcity_id[$i];
            $i++;
        }

        /* *************** INSERT SUBCITY POPULATION  ************************************* */
        DB::table('subcities')
            ->where('id', $request->woreda_id)
            ->update([
                'population' => $request->ketena_population,
                'area' => $request->ketena_area,
                'hh' => $request->ketena_hh,
                'adult' => $request->ketena_adult
            ]);
 }
        return redirect()->back()
                        ->with('success','Data encoded Risk Index updated .');
    }



    public function update(Request $request, indicator $ind)
    {

        return "update";
    }

    public function show(indicator $data)
    {
        return view('incoder.manage', compact('data'));
    }

}
