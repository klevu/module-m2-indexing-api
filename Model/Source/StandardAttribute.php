<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Model\Source;

use Klevu\Configuration\Traits\EnumTrait;

/**
 * Reserved attribute names in klevu indexing.
 * Custom attributes can not be created with these names.
 * Some of which we may not currently index from this plugin by default,
 * however they are reserved for possible future implementation
 * During normal operation this data is retrieved via an API call,
 * however this list is used when that is not possible, e.g. before integration
 */
enum StandardAttribute: string
{
    use EnumTrait;

    case ADDITIONAL_DATA_TO_RETURN = 'additionalDataToReturn';
    case CATEGORY = 'category';
    case CATEGORY_PATH = 'categoryPath';
    case CURRENCY = 'currency';
    case DESCRIPTION = 'description';
    case ID = 'id';
    case IMAGE = 'image';
    case IMAGE_HOVER = 'imageHover';
    case IN_STOCK = 'inStock';
    case ITEM_GROUP_ID = 'itemGroupId';
    case LIST_CATEGORY = 'listCategory';
    case NAME = 'name';
    case PRICE = 'price';
    case RATING = 'rating';
    case RATING_COUNT = 'ratingCount';
    case SALE_PRICE = 'salePrice';
    case SHORT_DESCRIPTION = 'shortDescription';
    case SKU = 'sku';
    case START_PRICE = 'startPrice';
    case SWATCHES_INFO = 'swatchesInfo';
    case TAGS = 'tags';
    case TO_PRICE = 'toPrice';
    case URL = 'url';
    case VISIBILITY = 'visibility';
}
