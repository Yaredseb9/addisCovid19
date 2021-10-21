<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    
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
        {
        //             'name',
        // 'email',
        // 'password',
        // 'role',
        // 'assiged_at',
        // 'created_at'

          // $users = User::all();
             //$users = DB::table('users')->get();
            //$users = User::all();
            //dd($users);

            $adminUsers = User::where('role','=', 'admin')->get();
            $expertUsers = User::where('role','=', 'expert')->get();
            $encoderUsers = User::where('role','=', 'encoder')->get();
            $i=1;
        
            return view('admin.home', compact('adminUsers', 'expertUsers', 'encoderUsers','i'));
            //return view('admin.users',['users' => $users]);
                
        }

        //return view('admin.home');
    }

    public function users()
    {
        {
           $users = User::all();
             //$users = DB::table('users')->get();
        
            return view('admin.users',compact('users'));
            //return view('admin.users',['users' => $users]);
                
        }

        //return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.create');
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
         $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required',
            
            /*'ass' => 'required',*/
        
        ]);
      $user = new User;

        $user->name = $request->name;
        $user ->role = $request->role;
        $user->email =$request ->email;
        $user->password  = password_hash(($request->name . "covid"),PASSWORD_DEFAULT);

        $user->save();
    
        //User::create($request->all());
     
        return redirect()->route('admin.index')
                        ->with('success','User saved .');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function show(User $admin)
    {
       return view('admin.show', compact('admin'));
    
        //return dd($expert->name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function edit(User $admin)
    {
        //
        return view('admin.edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  
public function update(Request $request, User $admin)
    {
                $request->validate([
            'name' => 'required',
            'mail' => 'required',
            'role' =>'required',
           /* 'ass' =>'required',*/
        ]);
    
        $admin->update($request->all());
    
        return redirect()->route('admin.index')
                        ->with('success','user updated successfully');
                       // return dd($request->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

       // return dd($user);
        $user->delete();

        return redirect()->route('admin.index')
            ->with('success', 'user deleted successfully');
            //return dd($indicator->id);
    }
}
