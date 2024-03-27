<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

// phpcs:disable SlevomatCodingStandard.Namespaces.ReferenceUsedNamesOnly.ReferenceViaFullyQualifiedName

namespace Klevu\IndexingApi\Api\Data;

use Klevu\IndexingApi\Model\Source\IndexerResultStatuses;

interface IndexerResultInterface
{
    /**
     * @return \Klevu\IndexingApi\Model\Source\IndexerResultStatuses|null
     */
    public function getStatus(): ?IndexerResultStatuses;

    /**
     * @param \Klevu\IndexingApi\Model\Source\IndexerResultStatuses $status
     *
     * @return void
     */
    public function setStatus(IndexerResultStatuses $status): void;

    /**
     * @return string[]
     */
    public function getMessages(): array;

    /**
     * @param string[] $messages
     *
     * @return void
     */
    public function setMessages(array $messages): void;

    /**
     * @return mixed
     */
    public function getPipelineResult(): mixed;

    /**
     * @param mixed $pipelineResult
     *
     * @return void
     */
    public function setPipelineResult(mixed $pipelineResult): void;
}
