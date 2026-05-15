<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

use function PHPUnit\Framework\returnArgument;

class Prodi extends Model
{
    protected $table = 'prodi';
    public function fakultas()
    {
        return $this->belongsToMany(fakultas::class, 'fakultas_id','id');
    }
}
