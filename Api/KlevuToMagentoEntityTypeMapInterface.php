<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api;

interface KlevuToMagentoEntityTypeMapInterface
{
    /**
     * @param int $magentoEntityTypeId
     *
     * @return string
     */
    public function getKlevuEntityTypeForMagentoEntityTypeId(int $magentoEntityTypeId): ?string;

    /**
     * @param string $klevuEntityType
     *
     * @return int[]
     */
    public function getMagentoEntityTypeIdsForKlevuEntityType(string $klevuEntityType): array;
}
