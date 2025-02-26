<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Api\Data\IndexerResultInterface;
use Klevu\Pipelines\Exception\Pipeline\InvalidPipelineConfigurationException;

interface EntityIndexerServiceInterface
{
    /**
     * @param string $apiKey
     * @param string|null $via
     *
     * @return \Generator<IndexerResultInterface>
     * @throws InvalidPipelineConfigurationException
     */
    public function execute(
        string $apiKey,
        ?string $via = '',
    ): \Generator;
}
