<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Models\Subcity;
use App\Models\Woreda;
use App\Models\Data;

class CalculateRI extends Controller
{
    public function __construct()
    {

    }

    // ************ Vulnablity Index at Community level index calculator ***********
    public function get_ri($indicator_name, $percentage)
    {
        
        $risk_infection = 'unavailable';
        $risk_hospital = 'unavailable';
        $risk_death = 'unavailable';

        $risk_index_infection = 'unavailable';
        $risk_index_hospital = 'unavailable';
        $risk_index_death = 'unavailable';


        //***** indicators ranking conditions selector *********
        switch ($indicator_name) {
            case 'Gender':
                if($percentage >= 50){
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }
                elseif ($percentage < 50) {
                    $risk_infection = 2;
                    $risk_hospital = 1;
                    $risk_death = 1;
                }
                $infection_min = 1;
                $infection_max = 2;
                $hospital_min = 1;
                $hospital_max = 2;
                $death_min = 1;
                $death_max = 2;
                break;
            case 'Educational Attainment':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 'unavailable' ;
                    $risk_death = 'unavailable';
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 'unavailable';
                    $risk_death = 'unavailable';
                }

                $infection_min = 1;
                $infection_max = 2;
                break;
            case 'Un Employment':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 1;
                    $risk_death = 1;
                }

