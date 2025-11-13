<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api;

use Magento\Framework\Model\AbstractModel;

interface BatchSaveAwareResourceInterface
{
    /**
     * @param AbstractModel[] $objects
     *
     * @return void
     */
    public function saveMultiple(array $objects): void;
}
