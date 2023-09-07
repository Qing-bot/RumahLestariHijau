<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        

        $credential = $request->only('email', 'password');
        $user = User::where(['email'=>$request->email])->first();

        if(Auth::attempt($credential)){
            $request->session()->put('user', $user);
            Auth::login($user);

            if ($user->isAdmin) return redirect('/admin');
            else return redirect ('/');
        }
        return redirect()->back()->withErrors([
            'email' => "Email not registered",
            'password' => "Wrong Password"
        ]);
        
    }

    public function registration(Request $request){
        return view('registration');
    }
    
    public function registerUser(Request $request)
    {

        $validateData = $request->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        return redirect("/")->withSuccess('You have signed-in');

    }
    
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'isAdmin' => '0',
      ]);
    }  

    public function editUser(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|regex:/^[a-z A-Z]+$/u',
            'email' => 'required|email',
        ]);

        $user = Auth::user();
        $data = User::where(['email'=>$user->email])->first();
        $data->name = $request->name;
        $data->email = $request->email;

        $data->save();
        return redirect('/profile');
    }

    public function logout(Request $request) 
    {
        Session:flush();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
