<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
use App\Models\indicator;
use Illuminate\Http\Request;



class IndivdualIndController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
         {
        $indi = indicator::where('catagory','=',"Individual")->paginate(5);
    
        return view('../expert.indicator',compact('indi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    }


       public function create()
    {
        //
         return view('expert.indi.createindi');
}



      public function store(Request $request)
    {
       return $request;
    //     //
    //     {
    //      $request->validate([
    //         'name' => 'required',
    //         'discription' => 'required',
    //         'catagory' => 'required',
    //         'userid' => 'required',
        
    //     ]);
    
    //     indicator::create($request->all());
     
    //     return redirect()->route('indi.index')
    //                     ->with('success','Indicator saved .');
    // }

    }
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\indicator  $ind
     * @return \Illuminate\Http\Response
     */

     public function show(indicator $indi)
    {
       return view('expert.indi.showindi', compact('indi'));
    
        //return dd($expert->name);
    }

    public function edit(indicator $indi)
    {
        //
        return view('expert.indi.editindi',compact('indi'));
    }
    


public function update(Request $request, indicator $indi)
    {
                $request->validate([
            'name' => 'required',
            'discription' => 'required',
            'catagory' =>'required',
            'userid' => 'required',
        ]);
    
        $indi->update($request->all());
    
        return redirect()->route('indi.index')
                        ->with('success','indicator updated successfully');
    }

    public function destroy(indicator $indicator)
    {
        $indicator->delete();

        return redirect()->route('indi.index')
            ->with('success', 'indicator deleted successfully');
            //return dd($indicator->id);
    }

         
}
