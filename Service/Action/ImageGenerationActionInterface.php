<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action;

interface ImageGenerationActionInterface
{
    /**
     * @param mixed[] $imageParams
     * @param string $imagePath
     *
     * @return string
     */
    public function execute(
        array $imageParams,
        string $imagePath,
    ): string;
}
