<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Tax;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

interface ProductTaxProviderInterface
{
    /**
     * @param ProductInterface $product
     * @param float $price
     * @param int|null $customerGroupId
     *
     * @return float
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function get(ProductInterface $product, float $price, ?int $customerGroupId): float;
}
