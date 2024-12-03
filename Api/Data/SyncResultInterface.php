<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api\Data;

interface SyncResultInterface
{
    /**
     * @return bool
     */
    public function isSuccess(): bool;

    /**
     * @return bool
     */
    public function hasMessages(): bool;

    /**
     * @return string[]
     */
    public function getMessages(): array;

    /**
     * @return int
     */
    public function getCode(): int;
}
