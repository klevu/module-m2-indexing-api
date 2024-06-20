<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api;

use Klevu\Indexing\Exception\CouldNotDeleteException;
use Klevu\IndexingApi\Api\Data\SyncHistoryEntityRecordInterface;
use Klevu\IndexingApi\Api\Data\SyncHistoryEntitySearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\AlreadyExistsException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

interface SyncHistoryEntityRepositoryInterface
{
    /**
     * @return SyncHistoryEntityRecordInterface
     */
    public function create(): SyncHistoryEntityRecordInterface;

    /**
     * @param int $entityId
     *
     * @return SyncHistoryEntityRecordInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $entityId): SyncHistoryEntityRecordInterface;

    /**
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return SyncHistoryEntitySearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): SyncHistoryEntitySearchResultsInterface;

    /**
     * @param SyncHistoryEntityRecordInterface $syncHistoryEntityRecord
     *
     * @return SyncHistoryEntityRecordInterface
     * @throws AlreadyExistsException
     * @throws NoSuchEntityException
     * @throws CouldNotSaveException
     */
    public function save(SyncHistoryEntityRecordInterface $syncHistoryEntityRecord): SyncHistoryEntityRecordInterface;

    /**
     * @param SyncHistoryEntityRecordInterface $syncHistoryEntityRecord
     *
     * @return void
     * @throws CouldNotDeleteException
     * @throws LocalizedException
     */
    public function delete(SyncHistoryEntityRecordInterface $syncHistoryEntityRecord): void;

    /**
     * @param int $entityId
     *
     * @return void
     * @throws CouldNotDeleteException
     * @throws LocalizedException
     * @throws NoSuchEntityException
     */
    public function deleteById(int $entityId): void;
}
