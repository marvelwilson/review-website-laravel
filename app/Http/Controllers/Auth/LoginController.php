<?php

namespace satlex\Http\Controllers\Auth;

use satlex\Http\Controllers\Controller;
use satlex\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

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
    }

    public function login(Request $request) {
        if(!Auth::attempt(['email'=>request('email'), 'password'=>request('password')], request("remember"))) {
            $errors = new MessageBag(['credentials' => ['Email and/or password invalid.']]); 
            return Redirect::back()->withInput($request->all())->withErrors($errors);
        }

        if(Auth::user()->user_type == 'user') {

            return redirect('/dashboard');

        }elseif(Auth::user()->user_type == 'customer') {

            return redirect('/cs/dashboard');

        }elseif(Auth::user()->user_type == 'super_admin') {

            return redirect('/sp/dashboard');

        }
        
    }

  
}