# Size()

Set a custom size for a video or image. When using a custom size omit the `resolution` and `aspectRatio`. Custom sizes must be divisible by 2 based on the encoder specifications.

### Example:

```php
use Shotstack\Client\Model\Size;

$size = new Size();
$size
  ->setWidth(1200)
  ->setHeight(800);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setWidth(int $width) | Set a custom width for the video or image file. Value must be divisible by 2. Maximum video width is 1920px, maximum image width is 4096px. | -
setHeight(int $height) | Set a custom height for the video or image file. Value must be divisible by 2. Maximum video height is 1920px, maximum image height is 4096px. | -