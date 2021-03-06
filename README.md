# Japanese String Helpers

PHP Japanese string helper functions for converting Japanese strings from full-width to half-width and reverse.<br/>
Laravel Rule for validation Japanese string only full-width or only half-width.

## Installation

1. You can install the package via composer:

```bash
composer require deha-soft/jp-string-helper
```

2. Optional: The service provider will automatically get registered. Or you may manually add the service provider in your config/app.php file:

```php
'providers' => [
    // ...
    DehaSoft\JpStringHelper\JpStrRulesServiceProvider::class,
];
```

## Usage

Example use of the `toHalfSize`, `toFullSize` helper.

``` php
# using Transform import
use DehaSoft\JpStringHelper\Transform;

$fullSizeStr = "１２３４５ザヂプａｂｃｄ";
$output = Transform::toHalfSize($fullSizeStr);
echo $output;
>>> 12345ｻﾞﾁﾞﾌﾟabcd

$halfSizeStr = "12345ｻﾞﾁﾞﾌﾟabcd";
$output = Transform::toFullSize($halfSizeStr);
echo $output;
>>> １２３４５ザヂプａｂｃｄ
```

Example use of the Rule for Laravel validation.

``` php
# using Rule class import
use DehaSoft\JpStringHelper\Rules\FullSize;
use DehaSoft\JpStringHelper\Rules\HalfSize;

public function rules()
{
    return [
        'name' => [new FullSize()],
        'description' => [new HalfSize()],
    ];
}
```

```php
# or using rule alias

public function rules()
{
    return [
        'name' => ['full_size'],
        'description' => ['half_size'],
    ];
}
```
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.