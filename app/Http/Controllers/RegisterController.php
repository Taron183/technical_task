<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Mail\SendVerificationEmail;


class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registration_form');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password',
        ]);

        $user = User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'email_token' => base64_encode($request['email']),
        ]);

        if($user){
            $email = new SendVerificationEmail($user);
            Mail::to($user->email)->send($email);
        }

        Session::flash('success_message', 'Thank you for creating Armface account, please verify your account!');
        return redirect()->back();

    }
}
