<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\Indexing\Model\ResourceModel\IndexingEntity\Collection;
use Klevu\IndexingApi\Api\Data\IndexingEntityInterface;
use Klevu\IndexingApi\Model\Source\Actions;
use Magento\Framework\DataObject;

interface IndexingEntityProviderInterface
{
    /**
     *  Note: as sortOrder is required for pagination to work correctly,
     *   if $pageSize is provided then $sorting is ignored and collection is sorted by IndexingEntity::ENTITY_ID
     *
     * @param string|null $entityType
     * @param string[]|null $apiKeys
     * @param int[]|null $entityIds
     * @param Actions|null $nextAction
     * @param bool|null $isIndexable
     * @param array<string, string>|null $sorting [SortOrder::DIRECTION => SortOrder::SORT_ASC, SortOrder::FIELD => '']
     * @param int|null $pageSize
     * @param int|null $startFrom
     * @param string[]|null $entitySubtypes
     *
     * @return array<IndexingEntityInterface&DataObject>
     */
    public function get(
        ?string $entityType = null,
        ?array $apiKeys = [],
        ?array $entityIds = [],
        ?Actions $nextAction = null,
        ?bool $isIndexable = null,
        ?array $sorting = [],
        ?int $pageSize = null,
        ?int $startFrom = 1,
        ?array $entitySubtypes = [],
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
