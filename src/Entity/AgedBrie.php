<?php

declare(strict_types=1);

namespace App\Entity;

use App\Enum\RarityLevel;

final class AgedBrie extends GenericItem
{
    public static function getName(): string
    {
        return 'Aged Brie';
    }

    public static function getRarityLevel(): RarityLevel
    {
        return RarityLevel::Common;
    }
}