<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

interface FilterAttributesToUpdateServiceInterface
{
    /**
     * @param string $type
     * @param int[] $attributeIds
     * @param string[] $apiKeys
     *
     * @return int[]
     */
    public function execute(string $type, array $attributeIds, array $apiKeys): array;
}
