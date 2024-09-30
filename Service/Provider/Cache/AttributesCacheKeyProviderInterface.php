<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Cache;

interface AttributesCacheKeyProviderInterface
{
    /**
     * @param string $apiKey
     *
     * @return string
     */
    public function get(string $apiKey): string;
}
