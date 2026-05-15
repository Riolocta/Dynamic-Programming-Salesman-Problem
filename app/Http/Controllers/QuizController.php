<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class QuizController extends Controller
{
    public function tampilkan_quiz()
    {
        $nama = 'RIOLOCTA LUKIE RAMADIAN';
        $nim = 'F1E324029';
        return view('quiz', compact('nama','nim'));
    } 
}
