<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        if (!Auth::attempt($credentials)) {
            return back()->withErrors(['username' => 'Invalid credentials'])->withInput();
        }

        $request->session()->regenerate();

        return redirect()->intended(Auth::user()->role === 'admin' ? '/admin' : '/kasir');
    }
}
