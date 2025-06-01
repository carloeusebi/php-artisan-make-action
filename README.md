<a href="https://packagist.org/packages/carloeusebi/php-artisan-make:action" target="_blank">
    <img alt="Total Downloads" src="https://img.shields.io/packagist/dt/carloeusebi/php-artisan-make:action">
</a>
<a href="https://packagist.org/packages/carloeusebi/php-artisan-make:action" target="_blank">
    <img alt="Latest Version" src="https://img.shields.io/packagist/v/carloeusebi/php-artisan-make:action">
</a>
<a href="https://packagist.org/packages/carloeusebi/php-artisan-make:action" target="_blank">
    <img alt="License" src="https://img.shields.io/packagist/l/carloeusebi/php-artisan-make:action">
</a>

# Php Artisan Make:action

A very small Laravel Package that adds the `make:action` Artisan Command.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Requirements

- PHP 8.* or higher
- Laravel 12.* or higher

## Installation

Run the following command to install the latest version fo the package:

```bash
composer require carloeusebi/php-artisan-make:action --dev
```

## Usage

Run

```bash
php artisan make:action CreateUserAction
```

This will create the following Action inside `app\Actions`

```php
<?php

namespace App\Actions

final class CreateUserAction
{
    public function __construct()
    {
        //
    }

    public function handle()
    {
        //
    }
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.