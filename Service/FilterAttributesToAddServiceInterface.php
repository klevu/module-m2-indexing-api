<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Model\MagentoAttributeInterface;

interface FilterAttributesToAddServiceInterface
{
    /**
     * @param MagentoAttributeInterface[][] $magentoAttributesByApiKey
     * @param string $entityType
     *
     * @return MagentoAttributeInterface[][]
     */
    public function execute(array $magentoAttributesByApiKey, string $entityType): array;
}
