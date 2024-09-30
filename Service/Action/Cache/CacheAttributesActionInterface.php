<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action\Cache;

use Klevu\PhpSDK\Model\Indexing\AttributeIterator;

interface CacheAttributesActionInterface
{
    /**
     * @param AttributeIterator $attributeIterator
     * @param string $apiKey
     *
     * @return void
     */
    public function execute(AttributeIterator $attributeIterator, string $apiKey): void;
}
