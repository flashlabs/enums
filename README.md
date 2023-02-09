# ENUMS

PHP Enums contains tools to make your work with enums easier

**Requires PHP >= 8.1.0.**

## Available Tools

1. `EnumValues`: trait that provide `::values()` method returning cases' values

## Installation

You can add this library as a local, per-project dependency to your project using Composer:

```shell
composer require flashlabs/enums
```

## Docs

`EnumValues` supports all `Enum` types: `Backed` and `Pure`

For the `Backed` `Enums` values are as defined, for the `Pure` values are `null`.

## Usage

Include `EnumValues` trait in your `Enum` object:

```php
use Flashlabs\Enums\EnumValues;

enum StringsEnum: string
{
    use EnumValues;

    case TIRAMISU = 'Tiramisu';
    case MARSHMALLOW = 'Marshmallow';
    case OAT_CAKE = 'Oat cake';
}
```

Use `::values()` straight away:
```php
foreach (StringsEnum::values() as $value) {
    echo $value . PHP_EOL;
}

// Output:
// 'Tiramisu'
// 'Marshmallow'
// 'Oat cake'
```

## Issues & Propositions

You can submit issues & propositions via GH tracker: https://github.com/flashlabs/enums/issues
