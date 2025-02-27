<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Api\Data\IndexingEntityInterface;

interface FilterEntitiesToSetToIndexableServiceInterface
{
    /**
     * @param IndexingEntityInterface[] $klevuIndexingEntities
     * @param string $type
     * @param string[] $apiKeys
     * @param string[]|null $entitySubtypes
     *
     * @return \Generator<int[]>
     */
    public function execute(
        array $klevuIndexingEntities,
        string $type,
        array $apiKeys,
        ?array $entitySubtypes = [],
    ): \Generator;
}
