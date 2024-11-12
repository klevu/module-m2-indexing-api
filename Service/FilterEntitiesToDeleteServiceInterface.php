<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Api\Data\IndexingEntityInterface;

interface FilterEntitiesToDeleteServiceInterface
{
    /**
     * @param IndexingEntityInterface[] $klevuIndexingEntities
     * @param string $type
     * @param string[] $apiKeys
     * @param string[] $entitySubtypes
     *
     * @return int[]
     */
    public function execute(
        array $klevuIndexingEntities,
        string $type,
        array $apiKeys = [],
        array $entitySubtypes = [],
    ): array;
}
