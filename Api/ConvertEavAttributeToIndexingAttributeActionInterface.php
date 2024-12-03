<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api;

use Klevu\IndexingApi\Model\MagentoAttributeInterface;
use Magento\Eav\Api\Data\AttributeInterface;
use Magento\Store\Api\Data\StoreInterface;

interface ConvertEavAttributeToIndexingAttributeActionInterface
{
    /**
     * @param string $entityType
     * @param \Magento\Eav\Api\Data\AttributeInterface $attribute
     * @param \Magento\Store\Api\Data\StoreInterface|null $store
     *
     * @return \Klevu\IndexingApi\Model\MagentoAttributeInterface
     * @throws \Klevu\Indexing\Exception\AttributeMappingMissingException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute(
        string $entityType,
        AttributeInterface $attribute,
        ?StoreInterface $store,
    ): MagentoAttributeInterface;
}
