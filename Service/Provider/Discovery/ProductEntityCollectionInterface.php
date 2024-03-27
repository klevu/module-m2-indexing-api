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
     *
     * @return ProductCollection
     */
    public function get(?StoreInterface $store = null, ?array $entityIds = []): ProductCollection;
}
