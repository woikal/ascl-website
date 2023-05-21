<?php

namespace App\Models;

enum RoleType: string
{
    case CHAIRMAN = 'chairman';
    case TREASURER = 'treasurer';
    case SECRETARY = 'secretary';
    case ADVISOR = 'advisor';
    case TECHNICIAN = 'technician';
    case OTHER = 'other';

    public static function all(): array
    {
        return array_map(fn($case) => $case->value, self::cases());
    }
}
