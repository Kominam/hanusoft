<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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
        $this->middleware('guest', ['except' => 'logout']);
    }
    protected function showLoginForm() { 
        return view('backend.pages.login'); 
    }
    protected function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
    /*protected function login(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember = ($request->has('remember')) ? true : false;
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember))
        {
            $user = auth()->user();
            return redirect()->route('dashboard');
        }else{
            return back()->with(['error'=>'your username and password are wrong.']);
        }
    }*/

}
