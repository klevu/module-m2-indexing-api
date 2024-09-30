<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Api\Data\SyncResultInterface;

interface AttributeSyncOrchestratorServiceInterface
{
    /**
     * @param string[] $attributeTypes
     * @param string[] $apiKeys
     *
     * @return SyncResultInterface[][][]
     */
    public function execute(
        array $attributeTypes = [],
        array $apiKeys = [],
    ): array;
}
