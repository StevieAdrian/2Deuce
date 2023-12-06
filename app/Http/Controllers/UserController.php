<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function home()
    {
        return view('home');
    }

    public function registerProcess(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('movie');
    }

    public function loginProcess(Request $request){
        if(Auth::attempt(
            ['email' => $request->email,
            'password' => $request->password])
        ){
            $request->session()->regenerate();
            // dd($request);
            // var_dump($request);
            return redirect()->route('movie');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('register');
    }
}
