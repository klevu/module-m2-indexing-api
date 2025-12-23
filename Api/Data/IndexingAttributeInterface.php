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
interface IndexingAttributeInterface
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
    public function getTargetAttributeType(): string;

    /**
     * @param string $attributeType
     *
     * @return void
     */
    public function setTargetAttributeType(string $attributeType): void;

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
     * @return string
     */
    public function getTargetCode(): string;

    /**
     * @param string $targetCode
     *
     * @return void
     */
    public function setTargetCode(string $targetCode): void;

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
     * @return string|null
     */
    public function getCreatedAt(): ?string;

    /**
     * @param string|null $createdAt
     *
     * @return void
     */
    public function setCreatedAt(?string $createdAt = null): void;

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string;

    /**
     * @param string|null $updatedAt
     *
     * @return void
     */
    public function setUpdatedAt(?string $updatedAt = null): void;
}
