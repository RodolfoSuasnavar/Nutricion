<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //


    public function create(Request $data){
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

    }
    public function showRegistrationForm()
    {
        return view('auth.register');
    }
    public function register(Request $request){
        //validar datos
            $user = new User();
            $user->name = $request->post('name');
            $user->email = $request->post('email');
            $user->password = Hash::make($request->post('password'));

            $user->save();

        Auth::login($user);
        return redirect(route('privada'));        $user->name = $request->post('name');



    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request){
        //validación

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('privada'));
        } else {
            return back()->withErrors([
                'email' => 'Las credenciales no coinciden con nuestros registros.',
            ]);
        }

    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
