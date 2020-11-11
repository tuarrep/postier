<p align="center"><img src="/art/logo.svg" alt="Social Card of Once"></p>

# Manage parcel shipments Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/postier/postier.svg?style=flat-square)](https://packagist.org/packages/postier/postier)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/postier/postier/run-tests?label=tests)](https://github.com/postier/postier/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/postier/postier.svg?style=flat-square)](https://packagist.org/packages/postier/postier)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-postier-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-postier-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require postier/postier
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Postier\Postier\PostierServiceProvider" --tag="migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Postier\Postier\PostierServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

``` php
$postier = new Postier\Postier();
echo $postier->echoPhrase('Hello, Postier!');
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nicolas Perraut](https://github.com/tuarrep)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
