<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\Indexing\Exception\InvalidAccountCredentialsException;
use Klevu\IndexingApi\Api\Data\SyncResultInterface;
use Klevu\PhpSDK\Model\AccountCredentials;

interface AttributeIndexerServiceInterface
{
    /**
     * @param AccountCredentials $accountCredentials
     * @param string $attributeType
     *
     * @return SyncResultInterface[]
     * @throws InvalidAccountCredentialsException
     */
    public function execute(
        AccountCredentials $accountCredentials,
        string $attributeType,
    ): array;
}
