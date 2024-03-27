<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Model\MagentoEntityInterface;

interface FilterEntitiesToSetToIndexableServiceInterface
{
    /**
     * @param MagentoEntityInterface[][] $magentoEntitiesByApiKey
     * @param string $type
     * @param int[]|null $entityIds
     *
     * @return int[]
     */
    public function execute(array $magentoEntitiesByApiKey, string $type, ?array $entityIds = []): array;
}
