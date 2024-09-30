<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action\Cache;

interface ClearAttributesCacheActionInterface
{
    /**
     * @param string[] $apiKeys
     *
     * @return void
     */
    public function execute(array $apiKeys = []): void;
}
