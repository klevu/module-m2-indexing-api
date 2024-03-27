<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Model\MagentoAttributeInterface;

interface FilterAttributesToSetToIndexableServiceInterface
{
    /**
     * @param MagentoAttributeInterface[][] $magentoAttributesByApiKey
     * @param string $type
     * @param int[]|null $attributeIds
     *
     * @return int[]
     */
    public function execute(array $magentoAttributesByApiKey, string $type, ?array $attributeIds = []): array;
}
