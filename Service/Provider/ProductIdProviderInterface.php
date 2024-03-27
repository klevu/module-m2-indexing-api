<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

interface ProductIdProviderInterface
{
    /**
     * @param string $sku
     *
     * @return int|null
     */
    public function getBySku(string $sku): ?int;

    /**
     * @param string[] $skus
     *
     * @return array<string, int>
     */
    public function getBySkus(array $skus): array;

    /**
     * @param int[] $linkFieldIds
     *
     * @return int[]
     */
    public function getByLinkFields(array $linkFieldIds): array;
}
