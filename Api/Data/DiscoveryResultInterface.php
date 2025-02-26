<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api\Data;

interface DiscoveryResultInterface
{
    /**
     * @return bool
     */
    public function isSuccess(): bool;

    /**
     * @return string
     */
    public function getAction(): string;

    /**
     * @return string
     */
    public function getEntityType(): string;

    /**
     * @return bool
     */
    public function hasMessages(): bool;

    /**
     * @return string[]
     */
    public function getMessages(): array;

    /**
     * @return bool
     */
    public function hasProcessedIds(): bool;

    /**
     * @return int[]
     */
    public function getProcessedIds(): array;
}
