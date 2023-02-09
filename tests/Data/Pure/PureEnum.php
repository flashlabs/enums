<?php

declare(strict_types=1);

namespace Flashlabs\Enums\Tests\Data\Pure;

use Flashlabs\Enums\EnumValues;

enum PureEnum
{
    use EnumValues;

    case COOKIE;
    case CHOCOLATE;
}
