<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action;

use Magento\Framework\Api\ExtensibleDataInterface;

interface ResizeImageActionInterface
{
    /**
     * @param ExtensibleDataInterface $entity
     * @param string $imageType
     *
     * @return string
     */
    public function execute(ExtensibleDataInterface $entity, string $imageType): string;
}
