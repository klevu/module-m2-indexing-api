<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Sdk;

use Klevu\Configuration\Exception\ApiKeyNotFoundException;
use Klevu\Indexing\Exception\StoreApiKeyException;
use Klevu\PhpSDK\Exception\ApiExceptionInterface;
use Klevu\PhpSDK\Model\Indexing\AttributeIterator;

interface AttributesProviderInterface
{
    /**
     * @param string $apiKey
     *
     * @return AttributeIterator
     * @throws ApiKeyNotFoundException
     * @throws ApiExceptionInterface
     * @throws StoreApiKeyException
     */
    public function get(string $apiKey): AttributeIterator;
}
