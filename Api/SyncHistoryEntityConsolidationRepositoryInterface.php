<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api;

use Klevu\Indexing\Exception\CouldNotDeleteException;
use Klevu\IndexingApi\Api\Data\SyncHistoryEntityConsolidationRecordInterface;
use Klevu\IndexingApi\Api\Data\SyncHistoryEntityConsolidationSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\AlreadyExistsException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

interface SyncHistoryEntityConsolidationRepositoryInterface
{
    /**
     * @return SyncHistoryEntityConsolidationRecordInterface
     */
    public function create(): SyncHistoryEntityConsolidationRecordInterface;

    /**
     * @param int $entityId
     *
     * @return SyncHistoryEntityConsolidationRecordInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $entityId): SyncHistoryEntityConsolidationRecordInterface;

    /**
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return SyncHistoryEntityConsolidationSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria,
    ): SyncHistoryEntityConsolidationSearchResultsInterface;

    /**
     * @param SyncHistoryEntityConsolidationRecordInterface $syncHistoryEntityConsolidationRecord
     *
     * @return SyncHistoryEntityConsolidationRecordInterface
     * @throws AlreadyExistsException
     * @throws NoSuchEntityException
     * @throws CouldNotSaveException
     */
    public function save(
        SyncHistoryEntityConsolidationRecordInterface $syncHistoryEntityConsolidationRecord,
    ): SyncHistoryEntityConsolidationRecordInterface;

    /**
     * @param SyncHistoryEntityConsolidationRecordInterface $syncHistoryEntityConsolidationRecord
     *
     * @return void
     * @throws CouldNotDeleteException
     * @throws LocalizedException
     */
    public function delete(SyncHistoryEntityConsolidationRecordInterface $syncHistoryEntityConsolidationRecord): void;

    /**
     * @param int $entityId
     *
     * @return void
     * @throws CouldNotDeleteException
     * @throws LocalizedException
     */
    public function deleteById(int $entityId): void;
}
