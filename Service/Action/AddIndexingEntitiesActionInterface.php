<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action;

use Klevu\Indexing\Exception\IndexingEntitySaveException;
use Klevu\IndexingApi\Model\MagentoEntityInterface;

interface AddIndexingEntitiesActionInterface
{
    /**
     * @param string $type
     * @param \Generator<MagentoEntityInterface> $magentoEntities
     *
     * @return void
     * @throws IndexingEntitySaveException
     */
    public function execute(string $type, \Generator $magentoEntities): void;
}
