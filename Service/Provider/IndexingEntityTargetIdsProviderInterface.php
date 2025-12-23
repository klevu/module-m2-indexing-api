<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

interface IndexingEntityTargetIdsProviderInterface
{
    /**
     * @param int[] $entityIds
     *
     * @return array<int, int> EntityId => TargetId
     */
    public function getByEntityIds(array $entityIds): array;
}
