<?php

declare(strict_types=1);

namespace App\Constraint;

interface QualityLevelConstraint
{
    public function clamp(int $level): int;
}