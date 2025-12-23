<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action;

interface SetIndexingEntitiesToNotRequireUpdateActionInterface
{
    /**
     * @param string $entityType
     * @param string|null $apiKey
     * @param int[] $entityIds
     *
     * @return void
     */
    public function execute(
        string $entityType,
        ?string $apiKey,
        array $entityIds,
    ): void;
}
