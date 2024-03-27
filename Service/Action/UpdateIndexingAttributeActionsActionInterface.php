<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action;

interface UpdateIndexingAttributeActionsActionInterface
{
    /**
     * @param string $apiKey
     * @param int|null $targetId
     * @param string|null $targetCode
     *
     * @return void
     */
    public function execute(string $apiKey, ?int $targetId = null, ?string $targetCode = null): void;
}
