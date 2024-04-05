<?php

namespace App\Traits;

trait ModifiedEnum
{
    public static function fromInt(int $value): string
    {
        return match($value) {
            1 => self::USER->name,
            2 => self::ADMIN->name,
            default => throw new \InvalidArgumentException("Invalid role value"),
        };
    }
}
