# Tracking of referrals in laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/yormy/sanitize-image.svg?style=flat-square)](https://packagist.org/packages/yormy/sanitize-image)
[![Total Downloads](https://img.shields.io/packagist/dt/yormy/sanitize-image.svg?style=flat-square)](https://packagist.org/packages/yormy/sanitize-image)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/facade/ignition/run-php-tests?label=Tests)
![Alt text](./coverage.svg)

# Introduction - WORK IN PROGRESS
Images in various types can be exploited to contain a payload and hack your website. This package is an sanitizer for images
By checking the actual data and reformatting the image the payload disappears

## Installation


You can install the package via composer:

```bash
composer require yormy/sanitize-image
```

## Usage

``` php
        $imageCleaningService = new ImageCleaningService();
        $imageCleaningService->initBase64($this->screenshotJpeg);
        $imageCleaningService->clean();
        $imageCleaningService->setResolution(30,30);
        $newImage = $imageCleaningService->getBaseJpeg();

        echo "<img src='".$newImage."' />";
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

- [Yormy](https://github.com/yormy)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
