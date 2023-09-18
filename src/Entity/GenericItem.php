<?php

declare(strict_types=1);

namespace App\Entity;

use App\Enum\RarityLevel;

abstract class GenericItem
{
    public function __construct(
        public readonly int $sellIn,
        public readonly int $quality
    ) {
    }

    public function __toString(): string
    {
        return "{$this->getName()}, {$this->sellIn}, {$this->quality}";
    }


    abstract static public function getName(): string;

    abstract static function getRarityLevel(): RarityLevel;
}