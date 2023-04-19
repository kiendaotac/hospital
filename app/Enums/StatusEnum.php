<?php

namespace App\Enums;

enum StatusEnum: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';

    public static function toArray(): array
    {
        return array_map(function ($item) {
            return $item->value;
        }, self::cases());
    }

    public static function toSelectOption()
    {
        $data = [];
        foreach (self::cases() as $item) {
            $data[$item->value] = $item->value;
        }

        return $data;
    }
}
