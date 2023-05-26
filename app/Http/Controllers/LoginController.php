<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function Login(){
        return view('Login_Page.Login_Admin');
    }
    public function Register(){
        return view('Sign_Up_Page.Register');
    }
    public function registeruser(Request $request){


        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'NoTelp' => $request->NoTelp,
            'password' => Hash::make($request->password),
            'remember_token' => Str::random(60)
        ]);

        if(Auth::login($user)){
                $request->session()->regenerate();
                return redirect('/Admin_Dashboard');
        }
        //    return redirect()->route('AdminLogin');

        return redirect('/');
}

    public function loginprocess(Request $request){
        $data1 = $request->only('username', 'password');
        // dd($data);
        // dd(Auth::attempt($data));


        /* if(Auth::attempt($request->only('name', 'password'))){
            return redirect('/Admin_Dashboard');
        } */

        if(Auth::attempt($data1)){
            $request->session()->regenerate();
            return redirect('/Admin_Dashboard');
        }

        dd(Auth::check());

        return back();
    }

    public function loginAttempt(Request $request){
        // $data = [
        //     'username' => $request->username,
        //     'password' => $request->password,
        // ];

        // if(auth()->attempt($data)){
        //     dd(Auth::check());
        //     $request->session()->regenerate();
        //     return redirect()->route('AdminDashboard');
        // }else{
        //     dd(Auth::check());
        // }

        /* $request->validate([
            'username'=>'required',
            'password'
        ]) */

        return redirect('/');
    }

    public function StaffLogin(){
        return view('Login_Page.Login_Staff');
    }
}
