<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\PhpSDK\Api\Model\Indexing\AttributeInterface;

interface AttributeSyncProviderInterface
{
    /**
     * @param string|null $attributeTypeFilter
     *
     * @return AttributeInterface[]
     */
    public function get(?string $attributeTypeFilter = null): array;
}
