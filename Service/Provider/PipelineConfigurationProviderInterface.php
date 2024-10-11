<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

interface PipelineConfigurationProviderInterface
{
    /**
     * @param string $pipelineIdentifier
     *
     * @return mixed[]|null
     */
    public function get(string $pipelineIdentifier): ?array;
}
