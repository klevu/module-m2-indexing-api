<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

interface DefaultIndexingAttributesAspectMappingProviderInterface
{
    /**
     * @return array<string, mixed>
     */
    public function get(): array;
}
