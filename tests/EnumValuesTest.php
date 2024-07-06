<?php

declare(strict_types=1);

namespace Flashlabs\Enums\Tests;

use Flashlabs\Enums\EnumValues;
use Flashlabs\Enums\Tests\Data\Backed\IntegersEnum;
use Flashlabs\Enums\Tests\Data\Backed\StringsEnum;
use Flashlabs\Enums\Tests\Data\Pure\PureEnum;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('functional')]
#[CoversClass(EnumValues::class)]
final class EnumValuesTest extends TestCase
{
    /**
     * @param array<string|int|null> $values
     * @param array<string|int|null> $expectedValues
     */
    #[DataProvider('enumValuesDataProvider')]
    public function testEnumValues(array $values, array $expectedValues): void
    {
        self::assertCount(\count($expectedValues), $values);
        self::assertSame($expectedValues, $values);
    }

    /** @return iterable<array<int, array<int|string|null>>> */
    public static function enumValuesDataProvider(): iterable
    {
        yield 'StringsEnum' => [
            StringsEnum::values(), ['Tiramisu', 'Marshmallow', 'Oat cake'],
        ];
        yield 'IntegersEnum' => [
            IntegersEnum::values(), [1, 2, 3],
        ];
        yield 'PureEnum' => [
            PureEnum::values(), [null, null],
        ];
    }
}
