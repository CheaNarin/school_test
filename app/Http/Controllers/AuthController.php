<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function registerForm(){
        return view('auth.register');

    }
    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'password'=> 'required|string|min:8|confirmed'
        ]);
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect()->route('loginForm')-> with('message','register successfully');
    }
    public function loginForm(){
        return view('auth.login');
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email| string',
            'password'=> 'required| string'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('welcome')->with('message','welcome  back');

        }
        return back()->withErrors([
            'email'=>'Email or password not correct',
            
        ])->onlyInput('email');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('loginForm')->with('message','logut successfully');
    }
}
