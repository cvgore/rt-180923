<?php

declare(strict_types=1);

namespace App\Entity;

use App\Enum\RarityLevel;

final class Sulfuras extends GenericItem
{
    public static function getName(): string
    {
        return 'Sulfuras, Hand of Ragnaros';
    }

    public static function getRarityLevel(): RarityLevel
    {
        return RarityLevel::Legendary;
    }
}