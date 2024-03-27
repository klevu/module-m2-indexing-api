<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Catalog;

use Magento\Catalog\Api\Data\ProductInterface;

interface CategoryIdProviderInterface
{
    /**
     * @param ProductInterface $product
     *
     * @return int[]
     */
    public function get(ProductInterface $product): array;
}
