<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Model;

use Klevu\PhpSDK\Model\Indexing\DataType;

interface MagentoAttributeInterface
{
    public const ATTRIBUTE_PROPERTY_IS_INDEXABLE = 'klevu_is_indexable';
    public const ATTRIBUTE_PROPERTY_ASPECT_MAPPING = 'klevu_aspect_mapping';
    public const ATTRIBUTE_PROPERTY_GENERATE_CONFIGURATION_FOR_ENTITY_SUBTYPES = 'klevu_generate_config_for';

    /**
     * @return int
     */
    public function getAttributeId(): int;

    /**
     * @return string
     */
    public function getAttributeCode(): string;

    /**
     * @return string
     */
    public function getApiKey(): string;

    /**
     * @return bool
     */
    public function isIndexable(): bool;

    /**
     * @param bool $isIndexable
     *
     * @return void
     */
    public function setIsIndexable(bool $isIndexable): void;

    /**
     * @return string
     */
    public function getKlevuAttributeName(): string;

    /**
     * @param DataType $klevuAttributeType
     *
     * @return void
     */
    public function setKlevuAttributeType(DataType $klevuAttributeType): void;

    /**
     * @return DataType|null
     */
    public function getKlevuAttributeType(): ?DataType;

    /**
     * @param string[] $generateConfigurationForEntitySubtypes
     *
     * @return void
     */
    public function setGenerateConfigurationForEntitySubtypes(array $generateConfigurationForEntitySubtypes): void;

    /**
     * @return string[]
     */
    public function getGenerateConfigurationForEntitySubtypes(): array;

    /**
     * @param bool $isGlobal
     *
     * @return void
     */
    public function setIsGlobal(bool $isGlobal): void;

    /**
     * @return bool|null
     */
    public function isGlobal(): ?bool;

    /**
     * @param bool $usesSourceModel
     *
     * @return void
     */
    public function setUsesSourceModel(bool $usesSourceModel): void;

    /**
     * @return bool|null
     */
    public function usesSourceModel(): ?bool;

    /**
     * @param bool $isHtmlAllowed
     *
     * @return void
     */
    public function setIsHtmlAllowed(bool $isHtmlAllowed): void;

    /**
     * @return bool|null
     */
    public function isHtmlAllowed(): ?bool;

    /**
     * @param bool $allowsMultipleValues
     *
     * @return void
     */
    public function setAllowsMultipleValues(bool $allowsMultipleValues): void;

    /**
     * @return bool|null
     */
    public function allowsMultipleValues(): ?bool;
}
