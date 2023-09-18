<?php

declare(strict_types=1);

namespace App\Constraint;

use App\Entity\GenericItem;
use App\Enum\RarityLevel;

final class QualityLevelConstraintFactory
{
    /**
     * @param class-string<GenericItem>|GenericItem $item
     * @return QualityLevelConstraint
     */
    public static function create(GenericItem|string $item): QualityLevelConstraint
    {
        return match ($item::getRarityLevel()) {
            RarityLevel::Common => new CommonRarityItem(),
            RarityLevel::Legendary => new LegendaryRarityItem(),
        };
    }
}