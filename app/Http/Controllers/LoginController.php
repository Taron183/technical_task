<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public  function showLoginForm()
    {
        return view('login_form');
    }

    public  function login(Request $request)
    {

    }
}
