# LumaAsset()

The **LumaAsset** is used to create luma matte masks, transitions and effects between other assets. A luma matte is a grey scale image or animated video where the black areas are transparent and the white areas solid. The luma matte animation should be provided as an mp4 video file. The src must be a publicly accessible URL to the file.

### Example:

```php
use Shotstack\Client\Model\LumaAsset;

$lumaAsset = new LumaAsset();
$lumaAsset
  ->setSrc('https://shotstack-assets.s3-ap-southeast-2.amazonaws.com/examples/luma-mattes/paint-left.mp4')
  ->setTrim(5);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setSrc(string $src) | The luma matte source URL. The URL must be publicly accessible or include credentials. | Y
setTrim(float $trim) | The start trim point of the luma matte clip, in seconds (defaults to 0). Videos will start from the in trim point. A luma matte video will play until the file ends or the Clip length is reached. | -
