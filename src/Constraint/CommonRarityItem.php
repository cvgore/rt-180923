<?php

declare(strict_types=1);

namespace App\Constraint;

class CommonRarityItem implements QualityLevelConstraint
{
    public function clamp(int $level): int
    {
        return max(0, min(50, $level));
    }
}