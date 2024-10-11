<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Provider;

use Klevu\PlatformPipelines\Api\ConfigurationOverridesHandlerInterface;

interface PipelineConfigurationOverridesHandlerProviderInterface
{
    /**
     * @return array<string, ConfigurationOverridesHandlerInterface[]>
     */
    public function get(): array;
}
