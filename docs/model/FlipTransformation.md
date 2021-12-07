# FlipTransformation()

Flip a clip vertically or horizontally. Acts as a mirror effect of the clip along the selected plane.

### Example:

```php
use Shotstack\Client\Model\FlipTransformation;

$flipTransformation = new FlipTransformation();
$flipTransformation
  ->setHorizontal(true)
  ->setVertical(true);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setHorizontal(bool $horizontal) | Flip a clip horizontally. [default to `false`] | - 
setVertical(bool $vertical) | Flip a clip vertically. [default to `false`] | -
