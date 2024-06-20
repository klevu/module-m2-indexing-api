<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\DataObject;

interface SyncHistoryEntitySearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return array<SyncHistoryEntityRecordInterface&DataObject>
     */
    public function getItems(): array;

    /**
     * @param SyncHistoryEntityRecordInterface[] $items
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setItems(array $items): SyncHistoryEntitySearchResultsInterface;
}
