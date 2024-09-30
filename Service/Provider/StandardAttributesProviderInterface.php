<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\Configuration\Exception\ApiKeyNotFoundException;
use Klevu\Indexing\Exception\StoreApiKeyException;
use Klevu\PhpSDK\Exception\Api\BadRequestException;
use Klevu\PhpSDK\Exception\Api\BadResponseException;
use Klevu\PhpSDK\Exception\ApiExceptionInterface;
use Klevu\PhpSDK\Model\IteratorInterface;

interface StandardAttributesProviderInterface
{
    /**
     * @param string $apiKey
     *
     * @return IteratorInterface
     * @throws BadRequestException
     * @throws BadResponseException
     * @throws ApiExceptionInterface
     * @throws ApiKeyNotFoundException
     * @throws StoreApiKeyException
     */
    public function get(string $apiKey): IteratorInterface;

    /**
     * @param string|null $apiKey
     * @param bool $includeAliases
     *
     * @return string[]
     * @throws BadRequestException
     * @throws BadResponseException
     * @throws ApiExceptionInterface
     * @throws ApiKeyNotFoundException
     */
    public function getAttributeCodes(?string $apiKey = null, bool $includeAliases = false): array;

    /**
     * @param bool $includeAliases
     *
     * @return string[]
     * @throws BadRequestException
     * @throws BadResponseException
     * @throws ApiExceptionInterface
     * @throws ApiKeyNotFoundException
     */
    public function getAttributeCodesForAllApiKeys(bool $includeAliases = false): array;
}
