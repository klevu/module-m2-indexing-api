<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Magento\Cms\Api\Data\PageInterface;
use Magento\Framework\Api\ExtensibleDataInterface;
use Magento\Store\Api\Data\StoreInterface;

interface EntityProviderInterface
{
    /**
     * @param StoreInterface|null $store
     * @param int[]|null $entityIds
     *
     * @return \Generator<array<ExtensibleDataInterface|PageInterface>>|null
     */
    public function get(?StoreInterface $store = null, ?array $entityIds = []): ?\Generator;

    /**
     * @return string|null
     */
    public function getEntitySubtype(): ?string;
}
