<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Entity\GenericItem;

final class OlderBetterDegradationStrategy extends ItemDegradationStrategy
{
    protected function getModifiedQuality(GenericItem $item): int
    {
        if ($item->sellIn <= 0)
        {
            return $item->quality + 2;
        }

        return $item->quality + 1;
    }
}