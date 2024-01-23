<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }else{
            return view('login');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }
        return redirect()->route('/login')->withInput($request->only('email'))->withErrors(['error' => 'Invalid email or password']);
    }


    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
