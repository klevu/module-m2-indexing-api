<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Bundle\Price;

use Magento\Bundle\Pricing\Price\FinalPriceInterface;
use Magento\Catalog\Api\Data\ProductInterface;

interface FinalPriceProviderInterface
{
    /**
     * @param ProductInterface $product
     *
     * @return FinalPriceInterface
     */
    public function get(ProductInterface $product): FinalPriceInterface;
}
