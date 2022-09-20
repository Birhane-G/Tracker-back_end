<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    function signup(Request $request){
        $user = new User;
        $user->name = $request->input('uname');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('pass'));
        $user->save();
        return $user;
    }
    function signin(Request $request){
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return ['error'=>"Email or password is not match"];
        }
        return $user;
    }
}
