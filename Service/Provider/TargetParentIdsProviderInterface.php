<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

interface TargetParentIdsProviderInterface
{
    /**
     * @param string $entityType
     * @param int $targetId
     *
     * @return int[]
     */
    public function get(
        string $entityType,
        int $targetId,
    ): array;
}
