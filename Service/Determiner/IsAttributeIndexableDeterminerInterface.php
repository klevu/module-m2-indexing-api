<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Determiner;

use Magento\Eav\Api\Data\AttributeInterface;
use Magento\Store\Api\Data\StoreInterface;

interface IsAttributeIndexableDeterminerInterface
{
    /**
     * Determine if an attribute is indexable.
     * Attribute settings are global and we treat them as such
     * however we include $store here in case a merchant wishes to change this.
     * $store is also used to determine log level for the current store
     *
     * @param AttributeInterface $attribute
     *
     * @return bool
     */
    public function execute(AttributeInterface $attribute, StoreInterface $store): bool;
}
