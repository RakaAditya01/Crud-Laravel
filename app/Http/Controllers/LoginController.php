<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginproses(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
        return redirect('login');
    //   request()->validate(
    //       [
    //           'name' => 'required|max:200',
    //           'email' => 'required',
    //           'password' => 'required|min:6',
              
    //       ]);
    //       $kredensil = $request->only('name','password','email');
    //       if (Auth::attempt([$kredensil])) {
    //         $user = Auth::user();
    //         if ($user->name == 'admin'){
    //             return redirect()->intended('/welcome');
    //         }elseif($user->name == 'guru'){
    //             return redirect()->intended('guru.tabel');
    //         }
    //         return redirect()->intended('/login');
    //       }
    //       return redirect('login')->with('loginError','Login Failed!');
    }

    public function register(){
        return view('register');
    }

    public function registeruser(Request $request){
        // dd($request->all());
        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('/login');
    }
}
