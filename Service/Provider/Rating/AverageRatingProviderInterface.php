<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Rating;

use Klevu\IndexingProducts\Exception\InvalidRatingValue;
use Magento\Framework\Exception\NoSuchEntityException;

interface AverageRatingProviderInterface
{
    /**
     * @param int $productId
     * @param int $storeId
     *
     * @return float|null
     * @throws InvalidRatingValue
     * @throws NoSuchEntityException
     */
    public function get(int $productId, int $storeId): ?float;
}
