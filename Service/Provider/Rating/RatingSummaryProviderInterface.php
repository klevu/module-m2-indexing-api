<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Rating;

use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Review\Model\Rating;

interface RatingSummaryProviderInterface
{
    /**
     * @param int $productId
     * @param int $storeId
     *
     * @return Rating|null
     * @throws NoSuchEntityException
     */
    public function get(int $productId, int $storeId): ?Rating;
}
