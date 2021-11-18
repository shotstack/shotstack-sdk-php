# AudioAsset()

The **AudioAsset** is used to create video from images to compose an image. The src must be a publicly accessible URL to an image resource such as a jpg or png file.

### Example:

```
use Shotstack\Client\Model\AudioAsset;

$audioAsset = new AudioAsset();
$audioAsset
  ->setSrc('https://shotstack-assets.s3-ap-southeast-2.amazonaws.com/music/unminus/lit.mp3')
  ->setTrim(2)
  ->setVolume(0.5)
  ->setEffect('fadeInFadeOut');
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setSrc(string $url) | The audio source URL. The URL must be publicly accessible or include credentials. | Y
setTrim(float $seconds) | The start trim point of the audio clip, in seconds (defaults to 0). Audio will start from the trim point. The audio will play until the file ends or the Clip length is reached. | -
setVolume(float $level) | Set the volume for the audio clip between 0 and 1 where 0 is muted and 1 is full volume (defaults to 1). | -
setEffect([\Shotstack\Client\Model\AudioEffect](AudioEffect.md) $crop) | The effect to apply to the audio asset| -

