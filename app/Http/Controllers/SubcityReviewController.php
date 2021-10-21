<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CalculateRI;
use App\Models\Subcity;
use App\Models\Woreda;
use App\Models\Data;
use App\Models\SubcitiesRi;
use App\Models\WoredaRi;
use App\Models\Indicator;

class SubcityReviewController extends Controller
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

/*		$IR = new CalculateRI;
        $ri_detail = $IR->get_woreda_min_max_sum();
        //dd($IR->get());

        $subcities = DB::table('subcities')
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
                                    ->get();*/
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
               $subcities = DB::table('subcities')
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
                                   /* ->where('catagory','=','community')*/
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
                                    ->get();

        $indicators = Indicator::all();


        $subcities_new = Subcity::all();
        $subcity_ri_new = SubcitiesRi::all();
//dd($subcity_ri_new);
        $woreda_ri_new = WoredaRi::all();
        $woreda_new = Woreda::all();

                                    
       // dd($indicatorsData);
        return view('expert.subcityReview', compact('ketenas', 'indicatorsCommunity', 'indicatorsData','woredas', 'subcities','woreda_ri', 'indicators','subcities_new', 'subcity_ri_new', 'woreda_ri_new', 'woreda_new'));

    	//return view('expert.subcityReview');
    }

    public function store(Request $request, SubcityReviewController $city )
    {
    	 $request->validate([
            'city_id' => 'required',
        ]);
    	DB::table('subcities')
                    ->where('id', $request->city_id)
                    ->update(
                        [
                            'review' => $request->city_review
                        ]);

        return redirect()->route('subreview.index')
                        ->with('success','Review updated successfully');
    

    }


    public function update(Request $request)
    {
    	//dd($request);	
        //
        $request->validate([
            'review' => 'required',
            'description' => 'required',
        ]);
    
        $post->update($request->all());
    
        return redirect()->route('subreview.index')
                        ->with('success','Post updated successfully');
    }

    public function show(Request $data)
    {
    	dd($data);
        //
        return view('expert.subcityReview', compact('data'));
    }

}



