<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Magento\Store\Api\Data\StoreInterface;

interface EntityProviderInterface
{
    /**
     * @param StoreInterface|null $store
     * @param int[]|null $entityIds
     *
     * @return \Generator|null
     */
    public function get(?StoreInterface $store = null, ?array $entityIds = []): ?\Generator;
}
