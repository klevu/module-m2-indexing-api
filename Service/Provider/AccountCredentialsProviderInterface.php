<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\PhpSDK\Model\AccountCredentials;
use Magento\Store\Api\Data\StoreInterface;

interface AccountCredentialsProviderInterface
{
    /**
     * @param StoreInterface|null $store
     *
     * @return AccountCredentials[]
     */
    public function get(?StoreInterface $store = null): array;
}
