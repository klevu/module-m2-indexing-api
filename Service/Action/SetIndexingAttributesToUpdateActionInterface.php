<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action;

use Klevu\Indexing\Exception\IndexingAttributeSaveException;

interface SetIndexingAttributesToUpdateActionInterface
{
    /**
     * @param int[] $attributeIds
     *
     * @return void
     * @throws IndexingAttributeSaveException
     */
    public function execute(array $attributeIds): void;
}
