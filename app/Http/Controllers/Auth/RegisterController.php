<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/member/dashboard';

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'position_id' =>1,
            'bio'=>'empty',
        ]);
    }
    protected function showRegistrationForm() {
        return view('backend.pages.register');
    }
    protected function register(Request $request) {
        //Validator
               $messages = [
               'name.required'=>'Enter the name ',
               'email.unique'=>'This email is already existing',
               'email.email'=>'This email is invalid',
               'email.required'=>'Please enter the email',
               'password.required'=>'Please enter the password',
               'password.min'=>'The length of password must greater than 6',
               'password.confirmed'=>'Please re-type password',
               ];
               $validator = Validator:: make($request->all(),[
               'name' => 'required|max:255',
               'email' => 'required|email|max:255|unique:users',
               'password' => 'required|min:6|confirmed',
               ], $messages);
               if ($validator->fails()) {
               return redirect()->route('register')->withErrors($validator)->withInput();
               } else {
                   $user = new User();
                   $user->name = $request->name;
                   $user->email= $request->email;
                   $user->password = bcrypt($request->password);
                   $user->position_id=$request->position_id;
                   $user->bio='empty';
                   $user->save();
                   return redirect()->route('dashboard');
               }        
    }
}
