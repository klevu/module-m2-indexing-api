<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Magento\Catalog\Api\Data\EavAttributeInterface;

interface StaticAttributeProviderInterface extends AttributeProviderInterface
{
    /**
     * @param string $attributeCode
     *
     * @return EavAttributeInterface|null
     */
    public function getByAttributeCode(string $attributeCode): ?EavAttributeInterface;
}
