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
     * @param string[] $entityTypes
     * @param string[] $apiKeys
     * @param string|null $via
     *
     * @return \Generator<IndexerResultInterface>
     */
    public function execute(
        array $entityTypes = [],
        array $apiKeys = [],
        ?string $via = null,
    ): \Generator;
}
