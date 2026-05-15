<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Komunitas;

class User extends Authenticatable
{
    public function komunitas()
    {
        return $this->belongsToMany(Komunitas::class, 'komunitas_user');
    }
// Relasi ke Pesanan (One To Many)
    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'user_id', 'id');
    }

// Relasi ke Komunitas (Many To Many)
    public function komunitas_user()
    {
        return $this->belongsToMany(komunitas::class, 'komunitas_user','user_id','komunitas_id');
    }
}