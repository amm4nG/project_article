<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function validasi(Request $request)
    {
        $request->validate([
            'username' => ['required', 'min:8'],
            'password' => ['required', 'min:8']
        ]);
        // tampung dalam bentuk array
        $credential = $request->only('username', 'password'); 
        if (Auth::attempt($credential)) {
            return redirect()->intended('home');
        }else{
            return back()->withErrors([
                'username' => 'username invalid'
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
