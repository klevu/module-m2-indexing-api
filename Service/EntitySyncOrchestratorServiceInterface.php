<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Api\Data\IndexerResultInterface;

interface EntitySyncOrchestratorServiceInterface
{
    /**
     * @param string|null $entityType
     * @param string|null $apiKey
     * @param string|null $via
     *
     * @return IndexerResultInterface[]
     */
    public function execute(
        ?string $entityType = null,
        ?string $apiKey = null,
        ?string $via = null,
    ): array;
}
