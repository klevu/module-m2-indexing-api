<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Api\Data\DiscoveryResultInterface;

interface EntityDiscoveryOrchestratorServiceInterface
{
    /**
     * @param string|null $entityType
     * @param string[]|null $apiKeys
     * @param int[]|null $entityIds
     *
     * @return DiscoveryResultInterface
     */
    public function execute(
        ?string $entityType = null,
        ?array $apiKeys = [],
        ?array $entityIds = [],
    ): DiscoveryResultInterface;
}
