# Output()

The output format, render range and type of media to generate.

### Example:

```php
use Shotstack\Client\Model\Output;

$output = new Output();
$output
  ->setFormat('mp4')
  ->setResolution('sd')
  ->setAspectRatio('16:9')
  ->setSize($size)
  ->setFps(25)
  ->setScaleTo('preview')
  ->setQuality('mediue')
  ->setRepeat(true)
  ->setRange($range)
  ->setPoster($poster)
  ->setThumbnail($thumbnail)
  ->setDestination($destination);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setFormat(string $format) | The output format and type of media file to generate. <ul><li>`mp4` - mp4 video file</li><li>`gif` - animated gif</li><li>`jpg` - jpg image file</li><li>`png` - png image file</li><li>`bmp` - bmp image file</li><li>`mp3` - mp3 audio file (audio only)</li></ul> | Y
setResolution(string $resolution) | The output resolution of the video or image. <ul><li>`preview` - 512px x 288px @ 15fps</li><li>`mobile` - 640px x 360px @ 25fps</li><li>`sd` - 1024px x 576px @ 25fps</li><li>`hd` - 1280px x 720px @ 25fps</li><li>`1080` - 1920px x 1080px @ 25fps</li></ul> | -
setAspectRatio(string $aspectRatio) | The aspect ratio (shape) of the video or image. Useful for social media output formats. Options are: <ul><li>`16:9` - regular landscape/horizontal aspect ratio (default)</li><li>`9:16` - vertical/portrait aspect ratio</li><li>`1:1` - square aspect ratio</li><li>`4:5` - short vertical/portrait aspect ratio</li><li>`4:3` - legacy TV aspect ratio</li></ul> | -
setSize([\Shotstack\Client\Model\Size](Size.md) $size) | Set a custom size for a video or image. When using a custom size omit the `resolution` and `aspectRatio`. Custom sizes must be divisible by 2 based on the encoder specifications. | -
setFps(int $fps) | Override the default frames per second. Useful for when the source footage is recorded at 30fps, i.e. on  mobile devices. Lower frame rates can be used to add cinematic quality (24fps) or to create smaller file size/faster render times or animated gifs (12 or 15fps). Default is 25fps. <ul><li>`12` - 12fps</li><li>`15` - 15fps</li><li>`24` - 24fps</li><li>`25` - 25fps</li><li>`30` - 30fps</li></ul> | - 
setScaleTo(string $scaleTo) | Override the resolution and scale the video or image to render at a different size. When using scaleTo the asset should be edited at the resolution dimensions, i.e. use font sizes that look best at HD, then use scaleTo to output the file at SD and the text will be scaled to the correct size. This is useful if you want to create multiple asset sizes. <ul><li>`preview` - 512px x 288px @ 15fps</li><li>`mobile` - 640px x 360px @ 25fps</li><li>`sd` - 1024px x 576px @25fps</li><li>`hd` - 1280px x 720px @25fps</li><li>`1080` - 1920px x 1080px @25fps</li></ul> | -
setQuality(string $quality) | Adjust the output quality of the video, image or audio. Adjusting quality affects  render speed, download speeds and storage requirements due to file size. The default `medium` provides the most optimized choice for all three  factors. <ul><li>`low` - slightly reduced quality, smaller file size</li><li>`medium` - optimized quality, render speeds and file size</li><li>`high` - slightly increased quality, larger file size</li></ul> | -
setRepeat(bool $repeat) | Loop settings for gif files. Set to `true` to loop, `false` to play only once. [default to `true`] | -
setRange([\Shotstack\Client\Model\Range](Range.md) $range) | Specify a time range to render, i.e. to render only a portion of a video or audio file. Omit this setting to export the entire video. Range can also be used to render a frame at a specific time point - setting a range and output format as `jpg` will output a single frame image at the range `start` point. | -
setPoster([\Shotstack\Client\Model\Poster](Poster.md) $poset) | Generate a poster image from a specific point on the timeline. | -
setThumbnail([\Shotstack\Client\Model\Thumbnail](Thumbnail.md) $thumbnail) | Generate a thumbnail image from a specific point on the timeline. | -
setDestinations([AnyOfShotstackDestination[]](ShotstackDestination.md) $destinations) | A destination is a location where output files can be sent to for serving or hosting. By default all rendered assets are automatically sent to the Shotstack hosting destination. [ShotstackDestination](ShotstackDestination.md) is currently the only option with plans to add more in the future such as S3, YouTube, Vimeo and Mux. If you do not require hosting you can opt-out using the  `exclude` property. | -