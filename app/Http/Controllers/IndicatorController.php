<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
use App\Models\indicator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndicatorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

  public function index()
  {
          
    //$indicators = indicator::where('catagory',"Community" )->where('status','1')->get();

/*    $indicators = indicator::where('catagory',"Community" )->get();
    
    return view('expert.indicator',compact('indicators'));
*/
    $indicators = indicator::all();
    $nullRevSubcities = DB::table('subcities')->where('review',"" )->get();
    $notNullRevSubcities = DB::table('subcities')->where('review',"!=","" )->get();

    $i=1;

    return view('expert.home', compact('indicators','nullRevSubcities','notNullRevSubcities','i'));


  }

  public function create()
  {
        //
   return view('expert.create');
 }



 public function store(Request $request)
 {
        //return dd($request);
  {
   $request->validate([
    'name' => 'required',
    'discription' => 'required',
    'catagory' => 'required',
    'userid' => 'required',

  ]);

   DB::table('indicators')->insert([            
    'name' => $request->name,
    'discription' => $request->discription,
    'catagory' => $request->catagory,
    'user_id' => $request->userid,
  ]);

// if trigger works remove below
/* 
CREATE TRIGGER `indicator_data_initialization` AFTER INSERT ON `indicators`
 FOR EACH ROW INSERT INTO `data`( `indicator_id`, `ketena_id`, `woreda_id`, `subcity_id`, `user_id`)SELECT (NEW.id ,`id`,`woreda_id`,`subcity_id`, NEW.`user_id`)
 FROM `ketena`

 */

 $new_ind = DB::table('indicators')->select('id')
 ->where([
  ['name', '=', $request->name],
  ['discription', '=', $request->discription],
  ['catagory', '=', $request->catagory],
  ['user_id', '=', $request->userid]
])->get();

 $ketenas = DB::table('ketena')
 ->select('id', 'subcity_id', 'woreda_id')
 ->get();
//  INSERT INTO `data`( `indicator_id`, `ketena_id`, `woreda_id`, `subcity_id`, `user_id`) 
 foreach($ketenas as $key=>$ketena){
  DB::table('data')->insert([            
    'indicator_id' => $new_ind[0]->id,
    'ketena_id' => $ketena->id,
    'woreda_id' => $ketena->woreda_id,
    'subcity_id' => $ketena->subcity_id,
    'user_id' => $request->userid,
  ]);
}
/* $ketenas = DB::table('woreda')
 ->select('id',)
 ->get();
//  INSERT INTO `data`( `indicator_id`, `ketena_id`, `woreda_id`, `subcity_id`, `user_id`) 
 foreach($ketenas as $key=>$ketena){
  DB::table('data')->insert([            
    'indicator_id' => $new_ind[0]->id,
    'woreda_id' => $ketena->id
  ]);
}*/


        // DB::table('indicators')->where('id', $request->id[$i])->update(['arada' => $request->arada[$i]]);
        // indicator::create($request->all());

return redirect()->route('indicator')
->with('success','Indicator saved .');
}

}
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\indicator  $ind
     * @return \Illuminate\Http\Response
     */

     public function show(indicator $expert)
     {
       return view('expert.show', compact('expert'));

        //return dd($expert->name);
     }

     public function edit(indicator $expert)
     {
        //
      return view('expert.edit',compact('expert'));
    }
    


    public function update(Request $request, indicator $expert)
    {

       // dd($expert)


      $request->validate([
        'name' => 'required',
        'discription' => 'required',
        'catagory' =>'required',
        'userid' => 'required',
      ]);

      DB::table('indicators')->where('id', $expert->id)
      ->update([            
        'name' => $request->name,
        'discription' => $request->discription,
        'catagory' => $request->catagory,
        'user_id' => $request->userid,
      ]);

        //$expert->update($request->all());

      return redirect()->route('indicator')
      ->with('success','indicator updated successfully');
    }

    public function destroy(indicator $expert)
    {

     $expert->delete();

      return redirect()->route('indicator')
      ->with('success','Indicator deleted successfully');
     /* return dd($expert->id);*/

    }


    public function softdel(Request $req,indicator $expert){
     DB::table('indicators')->where('id', $req->id)
     ->update([            
      'status' => 0,

    ]);
     return redirect()->route('indicator')
     ->with('success','indicator deleted successfully');

                       // return dd($req->id);
   }


public function indicator()
{
  $indicators = indicator::all();
  return view('expert.indicator', compact('indicators'));
}






}
