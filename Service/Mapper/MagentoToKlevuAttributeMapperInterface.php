<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Mapper;

use Klevu\Configuration\Exception\ApiKeyNotFoundException;
use Klevu\Indexing\Exception\AttributeMappingMissingException;
use Klevu\PhpSDK\Exception\ApiExceptionInterface;
use Magento\Eav\Api\Data\AttributeInterface;
use Magento\Framework\Exception\NoSuchEntityException;

interface MagentoToKlevuAttributeMapperInterface
{
    /**
     * @param AttributeInterface $attribute
     * @param string|null $apiKey
     *
     * @return string
     * @throws ApiExceptionInterface
     * @throws AttributeMappingMissingException
     * @throws ApiKeyNotFoundException
     */
    public function get(AttributeInterface $attribute, ?string $apiKey = null): string;

    /**
     * Return original attribute code from mapped name
     *
     * @param string $attributeName
     * @param string|null $apiKey
     *
     * @return AttributeInterface
     * @throws ApiExceptionInterface
     * @throws NoSuchEntityException
     * @throws ApiKeyNotFoundException
     */
    public function reverse(string $attributeName, ?string $apiKey = null): AttributeInterface;

    /**
     * @param string $attributeCode
     * @param string|null $apiKey
     *
     * @return string
     * @throws ApiExceptionInterface
     * @throws AttributeMappingMissingException
     * @throws ApiKeyNotFoundException
     */
    public function getByCode(string $attributeCode, ?string $apiKey = null): string ;

    /**
     * @param string $attributeName
     * @param string|null $apiKey
     *
     * @return string
     * @throws ApiExceptionInterface
     * @throws ApiKeyNotFoundException
     */
    public function reverseForCode(string $attributeName, ?string $apiKey = null): string;
}
