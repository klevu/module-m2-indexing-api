<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Api\Data\DiscoveryResultInterface;

interface AttributeDiscoveryOrchestratorServiceInterface
{
    /**
     * @param string|null $attributeType
     * @param string[]|null $apiKeys
     * @param int[]|null $attributeIds
     *
     * @return DiscoveryResultInterface
     */
    public function execute(
        ?string $attributeType = null,
        ?array $apiKeys = [],
        ?array $attributeIds = [],
    ): DiscoveryResultInterface;
}
