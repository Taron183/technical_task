<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $users = User::where('id', '<>', $id)->get();
        return view('profile.profile', compact('users'));
    }


    public function changePasswordshow(Request $request)
    {
        return view('profile.change_password');
    }


    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:6',
            'confirm_password' => 'required|min:6|same:password',
        ]);

        $data = [
            'password' => bcrypt($request['password'])
        ];
        $id = Auth::id();
        $item = User::findOrFail($id);
        $item->fill($data)->save();
        Session::flash('success_message', 'Your password changed');
        return redirect()->back();

    }


    public function avatarPhoto(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            "image" => 'required|mimes:jpeg,jpg,png,gif,svg|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $id = Auth::id();
            $item = User::findOrFail($id);
            if ($item->image) {
                Storage::disk('public')->delete('avatar/' . $item->image);
            }
            $image = $request->file('image');
            Storage::disk('public')->putFile('avatar', $image);
            $data['image'] = $image->hashName();

            $data_img = [
                'image' => $data['image'],
            ];
        }
        $item->fill($data_img)->save();
        return redirect()->back();
    }
}
