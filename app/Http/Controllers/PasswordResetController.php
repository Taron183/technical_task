<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use DB;
use App\Mail\SendResetLinkEmail;
use Mail;
use Session;


class PasswordResetController extends Controller
{
    public function showResetForm()
    {
        return view('reset_form');
    }

    public  function  reset(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
        ]);

        $passwordResets = DB::table('password_resets')->insert([
            'token' => $request['_token'],
            'email' => $request['email'],
        ]);

        if($passwordResets){
            $email = new SendResetLinkEmail($request['_token']);
            Mail::to($request['email'])->send($email);
        }

        Session::flash('success_message', 'Your email sent password reset links');
        return redirect()->back();
    }

    public function changePasswordForm($token)
    {
        return view('pasword_update_form',compact('token'));
    }

    public function updatePassword(Request $request)
    {
        $date = $request->all();
        $this->validate($request, [
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password',
        ]);

        $passwordReset = DB::table('password_resets')->where('token', $date['token'])->first();
        $email = $passwordReset->email;

        $item = User::where('email', $email)->first();
        $dataPassword = [
            'password' => bcrypt($request['password'])
        ];

        $item->fill($dataPassword)->save();
        DB::table('password_resets')->where('token', $date['token'])->update(['token' => '']);
        Session::flash('success_message', 'Your password reset');
       return redirect()->back();

   }
}
