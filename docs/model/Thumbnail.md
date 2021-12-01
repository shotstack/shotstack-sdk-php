# Thumbnail()

Generate a thumbnail image for the video or image at a specific point from the timeline.

### Example:

```php
use Shotstack\Client\Model\Thumbnail;

$thumbnail = new Thumbnail();
$thumbnail
  ->setCapture(1)
  ->setScale(0.3);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setCapture(float $capture) | The point on the timeline in seconds to capture a single frame to use as the thumbnail image. | Y
setScale(float $scale) | Scale the thumbnail size to a fraction of the viewport size - i.e. setting the scale to 0.5 will scale  the thumbnail to half the size of the viewport. | Y
