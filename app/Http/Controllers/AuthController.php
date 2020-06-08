<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/products');
        }
        return redirect('/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function create(Request $request)
    {
        // dd($request->all());
        // $box = $request->all();
        $user = new \App\User;
        $user->role = 'user';
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone = $request->phone;
        $user->company = $request->company;
        // $user->remember_token = str_random(60);
        $user->save();
        return view('/login');
    }
}
