<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subcity;


class SubcityController extends Controller
{
    //
	public function create()
	{
        //
		return view('incoder.manage');
	}


	public function store(Request $request)
	{
        //

		{
		subcity::create($request->all());

		return redirect()->route('incoder.create')
		->with('success',' created successfully.');
	}
	

}



}
