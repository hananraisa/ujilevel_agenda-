<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // public function login(Request $request){
    //     if (Auth::attempt($request->only('email','password'))) {
    //         if (auth()->user()->role == 'administrator') {
    //             return redirect('/main');
    //         }else {
    //             return redirect('/viewguru');
    //         }
    //     }
    //     return redirect('/login');
    // }
    public function index(){
        return view('login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/main');
        }

        return back()->with('loginerror', 'Login Gagal');
        
    }

    public function logout(){
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/login');
    }
}
