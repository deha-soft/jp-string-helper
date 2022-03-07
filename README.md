# Japanese String Helpers

PHP Japanese string helper functions for converting Japanese strings from full-width to half-width and reverse.<br/>
Laravel Rule for validation Japanese string only full-width or only half-width.

## Installation

You can install the package via composer:

```bash
composer require deha-soft/jp-string-helper
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
# using Rule import
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

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.