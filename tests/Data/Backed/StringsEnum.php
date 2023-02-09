<?php

declare(strict_types=1);

namespace Flashlabs\Enums\Tests\Data\Backed;

use Flashlabs\Enums\EnumValues;

enum StringsEnum: string
{
    use EnumValues;

    case TIRAMISU = 'Tiramisu';
    case MARSHMALLOW = 'Marshmallow';
    case OAT_CAKE = 'Oat cake';
}
