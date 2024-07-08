<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'User registered successfully');
        }
        public function login(Request $request)
        {
            $credentials = $request->only('email', 'password');

            if (auth()->attempt($credentials)) {
                return redirect()->route('dashboard');
            }

            return redirect()->back()->withErrors(['msg' => 'Unauthorized']);
        }

        public function logout()
        {
            auth()->logout();

            return redirect()->route('login');
        }
}
