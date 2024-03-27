<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Test\Integration\Model\Source;

use Klevu\IndexingApi\Model\Source\IndexDataType;
use Klevu\IndexingApi\Model\Source\IndexType;
use Klevu\TestFixtures\Traits\ObjectInstantiationTrait;
use Klevu\TestFixtures\Traits\TestImplementsInterfaceTrait;
use Magento\Framework\Data\OptionSourceInterface;
use Magento\Framework\ObjectManagerInterface;
use Magento\TestFramework\Helper\Bootstrap;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Klevu\IndexingApi\Model\Source\IndexDataType::class
 * @method OptionSourceInterface instantiateTestObject(?array $arguments = null)
 * @method OptionSourceInterface instantiateTestObjectFromInterface(?array $arguments = null)
 */
class IndexDataTypeTest extends TestCase
{
    use ObjectInstantiationTrait;
    use TestImplementsInterfaceTrait;

    /**
     * @var ObjectManagerInterface|null
     */
    private ?ObjectManagerInterface $objectManager = null; // @phpstan-ignore-line

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->implementationFqcn = IndexDataType::class; // @phpstan-ignore-line
        $this->interfaceFqcn = OptionSourceInterface::class;
        $this->objectManager = Bootstrap::getObjectManager();
    }

    public function testToArrayOptions_ReturnsExpectedData(): void
    {
        $source = $this->instantiateTestObject();
        $options = $source->toOptionArray();

        /** @var IndexType[] $availableOptions */
        $availableOptions = [
            IndexType::NO_INDEX,
            IndexType::INDEX,
        ];
        foreach ($availableOptions as $availableOption) {
            $option = $this->filterIndexDataType($options, $availableOption->value);
            $label = $option['label'] ?? null;
            $this->assertSame(
                expected: $availableOption->label(),
                actual: $label ? $label->render() : null,
            );
        }
    }

    /**
     * @param mixed[] $options
     * @param int $value
     *
     * @return mixed[]
     */
    private function filterIndexDataType(array $options, int $value): array
    {
        $optionArray = array_filter(
            array: $options,
            callback: static fn ($option) => ($option['value'] === $value),
        );

        return array_shift($optionArray);
    }
}
