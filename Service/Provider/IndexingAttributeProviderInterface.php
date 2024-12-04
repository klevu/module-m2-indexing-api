<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\IndexingApi\Api\Data\IndexingAttributeInterface;
use Klevu\IndexingApi\Model\Source\Actions;

interface IndexingAttributeProviderInterface
{
    /**
     * @param string|null $attributeType
     * @param string|null $apiKey
     * @param int[]|null $attributeIds
     * @param Actions|null $nextAction
     * @param bool|null $isIndexable
     *
     * @return IndexingAttributeInterface[]
     */
    public function get(
        ?string $attributeType = null,
        ?string $apiKey = null,
        ?array $attributeIds = [],
        ?Actions $nextAction = null,
        ?bool $isIndexable = null,
    ): array;

    /**
     * @param string|null $attributeType
     * @param string|null $apiKey
     * @param Actions|null $nextAction
     * @param bool|null $isIndexable
     *
     * @return int
     */
    public function count(
        ?string $attributeType = null,
        ?string $apiKey = null,
        ?Actions $nextAction = null,
        ?bool $isIndexable = null,
    ): int;

    /**
     * @param string $apiKey
     *
     * @return string[]
     */
    public function getTypes(string $apiKey): array;
}
