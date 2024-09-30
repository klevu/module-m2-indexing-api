<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\IndexingApi\Service\Mapper\MagentoToKlevuAttributeMapperInterface;

interface MagentoToKlevuAttributeMapperProviderInterface
{
    /**
     * @return array<string, MagentoToKlevuAttributeMapperInterface>
     */
    public function get(): array;

    /**
     * @param string $entityType
     *
     * @return MagentoToKlevuAttributeMapperInterface
     */
    public function getByType(string $entityType): MagentoToKlevuAttributeMapperInterface;
}
