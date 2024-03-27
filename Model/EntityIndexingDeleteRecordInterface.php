<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Model;

interface EntityIndexingDeleteRecordInterface
{
    /**
     * @return int
     */
    public function getRecordId(): int;

    /**
     * @return int
     */
    public function getEntityId(): int;

    /**
     * @return int|null
     */
    public function getParentId(): ?int;
}
