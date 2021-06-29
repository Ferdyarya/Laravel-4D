<?php

namespace App\Http\Controllers;

use App\input;
use Illuminate\Http\Request;

class inputController extends Controller
{
        
    
    public function index()
    {
        $input = input::all(); // select * from mahasiswa
        return view ('input.input', compact('mahasiswa'));
    }

    public function create()
    {
        return "halo saya create, dari mahasiswa controller";
    }
}