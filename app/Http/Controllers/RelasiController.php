<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use App\Models\Komunitas;
use App\Models\Fakultas;

class RelasiController extends Controller
{
    // 🔵 ONE TO ONE
    public function oneToOne()
    {
        $data = Buku::with('penerbit')->get();
        return view('relasi', compact('data'));
    }

    // 🔵 ONE TO MANY
    public function oneToMany()
    {
        $data = User::with('pesanan')->get();
        return view('relasi.one_to_many', compact('data'));
    }

    
    public function manyToMany()
    {
        $data = User::with('komunitas_user')->get();
        return view('relasi.many_to_many', compact('data'));                    
        return view('relasi', compact('data'));
    }

    public function Fakultas()
    {
        $data = Fakultas::with('prodi')->get();
        return view('relasi.fakultas', compact('data'));
    }
}