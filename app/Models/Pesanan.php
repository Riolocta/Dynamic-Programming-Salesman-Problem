<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';
    protected $guarded = [];

    // Relasi ke User
    public function pelanggan()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
        return $this->belongsTo(User::class);
    }
}