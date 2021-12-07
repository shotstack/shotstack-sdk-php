# SkewTransformation()

Skew a clip so its edges are sheared at an angle. Use values between 0 and 3. Over 3 the clip will be skewed almost flat.

### Example:

```php
use Shotstack\Client\Model\SkewTransformation;

$skewTransformation = new SkewTransformation();
$skewTransformation
  ->setX(0.5)
  ->setY(0.5);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setX(float $x) | Skew the clip along it&#39;s x axis. [default to `0`] | -
setY(float $y) | Skew the clip along it&#39;s y axis. [default to `0`] | -
