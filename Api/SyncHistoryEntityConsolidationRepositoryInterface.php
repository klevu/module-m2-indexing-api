<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api;

use Klevu\IndexingApi\Api\Data\SyncHistoryEntityConsolidationRecordInterface;
use Klevu\IndexingApi\Api\Data\SyncHistoryEntityConsolidationSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface SyncHistoryEntityConsolidationRepositoryInterface
{
    /**
     * @return \Klevu\IndexingApi\Api\Data\SyncHistoryEntityConsolidationRecordInterface
     */
    public function create(): SyncHistoryEntityConsolidationRecordInterface;

    /**
     * @param int $entityId
     *
     * @return \Klevu\IndexingApi\Api\Data\SyncHistoryEntityConsolidationRecordInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById(int $entityId): SyncHistoryEntityConsolidationRecordInterface;

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     *
     * @return \Klevu\IndexingApi\Api\Data\SyncHistoryEntityConsolidationSearchResultsInterface
     */
    public function getList(
        SearchCriteriaInterface $searchCriteria,
    ): SyncHistoryEntityConsolidationSearchResultsInterface;

    // phpcs:disable Generic.Files.LineLength.TooLong
    /**
     * @param \Klevu\IndexingApi\Api\Data\SyncHistoryEntityConsolidationRecordInterface $syncHistoryEntityConsolidationRecord
     *
     * @return \Klevu\IndexingApi\Api\Data\SyncHistoryEntityConsolidationRecordInterface
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save(
        SyncHistoryEntityConsolidationRecordInterface $syncHistoryEntityConsolidationRecord,
    ): SyncHistoryEntityConsolidationRecordInterface;

    /**
     * @param \Klevu\IndexingApi\Api\Data\SyncHistoryEntityConsolidationRecordInterface $syncHistoryEntityConsolidationRecord
     *
     * @return void
     * @throws \Klevu\Indexing\Exception\CouldNotDeleteException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(SyncHistoryEntityConsolidationRecordInterface $syncHistoryEntityConsolidationRecord): void;
    // phpcs:enable Generic.Files.LineLength.TooLong

    /**
     * @param int $entityId
     *
     * @return void
     * @throws \Klevu\Indexing\Exception\CouldNotDeleteException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById(int $entityId): void;
}
