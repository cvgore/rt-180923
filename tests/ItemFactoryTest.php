<?php

declare(strict_types=1);

namespace Tests;

use App\Entity\AgedBrie;
use App\Entity\Sulfuras;
use App\Factory\ItemFactory;
use Generator;
use PHPUnit\Framework\TestCase;

class ItemFactoryTest extends TestCase
{
    /**
     * @dataProvider constraintProvider
     */
    public function testConstraintClamsQuality(
        string $itemClassName,
        int $givenQuality,
        int $expectedQuality
    ): void
    {
        $item = ItemFactory::create($itemClassName, 1, $givenQuality);

        $this->assertSame($item->quality, $expectedQuality);
    }

    public function constraintProvider(): Generator
    {
        yield 'Legendary item same quality' => [Sulfuras::getName(), 1, 80];
        yield 'Common item clamped quality' => [AgedBrie::getName(), 12, 12];
    }
}