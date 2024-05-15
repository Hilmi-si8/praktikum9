<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('About', [
            'nama' => 'Muhammad Hilmi Nurrasyid',
            'nim' => '0110123297',
            'programStudi' => 'Sistem Informasi',
            'tahunAngkatan' => '2023'
        ]);
    }
}