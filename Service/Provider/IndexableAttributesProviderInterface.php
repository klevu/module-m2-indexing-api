<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Magento\Eav\Api\Data\AttributeInterface;

interface IndexableAttributesProviderInterface
{
    /**
     * @param string $apiKey
     *
     * @return AttributeInterface[]
     */
    public function get(string $apiKey): array;

    /**
     * @param string $apiKey
     *
     * @return string[]
     */
    public function getAttributeCodes(string $apiKey): array;

}
