<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

interface ConflictingAttributeNamesProviderInterface
{
    /**
     * @param string $apiKey
     *
     * @return array<string, string[]> attributeName => entityTypes
     */
    public function getForApiKey(string $apiKey): array;
}
