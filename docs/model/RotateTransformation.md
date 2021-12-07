# RotateTransformation()

Rotate a clip by the specified angle in degrees. Rotation origin is set based on the clips `position`.

### Example:

```php
use Shotstack\Client\Model\RotateTransformation;

$rotateTransformation = new RotateTransformation();
$rotateTransformation
  ->setAngle(45);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setAngle(int $angle) | The angle to rotate the clip. Can be 0 to 360, or 0 to -360. Using a positive number rotates the clip clockwise, negative numbers counter-clockwise. | -
