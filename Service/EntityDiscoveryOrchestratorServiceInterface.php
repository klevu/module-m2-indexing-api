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
     * @param string[] $entityTypes
     * @param string[] $apiKeys
     * @param int[]|null $entityIds
     * @param string[]|null $entitySubtypes
     *
     * @return DiscoveryResultInterface
     */
    public function execute(
        array $entityTypes = [],
        array $apiKeys = [],
        ?array $entityIds = [],
        ?array $entitySubtypes = [],
    ): DiscoveryResultInterface;
}
