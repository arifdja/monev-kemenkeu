<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TUser extends Authenticatable implements JWTSubject
{
    use HasFactory;
    protected $table = 't_user';
    protected $primaryKey = 'id';
    protected $fillable = [
        'source_id',
        'userid',
        'password',
        'kdgrpuser',
        'nama',
        'nip',
        'email',
        'notelp',
        'kdkirim',
        'kdakses',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    
    public function getJWTCustomClaims()
    {
        return [];
    }
}
