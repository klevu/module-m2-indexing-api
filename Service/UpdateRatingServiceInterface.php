<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingProducts\Exception\KlevuProductAttributeMissingException;
use Magento\Catalog\Api\Data\ProductInterface;

interface UpdateRatingServiceInterface
{
    /**
     * @param ProductInterface $product
     *
     * @return void
     * @throws KlevuProductAttributeMissingException
     */
    public function execute(ProductInterface $product): void;
}
