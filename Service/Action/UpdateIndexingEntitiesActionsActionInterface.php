<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action;

use Klevu\IndexingApi\Model\Source\Actions;

interface UpdateIndexingEntitiesActionsActionInterface
{
    /**
     * @param int[] $entityIds
     * @param Actions $lastAction
     *
     * @return void
     */
    public function execute(array $entityIds, Actions $lastAction): void;
}
