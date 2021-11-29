# Transformation()

Apply one or more transformations to a clip. **Transformations** alter the visual properties of a clip and can be combined to create new shapes and effects.

### Example:

```php
use Shotstack\Client\Model\Transformation;

$transformation = new Transformation();
$transformation
  ->setX(0.5)
  ->setY(0.5);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setRotate([\Shotstack\Client\Model\RotateTransformation](RotateTransformation.md) $rotate) | Rotate a clip by the specified angle in degrees. Rotation origin is set based on the clips `position`. | -
setSkew([\Shotstack\Client\Model\SkewTransformation](SkewTransformation.md) $skew) | Skew a clip so its edges are sheared at an angle. Use values between 0 and 3. Over 3 the clip will be skewed almost flat. | -
setFlip([\Shotstack\Client\Model\FlipTransformation](FlipTransformation.md) $flip) | Flip a clip vertically or horizontally. Acts as a mirror effect of the clip along the selected plane. | -