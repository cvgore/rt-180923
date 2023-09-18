<?php

declare(strict_types=1);

namespace App\Factory;

use App\Constraint\QualityLevelConstraintFactory;
use App\Entity\AgedBrie;
use App\Entity\BackstagePasses;
use App\Entity\ElixirOfTheMongoose;
use App\Entity\GenericItem;
use App\Entity\Sulfuras;
use App\Exception\UnknownItemException;

final class ItemFactory
{
    /**
     * @throws UnknownItemException
     */
    public static function create(string $name, int $sellIn, int $quality): GenericItem
    {
        /** @var class-string<GenericItem> $itemClassName */
        $itemClassName = match ($name) {
            AgedBrie::getName() => AgedBrie::class,
            BackstagePasses::getName() => BackstagePasses::class,
            ElixirOfTheMongoose::getName() => ElixirOfTheMongoose::class,
            Sulfuras::getName() => Sulfuras::class,
            default => throw new UnknownItemException("Unable to create item {$name}"),
        };

        $constraint = QualityLevelConstraintFactory::create($itemClassName);

        return new $itemClassName(
            $sellIn,
            $constraint->clamp($quality)
        );
    }
}