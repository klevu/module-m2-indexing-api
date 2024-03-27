<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\IndexingApi\Model\Source\IndexType;

interface DefaultIndexingAttributesProviderInterface
{
    /**
     * @return IndexType[]
     */
    public function get(): array;
}
