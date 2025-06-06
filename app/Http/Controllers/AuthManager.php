<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


class AuthManager extends Controller
{
    function login(){
        return view('login');
    }


    function register(){
        return view('register');
    }


    function loginPost(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
       
        $credentials = $request->only(['username', 'password']);
        if(Auth::attempt($credentials)){
            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("error", "Login details are not valid");
    }
   
    function registerPost(Request $request){
       $request->validate([
        'username' => 'required|string|max:255|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5|confirmed',
    ]);


        $user = User::create([
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);


        if (!$user) {
        return redirect(route('register'))->with("error", "Registration failed, try again!");
        }


        return redirect(route('login'))->with("success", "Registration successful, login now!");
}


    // function logout(){
    //     session::flush();
    //     Auth::logout();
    //     return redirect(route('login'));
    // }
}
