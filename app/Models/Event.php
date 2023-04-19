<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'status',
        'name',
        'description',
        'start_at',
        'end_at',
        'max_players',
    ];

    protected $casts = [
        'start_at' => 'datetime',
        'end_at'   => 'datetime',
    ];

    public function location(): Relation
    {
        return $this->belongsTo(Location::class);
    }

    public function participants(): Relation
    {
        return $this->hasMany(Participant::class);
    }

    // public function members(): Relation{return $this->hasMany(Player::class);}
}
