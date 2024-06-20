<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Api\Data;

interface SyncHistoryEntityConsolidationRecordInterface
{
    /**
     * @param string $key
     * @param string|int $index
     *
     * @return mixed
     */
    public function getData($key = '', $index = null); // phpcs:ignore SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint, SlevomatCodingStandard.TypeHints.ReturnTypeHint.MissingNativeTypeHint, Generic.Files.LineLength.TooLong

    /**
     * @param string|string[] $key
     * @param mixed $value
     *
     * @return $this
     */
    public function setData($key, $value = null); // phpcs:ignore SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint, Generic.Files.LineLength.TooLong

    /**
     * @return int
     */
    public function getId(); // phpcs:ignore SlevomatCodingStandard.TypeHints.ReturnTypeHint.MissingNativeTypeHint

    /**
     * @param int $value
     *
     * @return $this
     */
    public function setId($value); // phpcs:ignore SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint, Generic.Files.LineLength.TooLong

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
    public function setTargetParentId(?int $targetParentId): void;

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
     * @return string
     */
    public function getHistory(): string;

    /**
     * @param string $history
     *
     * @return void
     * @throws \InvalidArgumentException
     */
    public function setHistory(string $history): void;

    /**
     * @return string
     */
    public function getDate(): string;

    /**
     * @param string $date
     *
     * @return void
     */
    public function setDate(string $date): void;

}
