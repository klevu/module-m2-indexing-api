<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action\Image;

use Magento\Framework\Image;

interface ResizeActionInterface
{
    /**
     * @param Image $image
     * @param mixed[] $imageParams
     *
     * @return void
     */
    public function execute(Image $image, array $imageParams): void;
}
