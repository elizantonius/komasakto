<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){

        $data['judul'] = 'Inventory Komaskto';
        return view('Auth', $data);
    }


    public function login(Request $resuest){

        $request->validate([

            'username' => required,
            'password' => required
        ]);

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){

            $request->session()->regenerate();
            return redirect()->intended('/My');
        }

        return redirect()->back()->withErrors('Maaf, Username dan Password salah');

    }

    public function logout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }



}
