<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Service\Action;

interface SetIndexingEntitiesToRequireUpdateActionInterface
{
    public const ENTITY_IDS_KEY_TARGET_ID = 'target_id';
    public const ENTITY_IDS_KEY_TARGET_PARENT_ID = 'target_parent_id';

    /**
     * @param string $entityType
     * @param string|null $apiKey
     * @param array<int|string, int|int[]> $targetIds Either entityId to affect all records with that id
     *                                       or an array of ['target_id' => <int>, 'target_parent_id' => <int>|<null>]
     * @param array<string, mixed> $origValues
     *
     * @return void
     */
    public function execute(
        string $entityType,
        ?string $apiKey,
        array $targetIds,
        array $origValues,
    ): void;
}
