<?php

   

namespace App\Http\Controllers;

   

use Illuminate\Http\Request;

use App\Rules\MatchOldPassword;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }

   

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {

        return view('auth.changePassword');

    } 

   

    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function store(Request $request)
    {

        $request->validate([

            'current_password' => ['required', new MatchOldPassword],

            'new_password' => ['required'],

            'new_confirm_password' => ['same:new_password'],

        ]);

   

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

        

       auth()->logout();
       return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/login')->with('success',' Password Changed successfully.');


    }

}