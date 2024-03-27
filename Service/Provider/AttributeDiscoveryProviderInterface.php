<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\Indexing\Exception\StoreApiKeyException;
use Klevu\IndexingApi\Model\MagentoAttributeInterface;
use Magento\Framework\Exception\NoSuchEntityException;

interface AttributeDiscoveryProviderInterface
{
    /**
     * @return string
     */
    public function getAttributeType(): string;

    /**
     * @param string[]|null $apiKeys
     * @param int[]|null $attributeIds
     *
     * @return MagentoAttributeInterface[][]
     * @throws NoSuchEntityException
     * @throws StoreApiKeyException
     */
    public function getData(?array $apiKeys = [], ?array $attributeIds = []): array;
}
