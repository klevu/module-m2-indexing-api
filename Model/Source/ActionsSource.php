<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Model\Source;

use Magento\Framework\Data\OptionSourceInterface;

class ActionsSource implements OptionSourceInterface
{
    /**
     * @return string[][]
     */
    public function toOptionArray(): array
    {
        $options = [];
        foreach (Actions::values() as $action) {
            $options[] = ['value' => $action, 'label' => __($action)->render()];
        }

        return $options;
    }
}
