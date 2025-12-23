<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api\Data;

use Magento\Cms\Api\Data\PageInterface;
use Magento\Framework\Api\ExtensibleDataInterface;
use Magento\Store\Api\Data\StoreInterface;

interface EntitySyncConditionsValuesInterface
{
    /**
     * @return string
     */
    public function getApiKey(): string;

    /**
     * @param string $apiKey
     *
     * @return void
     */
    public function setApiKey(string $apiKey): void;
    
    /**
     * @return string
     */
    public function getTargetEntityType(): string;

    /**
     * @param string $entityType
     *
     * @return void
     */
    public function setTargetEntityType(string $entityType): void;

    /**
     * @return \Magento\Framework\Api\ExtensibleDataInterface|\Magento\Cms\Api\Data\PageInterface|null
     */
    public function getTargetEntity(): ExtensibleDataInterface|PageInterface|null;

    /**
     * @param \Magento\Framework\Api\ExtensibleDataInterface|\Magento\Cms\Api\Data\PageInterface $targetEntity
     *
     * @return void
     */
    public function setTargetEntity(ExtensibleDataInterface|PageInterface $targetEntity): void;

    /**
     * @return \Magento\Framework\Api\ExtensibleDataInterface|\Magento\Cms\Api\Data\PageInterface|null
     */
    public function getTargetParentEntity(): ExtensibleDataInterface|PageInterface|null;

    /**
     * @param \Magento\Framework\Api\ExtensibleDataInterface|\Magento\Cms\Api\Data\PageInterface $targetParentEntity
     *
     * @return void
     */
    public function setTargetParentEntity(ExtensibleDataInterface|PageInterface $targetParentEntity): void;

    /**
     * @return \Magento\Store\Api\Data\StoreInterface|null
     */
    public function getStore(): ?StoreInterface;

    /**
     * @param \Magento\Store\Api\Data\StoreInterface $store
     *
     * @return void
     */
    public function setStore(StoreInterface $store): void;

    /**
     * @return \Klevu\IndexingApi\Api\Data\IndexingEntityInterface|null
     */
    public function getIndexingEntity(): ?IndexingEntityInterface;

    /**
     * @param \Klevu\IndexingApi\Api\Data\IndexingEntityInterface $indexingEntity
     *
     * @return void
     */
    public function setIndexingEntity(IndexingEntityInterface $indexingEntity): void;

    /**
     * @return bool|null
     */
    public function getIsIndexable(): ?bool;

    /**
     * @param bool $isIndexable
     *
     * @return void
     */
    public function setIsIndexable(bool $isIndexable): void;

    /**
     * @return bool[]
     */
    public function getSyncConditionsValues(): array;

    /**
     * @param bool[] $values
     *
     * @return void
     */
    public function setSyncConditionsValues(array $values): void;

    /**
     * @param string $key
     * @param bool $value
     *
     * @return void
     */
    public function addSyncConditionsValue(string $key, bool $value): void;
}
