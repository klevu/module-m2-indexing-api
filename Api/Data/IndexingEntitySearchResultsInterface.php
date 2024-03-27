<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface IndexingEntitySearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return \Klevu\IndexingApi\Api\Data\IndexingEntityInterface[]
     */
    public function getItems(); // phpcs:ignore SlevomatCodingStandard.TypeHints.ReturnTypeHint.MissingNativeTypeHint

    /**
     * @param \Klevu\IndexingApi\Api\Data\IndexingEntityInterface[] $items
     *
     * @return $this
     */
    public function setItems(array $items);
}
