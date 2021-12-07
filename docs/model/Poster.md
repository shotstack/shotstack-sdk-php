# Poster()

Generate a **Poster** image for the video at a specific point from the timeline. The poster image size will match the size of the output video.

### Example:

```php
use Shotstack\Client\Model\Poster;

$poster = new Poster();
$poster
  ->setCapture(1);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setCapture(float $capture) | The point on the timeline in seconds to capture a single frame to use as the poster image. | Y
