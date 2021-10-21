<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Data;
use App\Models\KetenaRi;
// use App\Http\Controllers\CalculateRI;


class OfficialsController extends Controller
{
	//*********************AUTHENTICAION CONTROL*******************************************************/
	public function __construct()
    {
        $this->middleware('auth');
    }
	//********* OFFICEAL VIEW CONTROLE INDEX CLASS*********************************************/
   public function index(){

    $indicatorsDataEncoded = Data::all()->where('value','!=', 0)->count();
    $indicatorsDataNotEncoded = Data::all()->where('value','=', 0)->count();
    $noAllData = Data::all()->count();



    $subcities = DB::table('subcities')
	    ->select('id', 'subcity_name', 'review')
	    ->get();

 	$woredas = DB::table('woreda')
    	->select('woreda.id', 'woreda_name', 'subcity_id', 'review')
   		->get();


    // $indicatorsData = DB::table('indicators')
    //                     ->select(DB::raw('data.id as data_id'), DB::raw('indicators.id as indicator_id'),DB::raw('indicators.name as indicator_name'), 'data.ketena_id', 'data.subcity_id', 'data.woreda_id', 'data.value', 'data.user_id', 'data.pationt', 'data.office_id')
    //                     ->leftJoin('data', 'indicators.id', '=', 'data.indicator_id')
    //                     ->where('data.value','!=',0)
    //                     ->get();
    //dd($indicatorsData);

   	return view('officials.home', compact('subcities','woredas','indicatorsDataEncoded','indicatorsDataNotEncoded','noAllData'));

   }

	//********* SHOWS OFFICIAL WOREDA SELECTED DATA FROM DB ************************************/

    public function show($woreda_id)
    {
	    $subcities = DB::table('subcities')
		    ->select('id', 'subcity_name', 'review')
		    ->get();

	 	$woredas = DB::table('woreda')
	    	->select('woreda.id', 'woreda_name', 'subcity_id', 'review')
	   		->get();
	   	$selected = DB::table('woreda')
	    	->select('woreda_name', 'subcity_name')
	    	->leftJoin('subcities', 'subcity_id','subcities.id')
	    	->where('woreda.id',$woreda_id)
	   		->get();
        $indicatorsData = KetenaRi::all()->where('Ketena.woreda_id','=',$woreda_id);

       // dd($indicatorsData);
        $i=1;

        return view("officials.home",compact('indicatorsData','subcities','woredas', 'i','woreda_id','selected'));
       
    }
}
