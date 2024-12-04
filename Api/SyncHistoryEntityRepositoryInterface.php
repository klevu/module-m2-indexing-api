<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api;

use Klevu\IndexingApi\Api\Data\SyncHistoryEntityRecordInterface;
use Klevu\IndexingApi\Api\Data\SyncHistoryEntitySearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface SyncHistoryEntityRepositoryInterface
{
    /**
     * @return \Klevu\IndexingApi\Api\Data\SyncHistoryEntityRecordInterface
     */
    public function create(): SyncHistoryEntityRecordInterface;

    /**
     * @param int $entityId
     *
     * @return \Klevu\IndexingApi\Api\Data\SyncHistoryEntityRecordInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById(int $entityId): SyncHistoryEntityRecordInterface;

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     *
     * @return \Klevu\IndexingApi\Api\Data\SyncHistoryEntitySearchResultsInterface
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria,
    ): SyncHistoryEntitySearchResultsInterface;

    /**
     * @param \Klevu\IndexingApi\Api\Data\SyncHistoryEntityRecordInterface $syncHistoryEntityRecord
     *
     * @return \Klevu\IndexingApi\Api\Data\SyncHistoryEntityRecordInterface
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save(SyncHistoryEntityRecordInterface $syncHistoryEntityRecord): SyncHistoryEntityRecordInterface;

    /**
     * @param \Klevu\IndexingApi\Api\Data\SyncHistoryEntityRecordInterface $syncHistoryEntityRecord
     *
     * @return void
     * @throws \Klevu\Indexing\Exception\CouldNotDeleteException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(SyncHistoryEntityRecordInterface $syncHistoryEntityRecord): void;

    /**
     * @param int $entityId
     *
     * @return void
     * @throws \Klevu\Indexing\Exception\CouldNotDeleteException
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function deleteById(int $entityId): void;
}
