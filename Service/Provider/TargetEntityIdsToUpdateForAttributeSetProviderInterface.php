<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

interface TargetEntityIdsToUpdateForAttributeSetProviderInterface
{
    /**
     * @param int $attributeSetId
     *
     * @return \Generator<array<int[]>>
     */
    public function get(int $attributeSetId): \Generator;
}
