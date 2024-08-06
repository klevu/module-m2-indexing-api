<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Model\Source;

use Klevu\Configuration\Traits\EnumTrait;

enum IndexType: int
{
    use EnumTrait;

    case NO_INDEX = 0;
    case INDEX = 1;

    /**
     * @return string
     */
    public function label(): string
    {
        return match($this) //phpcs:ignore PHPCompatibility.Variables.ForbiddenThisUseContexts.OutsideObjectContext
        {
            self::NO_INDEX => 'No',
            self::INDEX => 'Yes',
        };
    }

    /**
     * @return bool
     */
    public function isIndexable(): bool
    {
        return match($this) //phpcs:ignore PHPCompatibility.Variables.ForbiddenThisUseContexts.OutsideObjectContext
        {
            self::NO_INDEX => false,
            self::INDEX => true,
        };
    }
}
