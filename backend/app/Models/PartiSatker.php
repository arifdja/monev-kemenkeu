<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class PartiSatker extends Model
{
    use HasFactory;
    protected $table = 'tb_parti_satker';

    protected $fillable = [
        'kdsatker',
        'nmsatker',
        'nka_satker',
    ];
}
