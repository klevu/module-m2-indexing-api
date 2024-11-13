<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Model\MagentoEntityInterface;

interface FilterEntitiesToAddServiceInterface
{
    /**
     * @param MagentoEntityInterface[] $magentoEntities
     * @param string $type
     * @param string $apiKey
     * @param string[] $entitySubtypes
     *
     * @return \Generator<MagentoEntityInterface>
     */
    public function execute(
        array $magentoEntities,
        string $type,
        string $apiKey,
        array $entitySubtypes = [],
    ): \Generator;
}
