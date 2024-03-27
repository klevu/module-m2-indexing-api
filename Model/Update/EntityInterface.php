<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Model\Update;

interface EntityInterface
{
    /**
     * @return string
     */
    public function getEntityType(): string;

    /**
     * @param string $entityType
     *
     * @return void
     */
    public function setEntityType(string $entityType): void;

    /**
     * @return int[]
     */
    public function getEntityIds(): array;

    /**
     * @param int[] $entityIds
     *
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setEntityIds(array $entityIds): void;

    /**
     * @return int[]
     */
    public function getStoreIds(): array;

    /**
     * @param int[] $storeIds
     *
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setStoreIds(array $storeIds): void;

    /**
     * @return int[]
     */
    public function getCustomerGroupIds(): array;

    /**
     * @param int[] $customerGroupIds
     *
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setCustomerGroupIds(array $customerGroupIds): void;

    /**
     * @return string[]
     */
    public function getAttributes(): array;

    /**
     * @param string[] $attributes
     *
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setAttributes(array $attributes): void;
}
