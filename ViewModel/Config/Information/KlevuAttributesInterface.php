<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\ViewModel\Config\Information;

use Klevu\Configuration\ViewModel\Config\FieldsetInterface;
use Klevu\PhpSDK\Model\Indexing\AttributeIterator;

interface KlevuAttributesInterface extends FieldsetInterface
{
    /**
     * @return array<string, ?AttributeIterator>
     */
    public function getAttributesByApiKey(): array;
}
