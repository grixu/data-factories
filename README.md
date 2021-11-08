# Data-factories

Simple factories for DTO (`spatie/data-transfer-objects`) and DTO Collections.

## Installation

You can install the package via composer:

```bash
composer require grixu/data-factories
```

## Usage

``` php
use Grixu\DataFactories\Factory;

class CustomerDataFactory extends Factory
{
    public function create(array $parameters = []): CustomerData
    {
        return new CustomerData(
            $parameters +
            [
                'name' => 'Testowy klient',
                'country' => 'PL',
                'postalCode' => '87-100',
                'city' => 'Toruń',
                'vatNumber' => '9562338798',
                'street' => 'Polna 140B',
                'voivodeship' => 'Kujawsko-pomorskie',
                'district' => 'Toruń',
                'paymentPeriod' => 15,
                'syncTs' => now(),
                'updatedAt' => now(),
                'xlId' => 1,
                'xlOperatorId' => 1,
            ]
        );
    }
}
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email mateusz.gostanski@gmail.com instead of using the issue tracker.

## Credits

- [Mateusz Gostański](https://github.com/grixu)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
