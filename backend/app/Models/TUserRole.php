<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TUserRole extends Model
{
    use HasFactory;
    protected $table = 't_user_role';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kdgrpuser',
        'nmgrpuser',
        'base_role',
    ];
}
