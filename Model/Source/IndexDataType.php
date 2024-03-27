<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;

class IndexDataType implements OptionSourceInterface
{
    /**
     * @return mixed[][]
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => IndexType::NO_INDEX->value, 'label' => __(IndexType::NO_INDEX->label())],
            ['value' => IndexType::INDEX->value, 'label' => __(IndexType::INDEX->label())],
        ];
    }
}
