<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Model\MagentoAttributeInterface;

interface FilterAttributesToSetToNotIndexableServiceInterface
{
    /**
     * @param MagentoAttributeInterface[][] $magentoAttributesByApiKey
     * @param string $type
     * @param int[] $attributeIds
     *
     * @return int[]
     */
    public function execute(
        array $magentoAttributesByApiKey,
        string $type,
        array $attributeIds = [],
    ): array;
}