<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Komunitas extends Model
{
    use HasFactory;

    protected $table = 'komunitas';
    protected$guarded = [];
    
    public function komunitas_user()
    {
        return $this->belongsToMany(User::class, 'komunitas_user', 'komunitas_id', 'user_id');
    }
 
}
