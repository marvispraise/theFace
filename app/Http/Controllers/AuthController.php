<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Webpatser\Uuid\Uuid;

class AuthController extends Controller
{
    public function userLogin()
    {
        return view('users.login');
    }

    public function userRegister()
    {
        return view('users.register');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/');
        }
        return redirect()->route('userLogin')->with('errs','Wrong Credentials');
    }

    public function postRegistration(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);

        $data = $request->all();

        $check = $this->create($data);
        if ($check){
            return redirect()->route('index');
        }
      return back()->with('errs', 'Something went wrong');

    }

    public function dashboard()
    {

        if(Auth::check()){
            return view('dashboard');
        }
        return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
        return User::create([
            'unique_id' => Uuid::generate(),
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route('index');
    }
}
