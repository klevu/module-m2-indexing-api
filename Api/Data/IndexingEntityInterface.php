<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api\Data;

use Klevu\IndexingApi\Model\Source\Actions;

/**
 * @method mixed getData(string $key, int|string $index = null)
 */
interface IndexingEntityInterface
{
    /**
     * @return int
     */
    public function getId(); //phpcs:ignore SlevomatCodingStandard.TypeHints.ReturnTypeHint.MissingNativeTypeHint

    /**
     * @param int $value
     *
     * @return void
     */
    public function setId($value); //phpcs:ignore SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint, SlevomatCodingStandard.TypeHints.ReturnTypeHint.MissingNativeTypeHint, Generic.Files.LineLength.TooLong

    /**
     * @return string
     */
    public function getTargetEntityType(): string;

    /**
     * @param string $entityType
     *
     * @return void
     */
    public function setTargetEntityType(string $entityType): void;

    /**
     * @return string|null
     */
    public function getTargetEntitySubtype(): ?string;

    /**
     * @param string|null $entitySubtype
     *
     * @return void
     */
    public function setTargetEntitySubtype(?string $entitySubtype): void;

    /**
     * @return int
     */
    public function getTargetId(): int;

    /**
     * @param int $targetId
     *
     * @return void
     */
    public function setTargetId(int $targetId): void;

    /**
     * @return int|null
     */
    public function getTargetParentId(): ?int;

    /**
     * @param int|null $targetParentId
     *
     * @return void
     */
    public function setTargetParentId(?int $targetParentId = null): void;

    /**
     * @return string
     */
    public function getApiKey(): string;

    /**
     * @param string $apiKey
     *
     * @return void
     */
    public function setApiKey(string $apiKey): void;

    /**
     * @return \Klevu\IndexingApi\Model\Source\Actions
     */
    public function getNextAction(): Actions;

    /**
     * @param \Klevu\IndexingApi\Model\Source\Actions $nextAction
     *
     * @return void
     */
    public function setNextAction(Actions $nextAction): void;

    /**
     * @return string|null
     */
    public function getLockTimestamp(): ?string;

    /**
     * @param string|null $lockTimestamp
     *
     * @return void
     */
    public function setLockTimestamp(?string $lockTimestamp = null): void;

    /**
     * @return \Klevu\IndexingApi\Model\Source\Actions
     */
    public function getLastAction(): Actions;

    /**
     * @param \Klevu\IndexingApi\Model\Source\Actions $lastAction
     *
     * @return void
     */
    public function setLastAction(Actions $lastAction): void;

    /**
     * @return string|null
     */
    public function getLastActionTimestamp(): ?string;

    /**
     * @param string|null $lastActionTimestamp
     *
     * @return void
     */
    public function setLastActionTimestamp(?string $lastActionTimestamp = null): void;

    /**
     * @return bool
     */
    public function getIsIndexable(): bool;

    /**
     * @param bool $isIndexable
     *
     * @return void
     */
    public function setIsIndexable(bool $isIndexable): void;

    /**
     * @param mixed[] $keys
     *
     * @return mixed[]
     */
    public function toArray(array $keys = []); //phpcs:ignore SlevomatCodingStandard.TypeHints.ReturnTypeHint.MissingNativeTypeHint, Generic.Files.LineLength.TooLong
}
