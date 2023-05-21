<?php

namespace App\Models;

enum MembershipType: string
{
    case REGULAR = 'regular';
    case LIMITED = 'limited';
    case HONORARY = 'honorary';

    public static function all(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }
}
