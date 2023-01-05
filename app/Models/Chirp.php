<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    protected $fillable = [
        'message',
    ];

    /**
     * Get the user that owns the chirp.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
