<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\Indexing\Model\ResourceModel\IndexingEntity\Collection;
use Klevu\IndexingApi\Api\Data\IndexingEntityInterface;
use Klevu\IndexingApi\Model\Source\Actions;

interface IndexingEntityProviderInterface
{
    /**
     * @param string|null $entityType
     * @param string|null $apiKey
     * @param int[]|null $entityIds
     * @param Actions|null $nextAction
     * @param bool|null $isIndexable
     *
     * @return IndexingEntityInterface[]
     */
    public function get(
        ?string $entityType = null,
        ?string $apiKey = null,
        ?array $entityIds = [],
        ?Actions $nextAction = null,
        ?bool $isIndexable = null,
    ): array;

    /**
     * @param string|null $entityType
     * @param string|null $apiKey
     * @param int[][]|null $pairs
     *
     * @return Collection
     */
    public function getForTargetParentPairs(
        ?string $entityType = null,
        ?string $apiKey = null,
        ?array $pairs = [],
    ): Collection;
}
