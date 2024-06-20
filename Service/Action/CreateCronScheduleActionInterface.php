<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action;

interface CreateCronScheduleActionInterface
{
    /**
     * @return void
     */
    public function execute(): void;
}
