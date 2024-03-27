<?php

/**
 * Copyright © Klevu Oy. All rights reserved. See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace Klevu\IndexingApi\Model\Source;

use Klevu\Configuration\Traits\EnumTrait;

enum Actions: string
{
    use EnumTrait;

    case NO_ACTION = '';
    case ADD = 'Add';
    case DELETE = 'Delete';
    case UPDATE = 'Update';
}
