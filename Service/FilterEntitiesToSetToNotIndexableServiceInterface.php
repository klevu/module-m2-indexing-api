<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Model\MagentoEntityInterface;

interface FilterEntitiesToSetToNotIndexableServiceInterface
{
    /**
     * @param MagentoEntityInterface[] $magentoEntities
     * @param string $type
     * @param string $apiKey
     * @param int[]|null $entityIds
     * @param string[]|null $entitySubtypes
     *
     * @return int[]
     */
    public function execute(
        array $magentoEntities,
        string $type,
        string $apiKey,
        ?array $entityIds = [],
        ?array $entitySubtypes = [],
    ): array;
}
