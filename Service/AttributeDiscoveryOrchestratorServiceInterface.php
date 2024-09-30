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
     * @param string[] $attributeTypes
     * @param string[] $apiKeys
     * @param int[]|null $attributeIds
     *
     * @return DiscoveryResultInterface
     */
    public function execute(
        array $attributeTypes = [],
        array $apiKeys = [],
        ?array $attributeIds = [],
    ): DiscoveryResultInterface;
}
