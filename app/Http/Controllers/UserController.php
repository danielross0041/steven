<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminUserRegistrationRequest;
use App\Http\Requests\AdminUserUpdateRequest;
use App\Models\User;
use App\Models\Admin;
use Hash;
use Storage;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        {
            $users = User::where('status',1)->get();  
            return view('users.index', compact('users'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        {
           
            return view('users.create');
        
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUserRegistrationRequest $request)
    {
        try{
            $playerRole = config('roles.models.role')::where('name', '=', 'Player')->first();
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->password = Hash::make($request->password);
            $user->contact_no = $request->contact_no;
            $user->nick=$request->nick;
            $user->age=$request->age;
            $user->gender=$request->gender;
            $user->language=$request->language;
            $user->status = $request->status;
            $user->save();   
            if($request->has('image')){
                $files = $request->image;
                $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
                $filePath = "user/".$user->id."/logo/" . time() . "." . $files->getClientOriginalExtension();
                $file = Storage::disk('public')->put($filePath, file_get_contents($files));
                $user->image = $filePath;
            }
            $user->attachRole($playerRole);
            $user->update();
            return back()->with('success', 'User successfully saved');
        } catch(\Exception $e){
            return back()->with('error', $e->getMessage());
        }

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        {
            $user = User::find($id);
            return view('users.edit',compact('user'));
        
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUserUpdateRequest $request, $id)
    {
        //
        
            //
            
            $user = User::find($id);
            $user->name = $request->name;
            $user->address = $request->address;
            if (isset($request->password) && $request->password!='' && $request->password!= null) {
                $user->password = Hash::make($request->password);
            }
            $user->contact_no = $request->contact_no;
            $user->nick=$request->nick;
            $user->age=$request->age;
            $user->gender=$request->gender;
            $user->language=$request->language;
            $user->status = $request->status;
            if($request->has('image')){
                $files = $request->image;
                $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
                $filePath = "user/".$user->id."/logo/" . time() . "." . $files->getClientOriginalExtension();
                $file = Storage::disk('public')->put($filePath, file_get_contents($files));
                $user->image = $filePath;
            }
            $user->update();  
            // dd($user);
            return back()->with('success', 'User successfully edited');
    
        }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $users = User::find($id);
        $users->delete();
        return back()->with('success', 'User deleted successfully');
    }

    public function admin(){
        $users = Admin::all();  
        return view('users.admin', compact('users'));
    }
}
