# Timeline()

A **Timeline** represents the contents of a video edit over time, an audio edit over time, in seconds, or an image layout. A timeline consists of layers called tracks. Tracks are composed of titles, images, audio, html or video segments referred to as clips which are placed along the track at specific starting point and lasting for a specific amount of time.

### Example:

```php
use Shotstack\Client\Model\Timeline;

$timeline = new Timeline();
$timeline
  ->setSoundtrack($soundtrack)
  ->setBackground('#000000')
  ->setFonts($fonts)
  ->setTracks($tracks)
  ->setCache(true);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setSoundtrack([**\Shotstack\Client\Model\Soundtrack**](Soundtrack.md) $soundtrack) | A music or audio soundtrack file in mp3 format. | -
setBackground(string $background) | A hexadecimal value for the timeline background colour. Defaults to `#000000` (black). | -
setFonts([\Shotstack\Client\Model\Font[]](Font.md) $fonts) | An array of custom fonts to be downloaded for use by the HTML assets. | -
setTracks([\Shotstack\Client\Model\Track[]](Track.md) $tracks) | A timeline consists of an array of tracks, each track containing clips. Tracks are layered on top of each other in the same order they are added to the array with the top most track layered over the top of those below it. Ensure that a track containing titles is the top most track so that it is displayed above videos and images. | Y
setCache(bool $cache) | Disable the caching of ingested source footage and assets. See  [caching](https://shotstack.io/docs/guide/architecting-an-application/caching) for more details. [default to `true`] | -
