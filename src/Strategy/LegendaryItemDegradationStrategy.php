<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Entity\GenericItem;

/**
 * A legendary item, never has to be sold or decreases in Quality
 */
final class LegendaryItemDegradationStrategy extends ItemDegradationStrategy
{
    protected function getModifiedQuality(GenericItem $item): int
    {
        return 80;
    }

    protected function getModifiedSellIn(GenericItem $item): int
    {
        return $item->sellIn;
    }
}