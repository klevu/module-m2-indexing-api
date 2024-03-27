<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api;

use Klevu\IndexingApi\Api\Data\IndexingAttributeInterface;
use Klevu\IndexingApi\Api\Data\IndexingAttributeSearchResultsInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface IndexingAttributeRepositoryInterface
{
    /**
     * @param int $indexingAttributeId
     *
     * @return \Klevu\IndexingApi\Api\Data\IndexingAttributeInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById(int $indexingAttributeId): IndexingAttributeInterface;

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     *
     * @return \Klevu\IndexingApi\Api\Data\IndexingAttributeSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): IndexingAttributeSearchResultsInterface;

    /**
     * @return \Klevu\IndexingApi\Api\Data\IndexingAttributeInterface
     */
    public function create(): IndexingAttributeInterface;

    /**
     * @param \Klevu\IndexingApi\Api\Data\IndexingAttributeInterface $indexingAttribute
     *
     * @return \Klevu\IndexingApi\Api\Data\IndexingAttributeInterface
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function save(IndexingAttributeInterface $indexingAttribute): IndexingAttributeInterface;

    //phpcs:disable Security.BadFunctions.FilesystemFunctions.WarnFilesystem
    /**
     * @param \Klevu\IndexingApi\Api\Data\IndexingAttributeInterface $indexingAttribute
     *
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(IndexingAttributeInterface $indexingAttribute): void;
    //phpcs:enable Security.BadFunctions.FilesystemFunctions.WarnFilesystem

    /**
     * @param int $indexingAttributeId
     *
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function deleteById(int $indexingAttributeId): void;
}
