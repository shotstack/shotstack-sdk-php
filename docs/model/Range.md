# Range()

Specify a time range to render, i.e. to render only a portion of a video or audio file. Omit this setting to export the entire video. Range can also be used to render a frame at a specific time point - setting a range and output format as `jpg` will output a single frame image at the range `start` point.

### Example:

```php
use Shotstack\Client\Model\Range;

$range = new Range();
$range
  ->setStart(3)
  ->setLength(6);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setStart(float $start) | The point on the timeline, in seconds, to start the render from - i.e. start at second 3. | -
setLength(float $length) | The length of the portion of the video or audio to render - i.e. render 6 seconds of the video. | -