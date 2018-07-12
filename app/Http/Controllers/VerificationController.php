<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class VerificationController extends Controller
{
    public function verify($token)
    {
        $user = User::where('email_token', $token)->first();

        if ($user) {
            $user->verified = 1;
            $user->email_token = '';
            if ($user->save()) {
                return view('email.email_confirm', compact('user'));
            }
        }
    }
}
