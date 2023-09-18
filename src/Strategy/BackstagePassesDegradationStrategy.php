<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Entity\GenericItem;

final class BackstagePassesDegradationStrategy extends ItemDegradationStrategy
{
    protected function getModifiedQuality(GenericItem $item): int
    {
        $sellIn = $item->sellIn;
        $quality = $item->quality;

        if ($sellIn <= 0) {
            return 0;
        }

        if ($sellIn >= 11) {
            return $quality + 1;
        }

        if ($sellIn >= 6) {
            return $quality + 2;
        }

        return $quality + 3;
    }
}