<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

interface IndexingEntityTargetIdsRequireUpdateProviderInterface
{
    /**
     * @param string $entityType
     * @param string[]|null $apiKeys
     *
     * @return int[]
     */
    public function get(string $entityType, ?array $apiKeys): array;
}
