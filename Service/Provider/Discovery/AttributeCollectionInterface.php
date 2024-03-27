<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Discovery;

use Magento\Eav\Model\ResourceModel\Entity\Attribute\Collection as AttributeCollection;

interface AttributeCollectionInterface
{
    /**
     * @param int[]|null $attributeIds
     *
     * @return AttributeCollection
     */
    public function get(?array $attributeIds = []): AttributeCollection;
}
