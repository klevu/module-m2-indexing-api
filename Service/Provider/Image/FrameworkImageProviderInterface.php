<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Image;

use Magento\Framework\Exception\FileSystemException;
use Magento\Framework\Image;

interface FrameworkImageProviderInterface
{
    /**
     * @param string $imagePath
     * @param mixed[] $imageParams
     *
     * @return Image
     * @throws FileSystemException
     */
    public function get(string $imagePath, array $imageParams): Image;
}
