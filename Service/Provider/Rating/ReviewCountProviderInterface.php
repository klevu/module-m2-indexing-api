<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Rating;

interface ReviewCountProviderInterface
{
    /**
     * @param int $productId
     * @param int $storeId
     *
     * @return int
     */
    public function get(int $productId, int $storeId): int;
}
