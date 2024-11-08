<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcity;
use App\Models\SubcitiesRi;
use App\Models\Woreda;
use App\Models\WoredaRi;
use App\Models\Indicator;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*  public function __construct()
    {
        return view('home');
        //Route::redirect('/here', '/there');
        // $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$IR = new CalculateRI;
        //$ri_detail = $IR->get_woreda_min_max_sum();
        //dd($IR->get());

       /* $subcities = DB::table('subcities')
                ->select('id', 'subcity_name', 'review')
                ->get();

        $ketenas = DB::table('ketena')
                ->select('ketena.id', 'ketana_name', 'ketena.subcity_id','subcities.subcity_name', 'woreda_id','woreda.woreda_name', 'ketena.review')
                ->leftJoin('woreda', 'ketena.woreda_id', '=', 'woreda.id')
                ->leftJoin('subcities', 'woreda.subcity_id', '=', 'subcities.id')
                ->get();
        $woredas = DB::table('woreda')
                ->select('woreda.id', 'woreda_name', 'subcity_id', 'review')
                ->get();


        $indicatorsCommunity = DB::table('indicators')
                                    ->select(DB::raw('indicators.id as indicator_id'), 'indicators.name', 'indicators.discription', 'indicators.catagory', 'indicators.status','indicators.user_id')//, 'data.ketena_id'
                                   // ->where('catagory','=','community')
                                    ->get();

        $indicatorsData = DB::table('indicators')
                                    ->select(DB::raw('data.id as data_id'), DB::raw('indicators.id as indicator_id'),DB::raw('indicators.name as indicator_name'), 'data.ketena_id', 'data.subcity_id', 'data.woreda_id', 'data.value', 'data.user_id', 'data.pationt', 'data.office_id')
                                    ->leftJoin('data', 'indicators.id', '=', 'data.indicator_id')
                                    ->where('data.value','!=',0)
                                    ->get();

        $woreda_ri = DB::table('woreda_ri')
                                    ->select('woreda_id','woreda.woreda_name',DB::raw('subcities.id as subcity_id'),'subcities.subcity_name','RI', 'woreda_max', 'woreda_min', 'vulnerability')
                                    ->leftJoin('woreda', 'woreda_ri.woreda_id','=', 'woreda.id')
                                    ->leftJoin('subcities', 'subcities.id','=','woreda.subcity_id')
                                    ->get();

         $subcity_ri = DB::table('woreda_ri')
                                    ->select('woreda_id','subcities.subcity_name', DB::raw('MIN(woreda_min) as subcity_min'),DB::raw('MAX(woreda_max) as subcity_max'), 'vulnerability',DB::raw('SUM(RI) as subcity_RI'))
                                    ->leftJoin('woreda', 'woreda_ri.woreda_id','=', 'woreda.id')
                                    ->leftJoin('subcities', 'subcities.id','=','woreda.subcity_id')
                                    ->groupby('subcities.id')
                                    ->get();*/

        $indicators = Indicator::all();
        $indicators_infection =  Indicator::where('catagory','=','Infection')->get();
        $indicators_all =  Indicator::where('catagory','=','All')->get();


        $subcities_new = Subcity::all();
        $subcity_ri_new = SubcitiesRi::leftJoin('indicators','indicators.id','=','subcities_ri.indicator_id')->get();
//dd($subcity_ri_new);
        $woreda_new = Woreda::all();
      
        $woreda_ri_new = WoredaRi::leftJoin('woreda', 'woreda_ri.woreda_id', '=', 'woreda.id')
        ->leftJoin('subcities','subcities.id' , '=','woreda.subcity_id')
         ->leftJoin('indicators','indicators.id','=','woreda_ri.indicator_id')->get();

        

                               //     dd($subcity_ri);
/*
        $indicatorsData = DB::table('data')
                                    ->select('data'.'indicator_id', 'indicators'.'name','data' .'woreda_id','woreda'.'woreda_name', DB:raw(SUM('data' .'value') as )
                                    ->leftJoin('data', 'indicators.id', '=', 'data.indicator_id')
                                    ->where('data.value','!=',0)
                                    ->get();



SELECT 'data'.'indicator_id', 'indicators'.'name','data' .'woreda_id','woreda'.'woreda_name', SUM('data' .'value') as IR 
FROM 'data'
LEFT JOIN 'woreda' ON 'woreda'.'id' = 'data'.'woreda_id'
LEFT JOIN 'indicators' ON 'data'.'indicator_id' = 'indicators'.'id'
GROUP BY 'data'.'indicator_id'
*/
       
       // dd($indicatorsData);
        return view('community', 
                        compact( 'subcities_new','subcity_ri_new','indicators','indicators_infection','indicators_all','woreda_new','woreda_ri_new'));
    }

    public function show($subcity_id){

        if ($subcity_id == 'AddisAbabaWoreda') {
            
        //$products = $art->products->take(5)->get();
            $indicators = Indicator::take(5)->get();
            $indicators_infection =  Indicator::where('catagory','=','Infection')->take(5)->get();
            $indicators_all =  Indicator::where('catagory','=','All')->take(5)->get();
            
            $subcities_new = Subcity::all();
            $subcity_ri_new = SubcitiesRi::all();

            $woreda_new = Woreda::all();
            $woreda_ri_new = WoredaRi::leftJoin('woreda', 'woreda_ri.woreda_id', '=', 'woreda.id')
                             ->leftJoin('subcities','subcities.id' , '=','woreda.subcity_id')
                             ->take(3)
                          ->get();

            //$selected_subcity = Subcity::select('subcity_name')->where('id',$subcity_id)->get();

            //dd($woreda_new, $woreda_ri_new[93], $subcity_id);

            return view('communityAAWoreda', 
                            compact( 'subcities_new','subcity_ri_new','indicators','indicators_infection','indicators_all','woreda_new','woreda_ri_new'));

        }

        $indicators = Indicator::all();
        $indicators_infection =  Indicator::where('catagory','=','Infection')->get();
        $indicators_all =  Indicator::where('catagory','=','All')->get();
        $subcities_new = Subcity::all();
        $subcity_ri_new = SubcitiesRi::all();

        $woreda_new = Woreda::all()->where('subcity_id',$subcity_id);
        $woreda_ri_new = WoredaRi::all()->where('Woreda.subcity_id',$subcity_id);

        $selected_subcity = Subcity::select('subcity_name')->where('id',$subcity_id)->get();

        //dd($woreda_new, $woreda_ri_new[93], $subcity_id);

        return view('communitySubcity', 
                        compact( 'subcities_new','subcity_ri_new','indicators','indicators_infection','indicators_all','woreda_new','woreda_ri_new', 'selected_subcity'));
    }
    
}