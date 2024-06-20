<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\IndexingApi\Api\Data\SyncHistoryEntityConsolidationRecordInterface;

interface SyncHistoryEntityConsolidatedByDateProviderInterface
{
    /**
     * @param string $date
     *
     * @return SyncHistoryEntityConsolidationRecordInterface[]
     */
    public function get(string $date): array;
}
