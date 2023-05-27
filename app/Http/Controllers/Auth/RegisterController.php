<?php

namespace satlex\Http\Controllers\Auth;

use satlex\Http\Controllers\Controller;
use satlex\Providers\RouteServiceProvider;
use satlex\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo ='/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email:filter', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'phone' => ['required'],
            'username' => ['required', 'unique:users'],
        ]);

        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \satlex\User
     */
    protected function create(array $data)
    {
        return User::create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'user_type' => 'user'
        ]);
        
    }

    public function signup(Request $request) {
        
        $this->validator($request->all())->validate();

        $this->create($request->all());

       if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password], true)) {
           // return redirect()->route('user.dashboard');         
        /*     if(empty($request->invite_token)) {

                return redirect('/user');

            }else if(!empty($request->invite_token) ){

                return redirect("/generate-invoice"."/".$request->invite_token);

            } */

       }
    }
}