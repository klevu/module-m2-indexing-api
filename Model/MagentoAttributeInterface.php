<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Model;

interface MagentoAttributeInterface
{
    public const ATTRIBUTE_PROPERTY_IS_INDEXABLE = 'klevu_is_indexable';
    public const ATTRIBUTE_PROPERTY_ASPECT_MAPPING = 'klevu_aspect_mapping';

    /**
     * @return int
     */
    public function getAttributeId(): int;

    /**
     * @return string
     */
    public function getAttributeCode(): string;

    /**
     * @return string
     */
    public function getApiKey(): string;

    /**
     * @return bool
     */
    public function isIndexable(): bool;

    /**
     * @param bool $isIndexable
     *
     * @return void
     */
    public function setIsIndexable(bool $isIndexable): void;

    /**
     * @return string
     */
    public function getKlevuAttributeName(): string;
}
