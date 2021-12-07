# Soundtrack()

A music or audio file in mp3 format that plays for the duration of the rendered video or the length of the audio file, which ever is shortest.

### Example:

```php
use Shotstack\Client\Model\Soundtrack;

$soundtrack = new Soundtrack();
$soundtrack
  ->setSrc('https://s3-ap-southeast-2.amazonaws.com/shotstack-assets/music/disco.mp3')
  ->setEffect('fadeIn')
  ->setVolume(1);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setSrc(string $src) | The URL of the mp3 audio file. The URL must be publicly accessible or include credentials. | Y
setEffect(string $effect) | The effect to apply to the audio file <ul><li>`fadeIn` - fade volume in only</li><li>`fadeOut` - fade volume out only</li><li>`fadeInFadeOut` - fade volume in and out</li></ul> | -
setVolume(float $volume) | Set the volume for the soundtrack between 0 and 1 where 0 is muted and 1 is full volume (defaults to `1`). | -
