<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action;

use Klevu\Indexing\Exception\IndexingEntitySaveException;

interface SetIndexingEntitiesToNotBeIndexableActionInterface
{
    /**
     * @param \Generator<int[]> $entityIds
     *
     * @return void
     * @throws IndexingEntitySaveException
     */
    public function execute(\Generator $entityIds): void;
}
