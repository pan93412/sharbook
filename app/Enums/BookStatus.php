<?php

namespace App\Enums;

enum BookStatus: string
{
    case Unknown = "unknown";
    case New = "new";
    case SecondHanded = "second-handed";

    /**
     * @return string[]
     */
    public static function values(): array
    {
        return array_map(fn($i) => $i->value, self::cases());
    }

    public function toLocalizedString(): string
    {
        return match ($this) {
            self::Unknown => __("未知"),
            self::New => __("新書"),
            self::SecondHanded => __("二手書"),
        };
    }
}
