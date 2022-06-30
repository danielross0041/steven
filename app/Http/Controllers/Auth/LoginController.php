<?php

namespace App\Http\Controllers\Auth;
use Auth;
use Session;
use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }


    public function adminLogin(AdminLoginRequest $request)
    {
        try{
        

            if (Auth::guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])) {

                return redirect('/admin');
            }
            return back()->with('error', 'Either Invalid Email/Password Or User not Active');
        }
        catch(\Exception $e){
            return back()->with('error', 'Either Invalid Email/Password Or User not Active');
        }
    }


    public function login1() {
        
        if (Auth::attempt([
            'email' => request('email'),
            'password' => request('password'),
            
            ])) 
        {
            $user = Auth::user();
           
            if($user->status == 1) {
                
                if (Session::get('url') != null) {
                    
                    $url = Session::get('url');
                    Session::forget('url');
                    return redirect($url);
                }
                return redirect()->route('web');
                // echo 'test';
                //return (new AuthResource($user->load('languages')));
            }
            else{
                Auth::logout();
                return back()->with('error', 'Your status is not active');
            }
        }
        else  {
            // dd("here");
            return back()->with('error', 'Either Invalid Email/Password Or User not Active');
        }
    }

    public function adminLogout() {
        Auth::guard('admin')->logout();
        return redirect('/login');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('web_login');
    }
}
