<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Str;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'event',
        'forename',
        'surename',
        'nickname',
        'email',
        'club',
        'birthday',
        'equipment',
        'rent_equipment',
        'comment',
    ];

    public function event(): Relation
    {
        return $this->belongsTo(Event::class);
    }

/*    public function player(): Relation
    {
        return $this->belongsTo(Player::class);
    }
*/

    private function setToken()
    {
        if ($this->token) {
            return;
        }

        $tokens = self::all('token')->collect();
        do {
            $token = Str::random(32);
        } while ($tokens->contains($token));

        $this->token = $token;
    }
}
