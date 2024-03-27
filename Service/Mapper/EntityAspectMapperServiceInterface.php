<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Mapper;

use Klevu\IndexingProducts\Model\Source\Aspect;

interface EntityAspectMapperServiceInterface
{
    /**
     * @param string[] $attributeCodes
     *
     * @return Aspect[]
     */
    public function execute(array $attributeCodes): array;
}
