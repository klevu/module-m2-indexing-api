<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Api\Data\DiscoveryResultInterface;
use Klevu\IndexingApi\Model\Update\AttributeInterface as AttributeUpdateInterface;

interface AttributeUpdateOrchestratorServiceInterface
{
    /**
     * @param AttributeUpdateInterface $attributeUpdate
     *
     * @return DiscoveryResultInterface
     */
    public function execute(AttributeUpdateInterface $attributeUpdate): DiscoveryResultInterface;
}
