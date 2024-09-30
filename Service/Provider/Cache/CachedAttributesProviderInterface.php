<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Cache;

use Klevu\PhpSDK\Model\Indexing\AttributeIterator;

interface CachedAttributesProviderInterface
{
    /**
     * @param string $apiKey
     *
     * @return AttributeIterator|null
     */
    public function get(string $apiKey): ?AttributeIterator;
}
