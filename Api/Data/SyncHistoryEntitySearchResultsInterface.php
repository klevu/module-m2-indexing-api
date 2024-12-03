<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface SyncHistoryEntitySearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return array<\Klevu\IndexingApi\Api\Data\SyncHistoryEntityRecordInterface&\Magento\Framework\DataObject>
     */
    public function getItems(): array;

    /**
     * @param \Klevu\IndexingApi\Api\Data\SyncHistoryEntityRecordInterface[] $items
     *
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setItems(array $items): SyncHistoryEntitySearchResultsInterface;
}
