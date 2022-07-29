<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function proccess(Request $request)
    {
        $cek_data = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt(($cek_data))) {
            $request->session()->regenerate();
            Alert::success('Login', 'welccome back');
            return redirect()->intended(route('home.index'));
        } else {
            Alert::error('ERROR', 'Hey What Are You');
            return back();
        }
    }
}