                $infection_min = 1;
                $infection_max = 2;
                $hospital_min = 1;
                $hospital_max = 2;
                $death_min = 1;
                $death_max = 2;
                break;
            case 'Informal Employment':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 1;
                    $risk_death = 1;
                }

                $infection_min = 1;
                $infection_max = 2;
                $hospital_min = 1;
                $hospital_max = 2;
                $death_min = 1;
                $death_max = 2;
                break;
            case 'Income':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 1;
                    $risk_death = 1;
                }

                $infection_min = 1;
                $infection_max = 2;
                $hospital_min = 1;
                $hospital_max = 2;
                $death_min = 1;
                $death_max = 2;
                break;
            case 'HH Size':
                if($percentage <= 3){
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }
                elseif ($percentage <= 6) {
                    $risk_infection = 2;
                    $risk_hospital = 1;
                    $risk_death = 1;
                }
                elseif ($percentage >= 7) {
                    $risk_infection = 3;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 3;
                $hospital_min = 1;
                $hospital_max = 2;
                $death_min = 1;
                $death_max = 2;
                break;
            case 'Informal Settlement':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 1;
                    $risk_death = 1;
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 2;
                $hospital_min = 1;
                $hospital_max = 2;
                $death_min = 1;
                $death_max = 2;
                break;
            case 'Population density':
                if($percentage < 5165){
                    $risk_infection = 1;
                    $risk_hospital = 'unavailable' ;
                    $risk_death = 'unavailable';
                }
                elseif ($percentage >= 5165) {
                    $risk_infection = 2;
                    $risk_hospital = 'unavailable';
                    $risk_death = 'unavailable';
                }

                $infection_min = 1;
                $infection_max = 2;
                break;
            case 'Access to Radio':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 'unavailable' ;
                    $risk_death = 'unavailable';
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 'unavailable';
                    $risk_death = 'unavailable';
                }

                $infection_min = 1;
                $infection_max = 2;
                break;
            case 'Access to TV':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 'unavailable' ;
                    $risk_death = 'unavailable';
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 'unavailable';
                    $risk_death = 'unavailable';
                }

                $infection_min = 1;
                $infection_max = 2;
                break;
            case 'Access to Mobile':
                if($percentage >= 50){
                    $risk_infection = 1;
                    $risk_hospital = 'unavailable' ;
                    $risk_death = 'unavailable';
                }
                elseif ($percentage < 50) {
                    $risk_infection = 2;
                    $risk_hospital = 'unavailable';
                    $risk_death = 'unavailable';
                }

                $infection_min = 1;
                $infection_max = 2;
                break;
            case 'Water Source':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 1;
                    $risk_death = 1;
                }

                $infection_min = 1;
                $infection_max = 2;
                $hospital_min = 1;
                $hospital_max = 2;
                $death_min = 1;
                $death_max = 2;
                break;
            case 'Hand Washing':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 'unavailable' ;
                    $risk_death = 'unavailable';
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 'unavailable';
                    $risk_death = 'unavailable';
                }

                $infection_min = 1;
                $infection_max = 2;
                break;
            case 'Soap and Detergents':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 'unavailable' ;
                    $risk_death = 'unavailable';
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 'unavailable';
                    $risk_death = 'unavailable';
                }

                $infection_min = 1;
                $infection_max = 2;
                break;
            case 'Sanitation':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 1;
                    $risk_death = 1;
                }

                $infection_min = 1;
                $infection_max = 2;
                $hospital_min = 1;
                $hospital_max = 2;
                $death_min = 1;
                $death_max = 2;
                break;
            case 'Cooking':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 1;
                    $risk_death = 1;
                }

                $infection_min = 1;
                $infection_max = 2;
                $hospital_min = 1;
                $hospital_max = 2;
                $death_min = 1;
                $death_max = 2;
                break;
            case 'Solid Fuel':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 1;
                    $risk_death = 1;
                }

                $infection_min = 1;
                $infection_max = 2;
                $hospital_min = 1;
                $hospital_max = 2;
                $death_min = 1;
                $death_max = 2;
                break;
            case 'Disability':
                if($percentage >= 50){
                    $risk_infection = 3;
                    $risk_hospital = 'unavailable' ;
                    $risk_death = 'unavailable';
                }
                elseif ($percentage >= 21) {
                    $risk_infection = 2;
                    $risk_hospital = 'unavailable';
                    $risk_death = 'unavailable';
                }
                elseif ($percentage < 21) {
                    $risk_infection = 1;
                    $risk_hospital = 'unavailable';
                    $risk_death = 'unavailable';
                }

                $infection_min = 1;
                $infection_max = 3;
                break;
            case 'Age':
                if($percentage >= 50){
                    $risk_infection = 2;
                    $risk_hospital = 3;
                    $risk_death = 3;
                }
                elseif ($percentage < 50) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 2;
                $hospital_min = 1;
                $hospital_max = 3;
                $death_min = 1;
                $death_max = 3;
                break;
            case 'Malnutrition':
                if($percentage >= 50){
                    $risk_infection = 3;
                    $risk_hospital = 1 ;
                    $risk_death = 1;
                }
                elseif ($percentage >= 21) {
                    $risk_infection = 2;
                    $risk_hospital = 3;
                    $risk_death = 3;
                }
                elseif ($percentage < 21) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 3;
                $hospital_min = 1;
                $hospital_max = 3;
                $death_min = 1;
                $death_max = 3;
                break;
            case 'Khat':
                if($percentage >= 50){
                    $risk_infection = 3;
                    $risk_hospital = 1 ;
                    $risk_death = 1;
                }
                elseif ($percentage >= 21) {
                    $risk_infection = 2;
                    $risk_hospital = 3;
                    $risk_death = 3;
                }
                elseif ($percentage < 21) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 3;
                $hospital_min = 1;
                $hospital_max = 3;
                $death_min = 1;
                $death_max = 3;
                break;
            case 'Smoking':
                if($percentage >= 50){
                    $risk_infection = 3;
                    $risk_hospital = 1 ;
                    $risk_death = 1;
                }
                elseif ($percentage >= 21) {
                    $risk_infection = 2;
                    $risk_hospital = 3;
                    $risk_death = 3;
                }
                elseif ($percentage < 21) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 3;
                $hospital_min = 1;
                $hospital_max = 3;
                $death_min = 1;
                $death_max = 3;
                break;
            case 'Alcohol':
                if($percentage >= 50){
                    $risk_infection = 3;
                    $risk_hospital = 1 ;
                    $risk_death = 1;
                }
                elseif ($percentage >= 21) {
                    $risk_infection = 2;
                    $risk_hospital = 3;
                    $risk_death = 3;
                }
                elseif ($percentage < 21) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 3;
                $hospital_min = 1;
                $hospital_max = 3;
                $death_min = 1;
                $death_max = 3;
                break;
            case 'BMI':
                if($percentage >= 50){
                    $risk_infection = 3;
                    $risk_hospital = 1 ;
                    $risk_death = 1;
                }
                elseif ($percentage >= 21) {
                    $risk_infection = 2;
                    $risk_hospital = 3;
                    $risk_death = 3;
                }
                elseif ($percentage < 21) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 3;
                $hospital_min = 1;
                $hospital_max = 3;
                $death_min = 1;
                $death_max = 3;
                break;
            case 'HIV':
                if($percentage >= 50){
                    $risk_infection = 3;
                    $risk_hospital = 1 ;
                    $risk_death = 1;
                }
                elseif ($percentage >= 21) {
                    $risk_infection = 2;
                    $risk_hospital = 3;
                    $risk_death = 3;
                }
                elseif ($percentage < 21) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 3;
                $hospital_min = 1;
                $hospital_max = 3;
                $death_min = 1;
                $death_max = 3;
                break;
            case 'DM':
                if($percentage >= 50){
                    $risk_infection = 3;
                    $risk_hospital = 1 ;
                    $risk_death = 1;
                }
                elseif ($percentage >= 21) {
                    $risk_infection = 2;
                    $risk_hospital = 3;
                    $risk_death = 3;
                }
                elseif ($percentage < 21) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 3;
                $hospital_min = 1;
                $hospital_max = 3;
                $death_min = 1;
                $death_max = 3;
                break;
            case 'HTN':
                if($percentage >= 50){
                    $risk_infection = 3;
                    $risk_hospital = 1 ;
                    $risk_death = 1;
                }
                elseif ($percentage >= 21) {
                    $risk_infection = 2;
                    $risk_hospital = 3;
                    $risk_death = 3;
                }
                elseif ($percentage < 21) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 3;
                $hospital_min = 1;
                $hospital_max = 3;
                $death_min = 1;
                $death_max = 3;
                break;
            case 'TB':
                if($percentage >= 50){
                    $risk_infection = 3;
                    $risk_hospital = 1 ;
                    $risk_death = 1;
                }
                elseif ($percentage >= 21) {
                    $risk_infection = 2;
                    $risk_hospital = 3;
                    $risk_death = 3;
                }
                elseif ($percentage < 21) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 3;
                $hospital_min = 1;
                $hospital_max = 3;
                $death_min = 1;
                $death_max = 3;
                break;
            case 'CVD':
                if($percentage >= 50){
                    $risk_infection = 3;
                    $risk_hospital = 1 ;
                    $risk_death = 1;
                }
                elseif ($percentage >= 21) {
                    $risk_infection = 2;
                    $risk_hospital = 3;
                    $risk_death = 3;
                }
                elseif ($percentage < 21) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 3;
                $hospital_min = 1;
                $hospital_max = 3;
                $death_min = 1;
                $death_max = 3;
                break;
            case 'Asthma':
                if($percentage >= 50){
                    $risk_infection = 3;
                    $risk_hospital = 1 ;
                    $risk_death = 1;
                }
                elseif ($percentage >= 21) {
                    $risk_infection = 2;
                    $risk_hospital = 3;
                    $risk_death = 3;
                }
                elseif ($percentage < 21) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 3;
                $hospital_min = 1;
                $hospital_max = 3;
                $death_min = 1;
                $death_max = 3;
                break;
            case 'Cancer':
                if($percentage >= 50){
                    $risk_infection = 3;
                    $risk_hospital = 1 ;
                    $risk_death = 1;
                }
                elseif ($percentage >= 21) {
                    $risk_infection = 2;
                    $risk_hospital = 3;
                    $risk_death = 3;
                }
                elseif ($percentage < 21) {
                    $risk_infection = 1;
                    $risk_hospital = 2;
                    $risk_death = 2;
                }

                $infection_min = 1;
                $infection_max = 3;
                $hospital_min = 1;
                $hospital_max = 3;
                $death_min = 1;
                $death_max = 3;
                break;

            default:
                break;
        }


        //(score - min)/(max-min)
        
        //********* calculate risk index for infecton, hospitalizaton and death

        if($risk_infection != 'unavailable'){
            $risk_index_infection = ($risk_infection - $infection_min) / ($infection_max - $infection_min);
        }

        if($risk_hospital != 'unavailable') {
            $risk_index_hospital = ($risk_hospital - $hospital_min) / ($hospital_max - $hospital_min);
        }

        if($risk_death != 'unavailable') {
            $risk_index_death = ($risk_death - $death_min) / ($death_max - $death_min);
        }

        $ri = array(
            'risk_index_infection' => $risk_index_infection, 
            'risk_index_hospital' => $risk_index_hospital, 
            'risk_index_death' => $risk_index_death
        );

        //** return calculated risk index value for the indicator
        return $ri;
    }

    // ************ Upate ketena Vulnablity Index at Community  ***********
    public function calculate_ketena_ri($ketena_id, $indicator_id, $indicator_name, $percentage){

        // ** retrive risk index for indicator from get_ri  ***********
        $ri = $this->get_ri($indicator_name, $percentage);
 
        // ** check if data exist and insert or update  ***********
        $id= DB::table('ketena_ri')->select('id')->where('ketena_id', $ketena_id )->where('indicator_id', $indicator_id )->get();
        
        if(isset($id[0]->id)){

         DB::table('ketena_ri')
                    ->where('id', $id[0]->id )
                    ->update([            
                        'risk_index_infection' => $ri['risk_index_infection'],
                        'risk_index_hospital' => $ri['risk_index_hospital'],
                        'risk_index_death' => $ri['risk_index_death'],
                        'updated_by' => Auth::user()->id
                    ]);
        }
        else{
            DB::table('ketena_ri')
                    
                    ->insert
                    ([  
                        'ketena_id' => $ketena_id,
                        'indicator_id' => $indicator_id,          
                        'risk_index_infection' => $ri['risk_index_infection'],
                        'risk_index_hospital' => $ri['risk_index_hospital'],
                        'risk_index_death' => $ri['risk_index_death'],
                        'updated_by' => Auth::user()->id
                    ]);

        }

    } 
    // ************ Upate woreda Vulnablity Index at Community  ***********
    public function update_woreda_ri(){
/*
        //** retrive woreda population
        $woredas_population = DB::table('ketena')->select('woreda_id',DB::raw('SUM(population) as woreda_population'))->groupBy('woreda_id')->get();
       
        //** update woreda population
        foreach ($woredas_population as $key => $woreda_population) {
            DB::table('woreda')
            ->where('id', $woreda_population->woreda_id )
            ->update([            
                'population' => $woreda_population->woreda_population,
            ]);
        }*/

        $woredas = Woreda::all();

        //** retrive indicators porsion 
        $woreda_indicator_value = Data::select('indicator_id','woreda_id',DB::raw('SUM(value) as woreda_value') )->groupBy('woreda_id', 'indicator_id')->get();
        //** for all woredas request indicators index and update or insert data
        foreach ($woredas as $workey => $woreda) {

            foreach ($woreda_indicator_value as $indkey => $data) {
                if($woreda->id == $data->woreda_id){


                    if(
                        $data->Indicator->name == "HH Size" or $data->Indicator->name == "Hand Washing" or $data->Indicator->name == "Soap and Detergents" or $data->Indicator->name == "Sanitation" or $data->Indicator->name == "Cooking" or $data->Indicator->name == "Solid Fuel"){
                        if($woreda->hh == '' or $woreda->hh == 0){
                            $ri = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                        }
                        else$ri = $this->get_ri($data->Indicator->name, (($data->woreda_value/$woreda->hh)*100));

                    }
                    else if($data->Indicator->name == "Population density"){
                        if($woreda->area == '' or $woreda->area == 0){
                            $ri = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                        }
                        else$ri = $this->get_ri($data->Indicator->name, (($data->woreda_value/$woreda->area)*100));

                    }
                    else if($data->Indicator->name == "Informal Employment"){
                        if($woreda->age == '' or $woreda->age == 0){
                            $ri = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                        }
                        else$ri = $this->get_ri($data->Indicator->name, (($data->woreda_value/$woreda->age)*100));

                    }
                    else if($woreda->population == 0){
                         $ri = array(
                            'risk_index_infection' => 'unavailable', 
                            'risk_index_hospital' => 'unavailable', 
                            'risk_index_death' => 'unavailable'
                        );
                    }
                    else $ri = $this->get_ri($data->Indicator->name, (($data->woreda_value/$woreda->population)*100));
                            

                    $id = DB::table('woreda_ri')->select('id')->where('woreda_id', $woreda->id )->where('indicator_id', $data->indicator_id )->get();
                    
                    if(isset($id[0]->id)){
                      

                     DB::table('woreda_ri')
                                ->where('id', $id[0]->id )
                                ->update([            
                                    'risk_index_infection' => $ri['risk_index_infection'],
                                    'risk_index_hospital' => $ri['risk_index_hospital'],
                                    'risk_index_death' => $ri['risk_index_death'],
                                    'woreda_value' => $data->woreda_value,
                                    'updated_by' => Auth::user()->id
                                ]);
                    }
                    else{
                        DB::table('woreda_ri')
                                
                                ->insert([  
                                    'woreda_id' => $woreda->id,
                                    'indicator_id' => $data->indicator_id,          
                                    'risk_index_infection' => $ri['risk_index_infection'],
                                    'risk_index_hospital' => $ri['risk_index_hospital'],
                                    'risk_index_death' => $ri['risk_index_death'],
                                    'woreda_value' => $data->woreda_value,
                                    'updated_by' => Auth::user()->id
                                ]);

                    }
                }
                
            }
        }
    }

    // ************ Upate subcity Vulnablity Index at Community  ***********
    public function update_subcity_ri(){

        

        $subcities_population = DB::table('woreda')->select('subcity_id',DB::raw('SUM(population) as subcity_population'),DB::raw('SUM(area) as subcity_area'),DB::raw('SUM(adult) as subcity_adult'),DB::raw('SUM(hh) as subcity_hh'))->groupBy('subcity_id')->get();

        foreach ($subcities_population as $key => $city_population) {
            DB::table('subcities')
            ->where('id', $city_population->subcity_id )
            ->update([            
                'population' => $city_population->subcity_population,
                'area' => $city_population->subcity_area,
                'hh' => $city_population->subcity_hh,
                'adult' => $city_population->subcity_adult,
            ]);
        }

        $subcities = Subcity::all();

        $subcity_indicators_value = Data::select('indicator_id','subcity_id',DB::raw('SUM(value) as subcity_value') )->groupBy('subcity_id', 'indicator_id')->get();

        foreach ($subcities as $subkey => $city) {

            foreach ($subcity_indicators_value as $indkey => $data) {
                if($city->id == $data->subcity_id){


                    if(
                        $data->Indicator->name == "HH Size" or $data->Indicator->name == "Hand Washing" or $data->Indicator->name == "Soap and Detergents" or $data->Indicator->name == "Sanitation" or $data->Indicator->name == "Cooking" or $data->Indicator->name == "Solid Fuel"){
                        if($city->hh == '' or $city->hh == 0){
                            $ri = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                        }
                        else$ri = $this->get_ri($data->Indicator->name, (($data->subcity_value/$city->hh)*100));

                    }
                    else if($data->Indicator->name == "Population density"){
                        if($city->area == '' or $city->area == 0){
                            $ri = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                        }
                        else$ri = $this->get_ri($data->Indicator->name, (($data->subcity_value/$city->area)*100));

                    }
                    else if($data->Indicator->name == "Informal Employment"){
                        if($city->age == '' or $city->age == 0){
                            $ri = array(
                                'risk_index_infection' => 'unavailable', 
                                'risk_index_hospital' => 'unavailable', 
                                'risk_index_death' => 'unavailable'
                            );
                        }
                        else$ri = $this->get_ri($data->Indicator->name, (($data->subcity_value/$city->age)*100));

                    }
                    else if($city->population == 0){
                         $ri = array(
                            'risk_index_infection' => 'unavailable', 
                            'risk_index_hospital' => 'unavailable', 
                            'risk_index_death' => 'unavailable'
                        );
                    }
                    else $ri = $this->get_ri($data->Indicator->name, (($data->subcity_value/$city->population)*100));

                    $id= DB::table('subcities_ri')->select('id')->where('subcity_id', $city->id )->where('indicator_id', $data->indicator_id )->get();
                    //dd ($id[0]->id);
                    if(isset($id[0]->id)){

                     DB::table('subcities_ri')
                                ->where('id', $id[0]->id )
                                ->update([            
                                    'risk_index_infection' => $ri['risk_index_infection'],
                                    'risk_index_hospital' => $ri['risk_index_hospital'],
                                    'risk_index_death' => $ri['risk_index_death'],
                                    'subcity_value' => $data->subcity_value,
                                    'updated_by' => Auth::user()->id
                                ]);
                    }
                    else{
                        DB::table('subcities_ri')
                                
                                ->insert
                                ([  
                                    'subcity_id' => $city->id,
                                    'indicator_id' => $data->indicator_id,          
                                    'risk_index_infection' => $ri['risk_index_infection'],
                                    'risk_index_hospital' => $ri['risk_index_hospital'],
                                    'risk_index_death' => $ri['risk_index_death'],
                                    'subcity_value' => $data->subcity_value,
                                    'updated_by' => Auth::user()->id
                                ]);

                    }
                }
                
            }
        }
    }


}

