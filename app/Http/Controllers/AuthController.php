<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'userType' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->userType = $request->userType;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect()->route('login')->with('success', 'Akaun anda telah didaftar, sila daftar masuk untuk mula sesi.');
    }
    
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/home')->with('success', 'Daftar masuk berjaya');
        }

        return back()->with('error', 'Salah Emel atau Kata Laluan. Sila cuba lagi');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
