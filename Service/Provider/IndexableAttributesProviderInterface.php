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
     * @return AttributeInterface[]
     */
    public function get(): array;

    /**
     * @return string[]
     */
    public function getAttributeCodes(): array;

}
