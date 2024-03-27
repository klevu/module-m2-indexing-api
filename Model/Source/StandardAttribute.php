<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Model\Source;

use Klevu\Configuration\Traits\EnumTrait;

/**
 *  Reserved attribute names in klevu indexing.
 *  Custom attributes can not be created with these names.
 *  Some of which we may not currently index from this plugin by default,
 *  however they are reserved for possible future implementation
 */
enum StandardAttribute: string
{
    use EnumTrait;

    case BOOSTING = 'boosting';
    case CATEGORY_PATH = 'categoryPath';
    case COLORS = 'colors';
    case DESCRIPTION = 'description';
    case IMAGES = 'images';
    case IN_STOCK = 'inStock';
    case NAME = 'name';
    case PRICES = 'prices';
    case RATING = 'rating';
    case RATING_COUNT = 'ratingCount';
    case SHORT_DESCRIPTION = 'shortDescription';
    case SKU = 'sku';
    case TAGS = 'tags';
    case URL = 'url';
    case VISIBILITY = 'visibility';

    /**
     * @return IndexType
     */
    public function indexType(): IndexType
    {
        return match ($this) //phpcs:ignore PHPCompatibility.Variables.ForbiddenThisUseContexts.OutsideObjectContext
        {
            self::BOOSTING => IndexType::NO_INDEX,
            self::CATEGORY_PATH => IndexType::INDEX,
            self::COLORS => IndexType::NO_INDEX,
            self::DESCRIPTION => IndexType::INDEX,
            self::IMAGES => IndexType::INDEX,
            self::IN_STOCK => IndexType::INDEX,
            self::NAME => IndexType::INDEX,
            self::PRICES => IndexType::INDEX,
            self::RATING => IndexType::INDEX,
            self::RATING_COUNT => IndexType::INDEX,
            self::SHORT_DESCRIPTION => IndexType::INDEX,
            self::SKU => IndexType::INDEX,
            self::TAGS => IndexType::NO_INDEX,
            self::URL => IndexType::INDEX,
            self::VISIBILITY => IndexType::INDEX,
        };
    }

    /**
     * @return array<string, IndexType>
     */
    public static function indexTypesArray(): array
    {
        return array_combine(self::values(), self::indexTypes());
    }

    /**
     * @return IndexType[]
     */
    private static function indexTypes(): array
    {
        return array_map(
            static fn (self $enum) => $enum->indexType(),
            self::cases(),
        );
    }
}
