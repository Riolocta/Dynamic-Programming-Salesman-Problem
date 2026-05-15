<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class LukieController extends Controller
{
    public function Informatika()
    {
        $nama = 'RIOLOCTA LUKIE RAMADIAN';
        $nim = 'F1E324029';
        $mk = 'PEMROGRAMAN BERBASIS PLATFORM';
        return view('Informatika', compact('nama','nim','mk'));
    } 
}
