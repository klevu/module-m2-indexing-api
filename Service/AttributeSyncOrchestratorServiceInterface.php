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
     * @param string|null $attributeType
     * @param string|null $apiKey
     *
     * @return SyncResultInterface[][][]
     */
    public function execute(
        ?string $attributeType = null,
        ?string $apiKey = null,
    ): array;
}
