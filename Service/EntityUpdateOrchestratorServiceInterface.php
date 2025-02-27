<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Model\Update\EntityInterface as EntityUpdateInterface;

interface EntityUpdateOrchestratorServiceInterface
{
    /**
     * @param EntityUpdateInterface $entityUpdate
     *
     * @return void
     */
    public function execute(EntityUpdateInterface $entityUpdate): void;
}
