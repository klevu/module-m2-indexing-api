<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\ViewModel\Config\Information;

use Klevu\Configuration\ViewModel\Config\FieldsetInterface;

interface IndexingEntitiesInterface extends FieldsetInterface
{
    /**
     * @return bool
     */
    public function hasEntities(): bool;

    /**
     * @return array<string, array<string, array<string, string>>>
     */
    public function getEntities(): array;
}
