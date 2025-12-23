<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\IndexingApi\Api\Data\EntitySyncConditionsValuesInterface;

interface EntitySyncConditionsValuesProviderInterface
{
    /**
     * @param string $targetEntityType
     * @param int $targetEntityId
     *
     * @return EntitySyncConditionsValuesInterface[]
     */
    public function get(
        string $targetEntityType,
        int $targetEntityId,
    ): array;
}
