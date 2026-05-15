<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buku;
use App\Models\Buku as ModelsBuku;
use Illuminate\Routing\Controller;

class BukuController extends Controller
{
    public function debugBuku()
    {
        $data = Buku::all();
        dd($data);
    }
}
