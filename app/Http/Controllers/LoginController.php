<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        $email = $request->email;
        $password = $request->password;
        
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect()->route('login.index');
        }
        return back()->withErrors([
            'email' => 'Credenciales Incorrectas',
        ])->onlyInput('email');
    }

    public function index(){
        return view('login.index');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login.index');
    }
}
