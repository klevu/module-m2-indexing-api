<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Model;

interface MagentoEntityInterface
{
    /**
     * @return int
     */
    public function getEntityId(): int;

    /**
     * @return int|null
     */
    public function getEntityParentId(): ?int;

    /**
     * @return string|null
     */
    public function getEntitySubtype(): ?string;

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
}
