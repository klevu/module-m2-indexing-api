<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Model\Update;

interface AttributeInterface
{
    /**
     * @return string
     */
    public function getAttributeType(): string;

    /**
     * @param string $attributeType
     *
     * @return void
     */
    public function setAttributeType(string $attributeType): void;

    /**
     * @return int[]
     */
    public function getAttributeIds(): array;

    /**
     * @param int[] $attributeIds
     *
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setAttributeIds(array $attributeIds): void;
    
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
}
