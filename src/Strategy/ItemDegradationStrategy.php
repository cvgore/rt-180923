<?php

declare(strict_types=1);

namespace App\Strategy;

use App\Entity\GenericItem;
use App\Exception\UnknownItemException;
use App\Factory\ItemFactory;

abstract class ItemDegradationStrategy
{
    /**
     * @throws UnknownItemException
     */
    final public function degrade(GenericItem $item): GenericItem
    {
        return ItemFactory::create(
            name: $item::getName(),
            sellIn: $this->getModifiedSellIn($item),
            quality: $this->getModifiedQuality($item)
        );
    }

    protected function getModifiedSellIn(GenericItem $item): int
    {
        return $item->sellIn - 1;
    }

    abstract protected function getModifiedQuality(GenericItem $item): int;
}