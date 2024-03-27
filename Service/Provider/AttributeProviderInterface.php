<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

interface AttributeProviderInterface
{
    /**
     * @param int[]|null $attributeIds
     *
     * @return \Generator
     */
    public function get(?array $attributeIds = []): \Generator;
}
