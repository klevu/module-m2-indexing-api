<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

interface ImageGeneratorServiceInterface
{
    /**
     * @param string $imagePath
     * @param string $imageType
     * @param int|null $width
     * @param int|null $height
     * @param int|null $storeId
     *
     * @return string
     */
    public function execute(
        string $imagePath,
        string $imageType,
        ?int $width = null,
        ?int $height = null,
        ?int $storeId = null,
    ): string;
}
