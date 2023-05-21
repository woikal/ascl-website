<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Membership extends Model
{
    use HasFactory;

    public function user(): Relation
    {
        return $this->belongsTo(User::class);
    }

    public function roles(): Relation
    {
        return $this->hasMany(Role::class);
    }

    /** Checks, if membership is still considered active */
    public function isActive(): bool
    {
        return !$this->end_at || $this->end_at->gt(today());
    }

}
