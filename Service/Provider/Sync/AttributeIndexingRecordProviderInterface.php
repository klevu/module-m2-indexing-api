<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Sync;

interface AttributeIndexingRecordProviderInterface
{
    /**
     * @param string $apiKey
     *
     * @return \Generator
     */
    public function get(string $apiKey): \Generator;
}
