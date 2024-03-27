<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action\Sdk\Attribute;

use Klevu\Indexing\Exception\InvalidAccountCredentialsException;
use Klevu\IndexingApi\Api\Data\SyncResultInterface;
use Klevu\PhpSDK\Api\Model\Indexing\AttributeInterface;
use Klevu\PhpSDK\Model\AccountCredentials;

interface ActionInterface
{
    /**
     * @param AccountCredentials $accountCredentials
     * @param AttributeInterface $attribute
     * @param string $attributeType
     *
     * @return SyncResultInterface
     * @throws InvalidAccountCredentialsException
     */
    public function execute(
        AccountCredentials $accountCredentials,
        AttributeInterface $attribute,
        string $attributeType,
    ): SyncResultInterface;
}
