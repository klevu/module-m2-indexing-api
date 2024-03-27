<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api;

use Klevu\IndexingApi\Api\Data\IndexingEntityInterface;
use Klevu\IndexingApi\Api\Data\IndexingEntitySearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface IndexingEntityRepositoryInterface
{
    /**
     * @param int $indexingEntityId
     *
     * @return \Klevu\IndexingApi\Api\Data\IndexingEntityInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById(int $indexingEntityId): IndexingEntityInterface;

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     *
     * @return \Klevu\IndexingApi\Api\Data\IndexingEntitySearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): IndexingEntitySearchResultsInterface;

    /**
     * @return \Klevu\IndexingApi\Api\Data\IndexingEntityInterface
     */
    public function create(): IndexingEntityInterface;

    /**
     * @param \Klevu\IndexingApi\Api\Data\IndexingEntityInterface $indexingEntity
     *
     * @return \Klevu\IndexingApi\Api\Data\IndexingEntityInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function save(IndexingEntityInterface $indexingEntity): IndexingEntityInterface;

    //phpcs:disable Security.BadFunctions.FilesystemFunctions.WarnFilesystem
    /**
     * @param \Klevu\IndexingApi\Api\Data\IndexingEntityInterface $indexingEntity
     *
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(IndexingEntityInterface $indexingEntity): void;
    //phpcs:enable Security.BadFunctions.FilesystemFunctions.WarnFilesystem

    /**
     * @param int $indexingEntityId
     *
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function deleteById(int $indexingEntityId): void;
}
