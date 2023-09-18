<?php

declare(strict_types=1);

namespace App\Constraint;

class LegendaryRarityItem implements QualityLevelConstraint
{
    public function clamp(int $level): int
    {
        return 80;
    }
}