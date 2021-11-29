# Track()

A track contains an array of clips. Tracks are layered on top of each other in the order in the array. The top most track will render on top of those below it.

### Example:

```php
use Shotstack\Client\Model\Track;

$track = new Track();
$track
  ->setClips($clips);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setClips([\Shotstack\Client\Model\Clip[]](Clip.md) $clips) | An array of Clips comprising of TitleClip, ImageClip or VideoClip. | Y