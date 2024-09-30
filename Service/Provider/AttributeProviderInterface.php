<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\Indexing\Exception\AttributeMappingMissingException;
use Magento\Eav\Api\Data\AttributeInterface;
use Magento\Framework\Exception\NoSuchEntityException;

interface AttributeProviderInterface
{
    /**
     * @param int[]|null $attributeIds
     *
     * @return \Generator<AttributeInterface>
     * @throws AttributeMappingMissingException
     * @throws NoSuchEntityException
     */
    public function get(?array $attributeIds = []): \Generator;
}
