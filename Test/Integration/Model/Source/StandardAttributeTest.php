<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Test\Integration\Model\Source;

use Klevu\IndexingApi\Model\Source\StandardAttribute;
use PHPUnit\Framework\TestCase;

class StandardAttributeTest extends TestCase
{
    public function testValues_ReturnsExpectedValues(): void
    {
        $attributeCodes = StandardAttribute::values();

        $this->assertContains(needle: 'additionalDataToReturn', haystack: $attributeCodes);
        $this->assertContains(needle: 'category', haystack: $attributeCodes);
        $this->assertContains(needle: 'currency', haystack: $attributeCodes);
        $this->assertContains(needle: 'description', haystack: $attributeCodes);
        $this->assertContains(needle: 'id', haystack: $attributeCodes);
        $this->assertContains(needle: 'image', haystack: $attributeCodes);
        $this->assertContains(needle: 'imageHover', haystack: $attributeCodes);
        $this->assertContains(needle: 'inStock', haystack: $attributeCodes);
        $this->assertContains(needle: 'itemGroupId', haystack: $attributeCodes);
        $this->assertContains(needle: 'listCategory', haystack: $attributeCodes);
        $this->assertContains(needle: 'name', haystack: $attributeCodes);
        $this->assertContains(needle: 'price', haystack: $attributeCodes);
        $this->assertContains(needle: 'rating', haystack: $attributeCodes);
        $this->assertContains(needle: 'ratingCount', haystack: $attributeCodes);
        $this->assertContains(needle: 'salePrice', haystack: $attributeCodes);
        $this->assertContains(needle: 'shortDescription', haystack: $attributeCodes);
        $this->assertContains(needle: 'sku', haystack: $attributeCodes);
        $this->assertContains(needle: 'startPrice', haystack: $attributeCodes);
        $this->assertContains(needle: 'swatchesInfo', haystack: $attributeCodes);
        $this->assertContains(needle: 'tags', haystack: $attributeCodes);
        $this->assertContains(needle: 'toPrice', haystack: $attributeCodes);
        $this->assertContains(needle: 'url', haystack: $attributeCodes);
        $this->assertContains(needle: 'visibility', haystack: $attributeCodes);
    }
}
