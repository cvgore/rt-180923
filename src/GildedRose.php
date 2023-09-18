<?php

declare(strict_types=1);

namespace App;

use App\Entity\GenericItem;
use App\Strategy\ItemDegradationStrategyFactory;

final class GildedRose
{
    public function updateQuality(GenericItem $item): GenericItem
    {
        $itemDegradation = ItemDegradationStrategyFactory::create($item);

        return $itemDegradation->degrade($item);
    }

}