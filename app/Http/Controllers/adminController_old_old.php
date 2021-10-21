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
       

            $adminUsers = User::where('role','=', 'admin')->get();
            $expertUsers = User::where('role','=', 'expert')->get();
            $encoderUsers = User::where('role','=', 'encoder')->get();
            $physicianUsers = User::where('role','=', 'physician')->get();
            $settingUsers = User::where('role','=', 'setting')->get();
            $gustUsers = User::where('role','=', 'gust')->get();

            $i=0;
        
            return view('admin.home', compact('adminUsers', 'expertUsers', 'encoderUsers','physicianUsers','settingUsers','gustUsers','i'));
            //return view('admin.users',['users' => $users]);
                
        }

        //return view('admin.home');
    }

    public function users()
    {
        {
           $users = User::all();
         
           $i =0;
        
           
        
            return view('admin.users',compact('users','i'));
          
                
        }

           }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $subcities = DB::table('subcities')
                ->select('id', 'subcity_name', 'review')
                ->get();
         $woredas = DB::table('woreda')
                ->select('woreda.id', 'woreda_name', 'subcity_id', 'review')
                ->get();
        $heltcent =  DB::table('health_centers')
                    ->select('id','name','catagory')
                    ->get();
        return view('admin.create',compact('subcities','woredas','heltcent'));
        /* return view('admin.create');*/
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
        
        if($user->role == 'encoder'){
            $user->assiged_at = $request ->wor;
        }
        if($user ->role == 'physcian'){
            $user->ass_hos = $request ->hos;
        }

        $user->save();
    
        //User::create($request->all());
     
        return redirect()->route('admin.index')
                        ->with('success','User saved .');
                        /*return dd($request->wor);*/

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

        return redirect()->route('users')
            ->with('success', 'user deleted successfully');
            //return dd($indicator->id);
    }


public function softdeladmin(Request $req, User $user){
     DB::table('users')->where('id', $req->id)
     ->update([            
      'status' => 0,

    ]);
     return redirect()->route('users')
     ->with('success','User deleted successfully');

                       // return dd($req->id);
   }

public function restoreadmin(Request $req,User $user){
     DB::table('users')->where('id', $req->id)
     ->update([            
      'status' => 1,

    ]);
     return redirect()->route('users')
     ->with('success','User Restored successfully');

                       // return dd($req->id);
   }


   public function multipledeladmin(Request $request)
    {
      $id = $request->id;
        foreach ($id as $user) 
             return dd($request->id);
       /* {
            User::where('id', $user)->delete();
        }
         return redirect()->route('users')
     ->with('success','Trash Empty');*/
    
    }
}