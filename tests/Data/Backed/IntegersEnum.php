<?php

declare(strict_types=1);

namespace Flashlabs\Enums\Tests\Data\Backed;

use Flashlabs\Enums\EnumValues;

enum IntegersEnum: int
{
    use EnumValues;

    case ONE = 1;
    case TWO = 2;
    case THREE = 3;
}
