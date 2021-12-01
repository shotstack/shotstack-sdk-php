# Crop()

Crop the sides of an asset by a relative amount. The size of the crop is specified using a scale between 0 and 1, relative to the screen width - i.e a left crop of 0.5 will crop half of the asset from the left, a top crop of 0.25 will crop the top by quarter of the asset.

### Example:

```php
use Shotstack\Client\Model\Crop;

$crop = new Crop();
$crop
  ->setTop(0.15)
  ->setBottom(0.15)
  ->setLeft(0)
  ->setRight(0);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setTop(float $top) | Crop from the top of the asset | -
setBottom(float $bottom) | Crop from the bottom of the asset | -
setLeft(float $left) | Crop from the left of the asset | -
setRight(float $right) | Crop from the right of the asset | -
