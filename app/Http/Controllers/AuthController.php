<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credential = $request->only('email', 'password');
        $user = User::where(['email'=>$request->email])->first();

        if(Auth::attempt($credential)){
            $request->session()->put('user', $user);
            Auth::login($user);
            return redirect('/admin');
        }
        return redirect()->back()->withErrors([
            'email' => "Wrong Email or Password"
        ]);
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
