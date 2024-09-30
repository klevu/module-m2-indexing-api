<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api;

use Klevu\Indexing\Exception\AttributeMappingMissingException;
use Klevu\IndexingApi\Model\MagentoAttributeInterface;
use Magento\Eav\Api\Data\AttributeInterface;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Store\Api\Data\StoreInterface;

interface ConvertEavAttributeToIndexingAttributeActionInterface
{
    /**
     * @param string $entityType
     * @param AttributeInterface $attribute
     * @param StoreInterface|null $store
     *
     * @return MagentoAttributeInterface
     * @throws AttributeMappingMissingException
     * @throws NoSuchEntityException
     */
    public function execute(
        string $entityType,
        AttributeInterface $attribute,
        ?StoreInterface $store,
    ): MagentoAttributeInterface;
}
