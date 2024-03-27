<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Test\Integration\Model\Source;

use Klevu\IndexingApi\Model\Source\IndexType;
use Klevu\IndexingApi\Model\Source\StandardAttribute;
use PHPUnit\Framework\TestCase;

class StandardAttributeTest extends TestCase
{
    public function testIndexType_ReturnsExpectedType(): void
    {
        $this->assertSame(expected: IndexType::NO_INDEX, actual: StandardAttribute::BOOSTING->indexType());
        $this->assertSame(expected: IndexType::INDEX, actual: StandardAttribute::CATEGORY_PATH->indexType());
        $this->assertSame(expected: IndexType::NO_INDEX, actual: StandardAttribute::COLORS->indexType());
        $this->assertSame(expected: IndexType::INDEX, actual: StandardAttribute::DESCRIPTION->indexType());
        $this->assertSame(expected: IndexType::INDEX, actual: StandardAttribute::IMAGES->indexType());
        $this->assertSame(expected: IndexType::INDEX, actual: StandardAttribute::IN_STOCK->indexType());
        $this->assertSame(expected: IndexType::INDEX, actual: StandardAttribute::NAME->indexType());
        $this->assertSame(expected: IndexType::INDEX, actual: StandardAttribute::PRICES->indexType());
        $this->assertSame(expected: IndexType::INDEX, actual: StandardAttribute::RATING->indexType());
        $this->assertSame(expected: IndexType::INDEX, actual: StandardAttribute::RATING_COUNT->indexType());
        $this->assertSame(expected: IndexType::INDEX, actual: StandardAttribute::SHORT_DESCRIPTION->indexType());
        $this->assertSame(expected: IndexType::INDEX, actual: StandardAttribute::SKU->indexType());
        $this->assertSame(expected: IndexType::NO_INDEX, actual: StandardAttribute::TAGS->indexType());
        $this->assertSame(expected: IndexType::INDEX, actual: StandardAttribute::URL->indexType());
        $this->assertSame(expected: IndexType::INDEX, actual: StandardAttribute::VISIBILITY->indexType());
    }

    public function testIndexTypesArray_ReturnsExpectedValues(): void
    {
        $indexTypesArray = StandardAttribute::indexTypesArray();

        $this->assertArrayHasKey(key: StandardAttribute::BOOSTING->value, array: $indexTypesArray);
        $this->assertSame(expected: IndexType::NO_INDEX, actual: $indexTypesArray[ StandardAttribute::BOOSTING->value]);

        $this->assertArrayHasKey(key: StandardAttribute::CATEGORY_PATH->value, array: $indexTypesArray);
        $this->assertSame(
            expected: IndexType::INDEX,
            actual: $indexTypesArray[ StandardAttribute::CATEGORY_PATH->value],
        );

        $this->assertArrayHasKey(key: StandardAttribute::COLORS->value, array: $indexTypesArray);
        $this->assertSame(expected: IndexType::NO_INDEX, actual: $indexTypesArray[ StandardAttribute::COLORS->value]);

        $this->assertArrayHasKey(key: StandardAttribute::DESCRIPTION->value, array: $indexTypesArray);
        $this->assertSame(
            expected: IndexType::INDEX,
            actual: $indexTypesArray[ StandardAttribute::DESCRIPTION->value],
        );

        $this->assertArrayHasKey(key: StandardAttribute::IMAGES->value, array: $indexTypesArray);
        $this->assertSame(expected: IndexType::INDEX, actual: $indexTypesArray[ StandardAttribute::IMAGES->value]);

        $this->assertArrayHasKey(key: StandardAttribute::IN_STOCK->value, array: $indexTypesArray);
        $this->assertSame(expected: IndexType::INDEX, actual: $indexTypesArray[ StandardAttribute::IN_STOCK->value]);

        $this->assertArrayHasKey(key: StandardAttribute::NAME->value, array: $indexTypesArray);
        $this->assertSame(expected: IndexType::INDEX, actual: $indexTypesArray[ StandardAttribute::NAME->value]);

        $this->assertArrayHasKey(key: StandardAttribute::PRICES->value, array: $indexTypesArray);
        $this->assertSame(expected: IndexType::INDEX, actual: $indexTypesArray[ StandardAttribute::PRICES->value]);

        $this->assertArrayHasKey(key: StandardAttribute::RATING->value, array: $indexTypesArray);
        $this->assertSame(expected: IndexType::INDEX, actual: $indexTypesArray[ StandardAttribute::RATING->value]);

        $this->assertArrayHasKey(key: StandardAttribute::RATING_COUNT->value, array: $indexTypesArray);
        $this->assertSame(
            expected: IndexType::INDEX,
            actual: $indexTypesArray[ StandardAttribute::RATING_COUNT->value],
        );

        $this->assertArrayHasKey(key: StandardAttribute::SHORT_DESCRIPTION->value, array: $indexTypesArray);
        $this->assertSame(
            expected: IndexType::INDEX,
            actual: $indexTypesArray[ StandardAttribute::SHORT_DESCRIPTION->value],
        );

        $this->assertArrayHasKey(key: StandardAttribute::SKU->value, array: $indexTypesArray);
        $this->assertSame(expected: IndexType::INDEX, actual: $indexTypesArray[ StandardAttribute::SKU->value]);

        $this->assertArrayHasKey(key: StandardAttribute::TAGS->value, array: $indexTypesArray);
        $this->assertSame(expected: IndexType::NO_INDEX, actual: $indexTypesArray[ StandardAttribute::TAGS->value]);

        $this->assertArrayHasKey(key: StandardAttribute::URL->value, array: $indexTypesArray);
        $this->assertSame(expected: IndexType::INDEX, actual: $indexTypesArray[ StandardAttribute::URL->value]);

        $this->assertArrayHasKey(key: StandardAttribute::VISIBILITY->value, array: $indexTypesArray);
        $this->assertSame(expected: IndexType::INDEX, actual: $indexTypesArray[ StandardAttribute::VISIBILITY->value]);
    }
}
