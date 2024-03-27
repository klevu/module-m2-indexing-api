<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Mapper;

use Klevu\Indexing\Exception\AttributeMappingMissingException;
use Magento\Eav\Api\Data\AttributeInterface;
use Magento\Framework\Exception\NoSuchEntityException;

interface MagentoToKlevuAttributeMapperInterface
{
    /**
     * @param AttributeInterface $attribute
     *
     * @return string
     * @throws AttributeMappingMissingException
     */
    public function get(AttributeInterface $attribute): string;

    /**
     * Return original attribute code from mapped name
     *
     * @param string $attributeName
     *
     * @return AttributeInterface
     * @throws NoSuchEntityException
     */
    public function reverse(string $attributeName): AttributeInterface;

    /**
     * @param string $attributeCode
     *
     * @return string
     * @throws AttributeMappingMissingException
     */
    public function getByCode(string $attributeCode): string ;

    /**
     * @param string $attributeName
     *
     * @return string
     */
    public function reverseForCode(string $attributeName): string;
}
