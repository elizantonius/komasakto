<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Satuan;

class SatuanController extends Controller
{
    public function index(){

        $barang = Satuan::lates()->pagination(5);

        return view('inputsatuan');
    }


    public function tambahdata(){

        $request->validate([

            'nama' => required
        ]);

        Satuan::create($request->all());
        return redirect()->intended('/Satuan');
    }
}
