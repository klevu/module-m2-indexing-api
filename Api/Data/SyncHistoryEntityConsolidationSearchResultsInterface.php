<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface SyncHistoryEntityConsolidationSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return array<\Klevu\IndexingApi\Api\Data\SyncHistoryEntityConsolidationRecordInterface&\Magento\Framework\DataObject>
     */
    public function getItems(): array;

    /**
     * @param \Klevu\IndexingApi\Api\Data\SyncHistoryEntityConsolidationRecordInterface[] $items
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setItems(array $items): SyncHistoryEntityConsolidationSearchResultsInterface;
}
