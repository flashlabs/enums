<?php

declare(strict_types=1);

namespace Flashlabs\Enums;

trait EnumValues
{
    /** @return array<string|int|null> */
    public static function values(): array
    {
        // We need to ignore next lines bc of trait being interpreted in context of class that
        // uses it, so f.e. BackedEnums can't return other types than defined and PureEnums can't
        // return anything except null. Same applies to ternary.
        // For more details see here: https://phpstan.org/blog/how-phpstan-analyses-traits

        /** @phpstan-ignore-next-line */
        return array_map(static function (self $case): string|int|null {
            /** @phpstan-ignore-next-line */
            return $case instanceof \BackedEnum ? $case->value : null;
        }, self::cases());
    }
}
