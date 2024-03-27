<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\PhpSDK\Api\Model\Indexing\AttributeInterface;

interface AttributesToSyncProviderInterface
{
    /**
     * @return AttributeInterface[]
     */
    public function get(): array;
}
