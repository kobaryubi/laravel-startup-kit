<?php

namespace App\Models;

use App\Events\ChirpCreated;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    protected $fillable = [
        'message',
    ];

    protected $dispatchesEvents = [
        'created' => ChirpCreated::class
    ];

    /**
     * Get the user that owns the chirp.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
