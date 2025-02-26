<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Sync;

use Klevu\IndexingApi\Model\EntityIndexingDeleteRecordInterface;
use Klevu\IndexingApi\Model\EntityIndexingRecordInterface;

interface EntityIndexingRecordProviderInterface
{
    /**
     * @param string $apiKey
     *
     * @return \Generator<array<int, EntityIndexingRecordInterface|EntityIndexingDeleteRecordInterface>>
     */
    public function get(string $apiKey): \Generator;
}
