<?php

declare(strict_types=1);

namespace App\Entity;

use App\Enum\RarityLevel;

final class BackstagePasses extends GenericItem
{
    public static function getName(): string
    {
        return 'Backstage passes to a TAFKAL80ETC concert';
    }

    public static function getRarityLevel(): RarityLevel
    {
        return RarityLevel::Common;
    }
}