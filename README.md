# IntegerNet_EnableSwagger Magento Module
<div align="center">

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
</div>

---

Adds the option to re-enable Swagger via configuration. It's disabled in production mode since Magento 2.4.4. 

## Installation

1. Install it into your Magento 2 project with composer:
    ```
    composer require integer-net/magento2-enable-swagger
    ```

2. Enable module
    ```
    bin/magento setup:upgrade
    ```

## Configuration

Enable swagger for your environment:

    bin/magento config:set --lock-env dev/swagger/active 1

We recommend using the `--lock-env` switch so this configuration doesn't get lost when importing a database dump.

We recommend to not enable Swagger if there are no other access restrictions in place. These can be:

- Required VPN
- Basic Auth
- Access restricted to predefined IPs

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email security@integer-net.de instead of using the issue tracker.

## Credits

- [Andreas von Studnitz][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/integer-net/magento2-enable-swagger.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/integer-net/magento2-enable-swagger/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/integer-net/magento2-enable-swagger?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/integer-net/magento2-enable-swagger.svg?style=flat-square
[ico-maintainability]: https://img.shields.io/codeclimate/maintainability/integer-net/magento2-enable-swagger?style=flat-square
[ico-compatibility]: https://img.shields.io/badge/magento-2.3%20|%202.4-brightgreen.svg?logo=magento&longCache=true&style=flat-square

[link-packagist]: https://packagist.org/packages/integer-net/magento2-enable-swagger
[link-travis]: https://travis-ci.org/integer-net/magento2-enable-swagger
[link-scrutinizer]: https://scrutinizer-ci.com/g/integer-net/magento2-enable-swagger/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/integer-net/magento2-enable-swagger
[link-maintainability]: https://codeclimate.com/github/integer-net/magento2-enable-swagger
[link-author]: https://github.com/integer-net
[link-contributors]: ../../contributors
