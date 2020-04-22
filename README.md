# Quick, Basic Contact Form for Laravel 

This package provides the basic necessities to get up and running a simple contact form. It's probably a poorly built package.

## Installation

You can install the package via composer:

```bash
composer require rbarden/hello
```

## Setup

You really want to publish the views and config.

```bash
php artisan vendor:publish
```

### Config

Update the config (config/hello.php) values to suit your application. Specifically the `private_middleware` array. Typically, you will at least want to include the auth middleware.

### Views

Update the views! The views provided are simply examples and most likely won't work with your setup.
The styling is going to be wrong, the layout extension and section names will be wrong, etc.

The "meat" of the views are actually in partials to help facilitate just taking those and putting them into your own view structure. For example, you can include the contact form partial in an already existing page.

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email me@reidbarden.com instead of using the issue tracker.

## Credits

- [Reid Barden](https://github.com/rbarden)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
