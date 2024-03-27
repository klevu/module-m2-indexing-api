<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Image;

interface PathProviderInterface
{
    /**
     * @param mixed[] $imageParams
     * @param string $filePath
     *
     * @return string
     */
    public function get(array $imageParams, string $filePath): string;
}
