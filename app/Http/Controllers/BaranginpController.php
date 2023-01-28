<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Model\Barangmasuk;

class BaranginpController extends Controller
{
    public function index(){

        $user = User::orderBy('id', 'asc');
        
        return view('user.barangmasuk', compact('user'));
    }

    // public function simpandata(Request $request){

    //     $request->validate([

    //         'id' => 'required',

    //     ])
    // }
}
