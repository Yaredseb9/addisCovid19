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
            // ------- data retrival for dashbord ----------------
            $adminUsers = User::where('role','=', 'admin')->where('status',1)->orwhere('role','=', 'admin-subcity')->get();
            $expertUsers = User::where('role','=', 'expert')->where('status',1)->get();
            $encoderUsers = User::where('role','=', 'encoder')->where('status',1)->get();
            $physicianUsers = User::where('role','=', 'physician')->where('status',1)->get();
            $settingUsers = User::where('role','=', 'setting')->where('status',1)->get();
            $gustUsers = User::where('role','=', 'guestcom')->where('status',1)->get();
            $subadminUsers = User::where('role','=', 'admin-subcity')->where('status',1)->get();

            $i=0;
        
            return view('admin.home', compact('adminUsers', 'expertUsers', 'encoderUsers','physicianUsers','settingUsers','gustUsers','subadminUsers','i'));
                
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
                    ->select('id','hospital_name','catagory')
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
        
        // **** input validation  *******
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'role' => 'required',        
       ]);


        // **** data priparatin  *******
        $user = new User;

        $user->name = $request->name;
        $user ->role = $request->role;
        $user->email =$request ->email;
        $user->password  = password_hash(($request->name . "@covid"),PASSWORD_DEFAULT);
        
        if($user->role == 'encoder'){
            $user->assiged_at = $request ->wor;
        }
        if($user ->role == 'physcian'){
            $user->ass_hos = $request ->hos;
        }
        if($user ->role == 'admin-subcity'){
            $user->manage = $request ->sub;
        }

        // **** compose mail and send it  *******
        $email = $request->email;
        $to = $email;
       
        $subject = "Account Registration"; 

        $message = "
                    <html>
                    <head>
                        <title>Registration</title>
                    </head>
                    <body>
                        <h1>Welcome</h1>
                        <p>Dear  ".$request->name.",</p>
                        <p>You have been registerd to addisababacovid19vulnerabilityindex.com/login</p>
                        <br>
                        <hr>
                        <b> Username : <b> ".$email." <br>
                        <b> Password : <b> ".($request->name . "@covid")." <br>
                        <br><hr>
                        <p>Thank you</p>

                    </body>

                    </html>
        ";

        $headers = "MIME-Version: 1.0" . "\r\n";
        //$headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
        $headers .= "Content-type:text/html; charset=iso-8859-1" . "\r\n";
        $headers .= "From: app@test.addisababacovid19vulnerabilityindex.com". "\r\n";
        $headers .= 'Reply-To: app@test.addisababacovid19vulnerabilityindex.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();
        
       // mail($to,$subject,$message,$headers);

        // **** save data  *******
        $user->save();
     
        return redirect()->route('users')
                        ->with('success','User Created  .');    
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
    
        return redirect()->route('users')
                        ->with('success','user updated successfully');
                       // return dd($request->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $req, User $user)
    {

        DB::table('users')->where('id', $req->id)->delete();

       // return dd($user);
        //$user->delete();

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