# ImageAsset()

The **ImageAsset** is used to create video from images to compose an image. The src must be a publicly accessible URL to an image resource such as a jpg or png file.

### Example:

```php
use Shotstack\Client\Model\ImageAsset;

$imageAsset = new ImageAsset();
$imageAsset
  ->setSrc('https://shotstack-assets.s3-ap-southeast-2.amazonaws.com/images/earth.jpg')
  ->setCrop($crop);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setSrc(string $url) | The image source URL. The URL must be publicly accessible or include credentials. | Y
setCrop([\Shotstack\Client\Model\Crop](Crop.md) $crop) | Crop the sides of an asset by a relative amount. The size of the crop is specified using a scale between 0 and 1, relative to the screen width - i.e. a left crop of 0.5 will crop half of the asset from the left, a top crop of 0.25 will crop the top by quarter of the asset. | -
