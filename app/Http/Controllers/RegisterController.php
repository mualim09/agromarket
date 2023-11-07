<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|max:255',
            'confirm_password' => 'required|same:password'  
        ]);
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'flag' => 1,
        ];
        
        $user = User::create($data);

        return redirect('/');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        
        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard-seller');
        }

        return redirect()->back()->with('loginError', 'Gagal Login !!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}