<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Discovery;

use Magento\Catalog\Model\ResourceModel\Product\Collection as ProductCollection;
use Magento\Store\Api\Data\StoreInterface;

interface ProductEntityCollectionInterface
{
    /**
     * @param StoreInterface|null $store
     * @param int[]|null $entityIds
     * @param int|null $pageSize
     * @param int $currentEntityId
     *
     * @return ProductCollection
     */
    public function get(
        ?StoreInterface $store = null,
        ?array $entityIds = [],
        ?int $pageSize = null,
        int $currentEntityId = 1,
    ): ProductCollection;

    /**
     * @param string|null $entityType
     *
     * @return int
     */
    public function getLastId(?string $entityType = null): int;
}
