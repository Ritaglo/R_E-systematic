<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
     *
     * @var string
     */
    protected function authenticated(Request $request, $user){

        $user=User::where('email',$request->input('email'))->pluck('jabatan');
        $c=" ".$user." ";
        $a=strcmp($c,' ["admin"] ');
        
        if ($a==0) {
            return redirect('admin');
        
        }else{
            return redirect('user');
        
        }}
        
    
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
