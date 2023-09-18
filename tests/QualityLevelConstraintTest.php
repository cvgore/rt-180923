<?php

declare(strict_types=1);

namespace Tests;

use App\Constraint\CommonRarityItem;
use App\Constraint\LegendaryRarityItem;
use App\Constraint\QualityLevelConstraint;
use Generator;
use PHPUnit\Framework\TestCase;

class QualityLevelConstraintTest extends TestCase
{
    /**
     * @dataProvider constraintProvider
     */
    public function testConstraintClamsQuality(
        QualityLevelConstraint $constraint,
        int $givenLevel,
        int $expectedLevel
    ): void
    {
        $this->assertSame($expectedLevel, $constraint->clamp($givenLevel));
    }

    public function constraintProvider(): Generator
    {
        yield 'Common below lower bound' => [new CommonRarityItem(), -1, 0];
        yield 'Common above upper bound' => [new CommonRarityItem(), 51, 50];
        yield 'Common within bounds' => [new CommonRarityItem(), 25, 25];

        yield 'Legendary always same' => [new LegendaryRarityItem(), 10, 80];
    }
}