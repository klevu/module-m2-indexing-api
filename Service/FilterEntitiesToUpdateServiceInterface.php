<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

interface FilterEntitiesToUpdateServiceInterface
{
    /**
     * @param string $type
     * @param int[] $entityIds
     * @param string[] $apiKeys
     *
     * @return int[]
     */
    public function execute(string $type, array $entityIds, array $apiKeys): array;
}