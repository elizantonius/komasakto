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

        $resuest->validate([

            'username' => 'required',
            ''
        ])
    }



}
