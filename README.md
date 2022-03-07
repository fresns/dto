<p align="center"><a href="https://fresns.org" target="_blank"><img src="https://raw.githubusercontent.com/fresns/docs/main/images/Fresns%20Logo.png" width="300"></a></p>

<p align="center">
<img src="https://img.shields.io/badge/PHP-%5E7.0%7C%5E8.0-blue" alt="PHP">
<img src="https://img.shields.io/badge/License-Apache--2.0-green" alt="License">
</p>

## About DTO

Fresns **data transfer object** extension package for easy generation of data rules and inspection of transfer data. Works with **Laravel** projects.

## Install

To install through Composer, by run the following command:

```bash
composer require fresns/dto
```

## Generate DTO

```php
// Generate a new DTO (path: /app/DTO/)
php artisan make:dto BaseDTO

// Generate a new DTO(to the specified path)
php artisan make:dto BaseDTO --path /app/Fresns/Panel
```

## Contributing

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/fresns/dto/issues).
2. Answer questions or fix bugs on the [issue tracker](https://github.com/fresns/dto/issues).
3. Contribute new features or update the wiki.

*The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable.*

## License

Fresns DTO is open-sourced software licensed under the [Apache-2.0 license](https://github.com/fresns/dto/blob/main/LICENSE).