<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service;

use Klevu\IndexingApi\Api\Data\IndexingEntityInterface;
use Klevu\IndexingApi\Model\Source\Actions;
use Klevu\PhpSDKPipelines\Model\ApiPipelineResult;

interface BatchResponderServiceInterface
{
    /**
     * @param ApiPipelineResult $apiPipelineResult
     * @param Actions $action
     * @param array<int, IndexingEntityInterface> $indexingEntities
     * @param string $entityType
     * @param string $apiKey
     *
     * @return void
     */
    public function execute(
        ApiPipelineResult $apiPipelineResult,
        Actions $action,
        array $indexingEntities,
        string $entityType,
        string $apiKey,
    ): void;
}
