<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\Indexing\Exception\AttributeMappingMissingException;
use Klevu\PhpSDK\Api\Model\Indexing\AttributeInterface as SdkAttributeInterface;

interface AttributeIndexingDeleteRecordCreatorServiceInterface
{
    /**
     * @param string $attributeCode
     * @param string $apiKey
     *
     * @return SdkAttributeInterface
     * @throws AttributeMappingMissingException
     */
    public function execute(string $attributeCode, string $apiKey): SdkAttributeInterface;
}
