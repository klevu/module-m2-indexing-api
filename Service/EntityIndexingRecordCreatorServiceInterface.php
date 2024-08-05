<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\Indexing\Exception\InvalidIndexingRecordDataTypeException;
use Klevu\IndexingApi\Model\EntityIndexingRecordInterface;
use Klevu\IndexingApi\Model\Source\Actions;
use Magento\Cms\Api\Data\PageInterface;
use Magento\Framework\Api\ExtensibleDataInterface;

interface EntityIndexingRecordCreatorServiceInterface
{
    /**
     * @param int $recordId
     * @param Actions $action
     * @param ExtensibleDataInterface|PageInterface $entity
     * @param ExtensibleDataInterface|PageInterface|null $parent
     *
     * @return EntityIndexingRecordInterface
     * @throws InvalidIndexingRecordDataTypeException
     */
    public function execute(
        int $recordId,
        Actions $action,
        ExtensibleDataInterface|PageInterface $entity,
        ExtensibleDataInterface|PageInterface|null $parent = null,
    ): EntityIndexingRecordInterface;
}
