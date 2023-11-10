<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            $userRole = Auth::user()->role;
            if($userRole == 1){
                return redirect()->intended('/konseli');
            } else if($userRole == 2){
                return redirect()->intended('/konselor');
            } else if($userRole == 3){
                return redirect()->intended('/tim');
            } else if($userRole == 4){
                return redirect()->intended('/pimpinan');
            }
        }
        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(){
        Auth::logout();
    
        request()->session()->invalidate();
        request()->session()->regenerateToken();
    
        return redirect('/login');
    }
}

