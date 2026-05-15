<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\LukieController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/1', function () {
    return view('pertemuan-3');
});
Route::get('/2', function () {
    return view('pertemuan3');
});
Route::get('/3', function () {
    return view('percobaan');
});
Route::get('/buku/debug', [BukuController::class,'debugBuku']);
Route::get('/quiz/F1E324029', [QuizController::class,'tampilkan_quiz']);
Route::get('/Lukie', [LukieController::class,'Informatika']);
Route::get('/relasi/one-to-one', [RelasiController::class, 'oneToOne']);
Route::get('/relasi/one-to-many', [RelasiController::class, 'oneToMany']);
Route::get('/relasi/many-to-many', [RelasiController::class, 'manyToMany']);
Route::get('/fakultas', [RelasiController::class, 'fakultas']);