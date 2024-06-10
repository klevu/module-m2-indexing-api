<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

interface AttributeProviderProviderInterface
{
    /**
     * @return AttributeProviderInterface[]
     */
    public function get(): array;

    /**
     * @return StaticAttributeProviderInterface[]
     */
    public function getStaticProviders(): array;
}
