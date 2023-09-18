<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Entity\AgedBrie;
use App\Entity\BackstagePasses;
use App\Entity\GenericItem;
use App\Enum\RarityLevel;

final class ItemDegradationStrategyFactory
{
    public static function create(GenericItem $item): ItemDegradationStrategy
    {
        if ($item::getRarityLevel() === RarityLevel::Legendary) {
            return new LegendaryItemDegradationStrategy();
        }

        if ($item::class === BackstagePasses::class) {
            return new BackstagePassesDegradationStrategy();
        }

        if ($item::class === AgedBrie::class) {
            return new OlderBetterDegradationStrategy();
        }

        return new OlderWorseDegradationStrategy();
    }
}