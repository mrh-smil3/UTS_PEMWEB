<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\AssignOp\Mod;

class Jabatan extends Model
{
    protected $table = 'jabatan';

    public function karyawan()
    {
        return $this->hasMany(Karyawan::class);
    }
}

class Karyawan extends Model
{
    protected $table = 'karyawan';

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
