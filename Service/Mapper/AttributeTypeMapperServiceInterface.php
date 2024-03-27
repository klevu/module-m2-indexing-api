<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Mapper;

use Klevu\PhpSDK\Model\Indexing\DataType;
use Magento\Eav\Api\Data\AttributeInterface as EavAttributeInterface;

interface AttributeTypeMapperServiceInterface
{
    /**
     * @param EavAttributeInterface $attribute
     *
     * @return DataType
     */
    public function execute(EavAttributeInterface $attribute): DataType;
}
