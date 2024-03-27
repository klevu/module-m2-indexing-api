<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Rating;

use Klevu\IndexingProducts\Exception\InvalidRatingValue;
use Magento\Framework\Exception\NoSuchEntityException;

interface RatingProviderInterface
{
    public const PRODUCT_ID = 'entity_pk_value';
    public const RATING = 'rating';
    public const STORE_ID = 'store_id';
    public const COUNT = 'count';

    /**
     * Must return an array containing the following keys:
     *   static::PRODUCT_ID
     *   static::RATING
     *   static::STORE_ID
     *   static::COUNT
     *
     * @param int $productId
     * @param int $storeId
     *
     * @return array<string, int|float>
     * @throws NoSuchEntityException|InvalidRatingValue
     */
    public function get(int $productId, int $storeId): array;
}
