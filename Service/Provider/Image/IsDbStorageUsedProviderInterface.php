<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider\Image;

interface IsDbStorageUsedProviderInterface
{
    /**
     * @return bool
     */
    public function get(): bool;
}
