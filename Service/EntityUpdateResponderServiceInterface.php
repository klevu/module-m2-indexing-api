<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

interface EntityUpdateResponderServiceInterface
{
    public const CHANGED_ATTRIBUTES = 'changed_attributes';

    /**
     * @param mixed[] $data
     *
     * @return void
     * @throws \InvalidArgumentException
     */
    public function execute(array $data): void;
}
