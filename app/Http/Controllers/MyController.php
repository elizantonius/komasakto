<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){

        // $data = 'Dashboard Komasakto';
        return view('my');
    }
}
