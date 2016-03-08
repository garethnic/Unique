# Unique

This is a Laravel package that lets you add uuid's to a selected field.

## Install

Via Composer

``` bash
$ composer require garethnic/Unique
```

Add the garethnic\ServiceProvider to your config/app.php providers array:

``` php
garethnic\Unique\UniqueServiceProvider::class,
```

Then run the following command to copy config file.

``` bash
$ vendor:publish
```

## Usage

In your model import the trait:

``` php
namespace App;

use garethnic\Unique\Unique;
```

Then it's as simple as:

``` php
class User extends Authenticatable
{
    use Unique;

    ...
```

You can specify which field to fill in the `config/unique.php` file:

``` php
return [
    'field' => 'name'
];
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
