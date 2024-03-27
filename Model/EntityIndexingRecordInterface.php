<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Model;

use Magento\Cms\Api\Data\PageInterface;
use Magento\Framework\Api\ExtensibleDataInterface;

interface EntityIndexingRecordInterface
{
    /**
     * @return int
     */
    public function getRecordId(): int;

    /**
     * @return ExtensibleDataInterface|PageInterface
     */
    public function getEntity(): ExtensibleDataInterface|PageInterface;

    /**
     * @return ExtensibleDataInterface|PageInterface|null
     */
    public function getParent(): ExtensibleDataInterface|PageInterface|null;
}
