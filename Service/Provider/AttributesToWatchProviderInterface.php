<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

interface AttributesToWatchProviderInterface
{
    /**
     * @return string[]
     */
    public function getAttributeCodes(): array;

    /**
     * @return array<string, mixed>
     */
    public function getAspectMapping(): array;
}
