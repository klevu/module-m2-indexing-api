<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\Configuration\Exception\ApiKeyNotFoundException;
use Klevu\IndexingApi\Model\Source\IndexType;
use Klevu\PhpSDK\Exception\ValidationException as SdkValidationException;

interface DefaultIndexingAttributesProviderInterface
{
    /**
     * @param string|null $apiKey
     *
     * @return IndexType[]
     * @throws ApiKeyNotFoundException
     * @throws SdkValidationException
     */
    public function get(?string $apiKey = null): array;
}
