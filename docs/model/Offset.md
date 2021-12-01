# Offset()

Offsets the position of an asset horizontally or vertically by a relative distance.

### Example:

```php
use Shotstack\Client\Model\Offset;

$offset = new Offset();
$offset
  ->setX(0.1)
  ->setY(-0.2);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setX(float $x) | Offset an asset on the horizontal axis (left or right), range varies from -1 to 1. Positive numbers move the asset right, negative left. For all assets except titles the distance moved is relative to the width  of the viewport - i.e. an X offset of 0.5 will move the asset half the  screen width to the right. [default to `0`] | -
setY(float $y) | Offset an asset on the vertical axis (up or down), range varies from -1 to 1. Positive numbers move the asset up, negative down. For all assets except titles the distance moved is relative to the height of the viewport - i.e. an Y offset of 0.5 will move the asset up half the screen height. [default to `0`] | -
