<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Determiner;

use Klevu\IndexingApi\Api\Data\IndexingEntityInterface;

interface RequiresUpdateCriteriaInterface
{
    /**
     * @return string
     */
    public function getEntityType(): string;

    /**
     * @return string
     */
    public function getCriteriaIdentifier(): string;

    /**
     * @param IndexingEntityInterface $indexingEntity
     *
     * @return bool
     */
    public function execute(IndexingEntityInterface $indexingEntity): bool;
}
