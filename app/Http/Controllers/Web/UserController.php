<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateProfileRequest;
use App\Http\Requests\UserRegistrationRequest;
use App\Models\User;
use Auth;
use Hash;
use Carbon\Carbon;
use Storage;
use Session;


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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRegistrationRequest $request)
    {
        try{
            $playerRole = config('roles.models.role')::where('name', '=', 'Player')->first();
            $userRole = config('roles.models.role')::where('name', '=', 'User')->first();

            $feilds = array(
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'password' => Hash::make($request->password),
                'contact_no' => $request->contact_no,
                'nick' => $request->nick,
                'age' => $request->age,
                'status' => 1,
                'gender' => $request->gender,
                'language' => $request->language
            );
            
            
            $user = User::create($feilds);
            if ($request->role == 1) {
                $user->attachRole($playerRole);
            } else{
                $user->attachRole($userRole);
            }
            
            if($request->has('image')){
                $files = $request->image;
                $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
                $filePath = "user/".$user->id."/logo/" . time() . "." . $files->getClientOriginalExtension();
                $file = Storage::disk('public')->put($filePath, file_get_contents($files));
                $image_feilds = array('image'=>$filePath);
                $image = User::where('id',$user->id)->update($image_feilds);
            }
            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
            ];
            if (Auth::attempt($credentials)) {
                return redirect()->route('web')->with('message', 'User successfully saved');
            }
            return back()->with('error', 'User Unsuccessful');
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
        
    }

    public function profile()
    {
        $user = User::where('id',Auth::user()->id)->first();
        return view('website.profile')->with(compact('user'));
    }


    public function profile_update(UserUpdateProfileRequest $request)
    {
        // dd("here");
        try{
            $feilds = array(
                'name' => $request->name,
                'address' => $request->address,
                'contact_no' => $request->contact_no,
                'nick' => $request->nick,
                'age' => $request->age,
                'status' => 1,
                'gender' => $request->gender,
                'language' => $request->language,
            );
            
            $user = User::where('id',Auth::user()->id)->update($feilds);
            if($request->has('image')){
                $files = $request->image;
                $fileName = pathinfo($files->getClientOriginalName(), PATHINFO_FILENAME);
                $filePath = "user/".Auth::user()->id."/logo/" . time() . "." . $files->getClientOriginalExtension();
                $file = Storage::disk('public')->put($filePath, file_get_contents($files));
                $image_feilds = array('image'=>$filePath);
                $image = User::where('id',Auth::user()->id)->update($image_feilds);
            }
            // dd("here");
            return redirect()->route('web')->with('message', 'Profile Update Successfully');
        } catch(\Exception $e){
            return back()->with('message', $e->getMessage());
        }
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd("here");
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
    }
}
