<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'external_link',
        'max_players',
    ];

    public function events(): Relation
    {
        return $this->hasMany(Event::class);
    }

    public function address(): Relation
    {
        return $this->morph(Address::class, 'addressable');
    }
}
