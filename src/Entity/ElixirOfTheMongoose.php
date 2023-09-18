<?php

declare(strict_types=1);

namespace App\Entity;

use App\Enum\RarityLevel;

final class ElixirOfTheMongoose extends GenericItem
{
    public static function getName(): string
    {
        return 'Elixir of the Mongoose';
    }

    public static function getRarityLevel(): RarityLevel
    {
        return RarityLevel::Common;
    }
}