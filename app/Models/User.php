<?php

namespace App\Models;

use App\Models\Chirp;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Get the chirps for the user.
     */
    public function chirps()
    {
        return $this->hasMany(Chirp::class);
    }
}
