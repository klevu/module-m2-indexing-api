<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

interface DuplicateAttributeMappingProviderInterface
{
    /**
     * @param string $apiKey
     *
     * @return array<string, array<string, int>> attributeType => <attributeName => count>
     */
    public function get(string $apiKey): array;
}
