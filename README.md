# Nova Tooltip Field

[![Latest Version on Packagist](https://img.shields.io/packagist/v/outl1ne/nova-tooltip-field.svg?style=flat-square)](https://packagist.org/packages/outl1ne/nova-tooltip-field)
[![Total Downloads](https://img.shields.io/packagist/dt/outl1ne/nova-tooltip-field.svg?style=flat-square)](https://packagist.org/packages/outl1ne/nova-tooltip-field)

This [Laravel Nova](https://nova.laravel.com/) package adds a tooltip field to Nova's arsenal of fields.

## Requirements

- `php: >=8.0`
- `laravel/nova: ^4.0`

## Installation

Install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require outl1ne/nova-tooltip-field
```

## Usage

```php
use Outl1ne\NovaTooltipField\Tooltip;

public function fields(Request $request) {
    Tooltip::make('Content', 'content'),
}
```

## Credits

- [Tarvo Reinpalu](https://github.com/tarpsvo)

## License

Nova Tooltip Field is open-sourced software licensed under the [MIT license](LICENSE.md).
