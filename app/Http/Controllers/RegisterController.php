<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('registrasi');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama' => ['required','max:255'],
            'nim' => ['max:9','unique:users'],
            'email' => ['required','email:dns','unique:users'],
            'password' => ['required','min:5','max:255'],
            'jk' => ['required']
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/login');
    }
}
