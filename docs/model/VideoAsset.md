# VideoAsset()

The VideoAsset is used to create video sequences from video files. The src must be a publicly accessible URL to a video
resource such as an mp4 file.

## Example:

```
use Shotstack\Client\Model\VideoAsset;

$videoAsset = new VideoAsset();
$videoAsset
  ->setSrc('https://shotstack-assets.s3.aws.com/mountain.mp4')
  ->setTrim(5)
  ->setVolume(0.5)
  ->setCrop($crop);
```

## Methods:

Name | Description | Required
:--- | :--- | :---: 
**setSrc(string $url)** | The video source URL. The URL must be publicly accessible or include credentials. | Y
**setTrim(float $seconds)** | The start trim point of the video clip, in seconds (defaults to 0). Videos will start from the in trim point. The video will play until the file ends or the Clip length is reached. | -
**setVolume(float $level)** | Set the volume for the video clip between 0 and 1 where 0 is muted and 1 is full volume (defaults to 0). | -
**setCrop([\Shotstack\Client\Model\Crop](Crop.md) $crop)** | Crop the sides of an asset by a relative amount. The size of the crop is specified using a scale between 0 and 1, relative to the screen width - i.e. a left crop of 0.5 will crop half of the asset from the left, a top crop of 0.25 will crop the top by quarter of the asset. | -

