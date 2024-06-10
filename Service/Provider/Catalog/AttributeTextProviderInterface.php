<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Catalog;

use Klevu\IndexingProducts\Exception\InvalidAttributeCodeException;
use Klevu\Pipelines\Exception\TransformationException;
use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\Exception\LocalizedException;

interface AttributeTextProviderInterface
{
    /**
     * @param ProductInterface $product
     * @param string $attributeCode
     *
     * @return string[]|string|null
     * @throws InvalidAttributeCodeException
     * @throws LocalizedException
     * @throws TransformationException
     */
    public function get(ProductInterface $product, string $attributeCode): array|string|null;
}
