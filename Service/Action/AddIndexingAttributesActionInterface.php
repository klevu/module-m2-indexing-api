<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action;

use Klevu\Indexing\Exception\IndexingAttributeSaveException;
use Klevu\IndexingApi\Model\MagentoAttributeInterface;

interface AddIndexingAttributesActionInterface
{
    /**
     * @param string $type
     * @param MagentoAttributeInterface[] $magentoAttributes
     *
     * @return void
     * @throws IndexingAttributeSaveException
     */
    public function execute(string $type, array $magentoAttributes): void;
}
