<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\IndexingApi\Api\Data\SyncHistoryEntityRecordInterface;

interface SyncHistoryEntityByDateProviderInterface
{
    /**
     * @param string $date
     *
     * @return array<string, SyncHistoryEntityRecordInterface[]>
     */
    public function get(string $date): array;
}
