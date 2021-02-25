<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\User;
use App\Common;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user = Auth::user();
        $avatar = "";
        foreach(Common::$avatarLists as $key => $value)
            $avatar = ($key==$user->avatar)? $value : $avatar;

        return view('profile.index',[
            'user'=>$user,
            'avatar' => $avatar
        ]);
    }

    public function changeAvatar(Request $request)
    {
        $userID = Auth::user()->user_id;
        $avatar = "";
        foreach(Common::$avatarLists as $key => $value)
            $avatar = ($value==$request->avatar_list)? $key : $avatar;
        $user = User::where('user_id',$userID)->first();
        $user->avatar = $avatar;
        $user->save();
        return redirect()->route('profile-index');
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        return redirect()->route('profile-index')->with('alert', 'Profile is updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $validateData = $request->validate([
            'current_password' => [
                'required',
                function ($attribute, $value, $fail) use ($user) {
                    if (!Hash::check($value, $user->password)) {
                        $fail('The current password does not match.');
                    }
                }
            ],
            'password' => 'required|string|min:6|confirmed|different:current_password',
        ]);

        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('profile-index')->with('alert', 'Password is updated successfully!');
    }

}
