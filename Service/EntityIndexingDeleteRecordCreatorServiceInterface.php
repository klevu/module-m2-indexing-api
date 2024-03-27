<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\Indexing\Exception\InvalidIndexingRecordDataTypeException;
use Klevu\IndexingApi\Model\EntityIndexingDeleteRecordInterface;

interface EntityIndexingDeleteRecordCreatorServiceInterface
{
    /**
     * @param int $recordId
     * @param int $entityId
     * @param int|null $parentId
     *
     * @return EntityIndexingDeleteRecordInterface
     * @throws InvalidIndexingRecordDataTypeException
     */
    public function execute(
        int $recordId,
        int $entityId,
        ?int $parentId = null,
    ): EntityIndexingDeleteRecordInterface;
}
