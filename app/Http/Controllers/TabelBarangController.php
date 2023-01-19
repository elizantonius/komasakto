<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TabelBarangController extends Controller
{
    public function index(){

        return view('tabelbarang');
    }
}
