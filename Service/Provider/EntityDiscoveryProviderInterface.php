<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\Indexing\Exception\StoreApiKeyException;
use Klevu\IndexingApi\Model\MagentoEntityInterface;
use Magento\Framework\Exception\NoSuchEntityException;

interface EntityDiscoveryProviderInterface
{
    /**
     * @return string
     */
    public function getEntityType(): string;

    /**
     * @param string[]|null $apiKeys
     * @param int[]|null $entityIds
     * @param string[]|null $entitySubtypes
     *
     * @return \Generator<string, \Generator<MagentoEntityInterface[]>>
     * @throws NoSuchEntityException
     * @throws StoreApiKeyException
     */
    public function getData(
        ?array $apiKeys = [],
        ?array $entityIds = [],
        ?array $entitySubtypes = [],
    ): \Generator;

    /**
     * @return string[]
     */
    public function getEntityProviderTypes(): array;
}
