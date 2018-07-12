<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login_form');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            if (Auth::user()->verified == 1) {
                return redirect('/profile');
            } else {
                Auth::logout();
                return back()->with('error', 'Your account is not verified, please verify your account!');
            }
        } else {
            return back()->with('error', 'Email or Password is incorrect');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
