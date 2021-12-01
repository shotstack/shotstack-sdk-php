# Clip()

A **Clip** is a container for a specific type of asset, i.e. a title, image, video, audio or html. You use a Clip to define when an asset will display on the timeline, how long it will play for and transitions, filters and effects to apply to it.

### Example:

```php
use Shotstack\Client\Model\Clip;

$clip = new Clip();
$clip
  ->setAsset($asset)
  ->setStart(2)
  ->setLength(5)
  ->setFit('crop')
  ->setScale(0)
  ->setPosition('center')
  ->setOffset($offset)
  ->setTransition($transition)
  ->setEffect('zoomIn')
  ->setFilter('greyscale')
  ->setOpacity(1)
  ->setTransform($transform);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setAsset($asset) | The type of asset to display for the duration of this Clip. Value must be one of: <ul><li>[\Shotstack\Client\Model\VideoAsset](VideoAsset.md)</li><li>[\Shotstack\Client\Model\ImageAsset](ImageAsset.md)</li><li>[\Shotstack\Client\Model\TitleAsset](TitleAsset.md)</li><li>[\Shotstack\Client\Model\HtmlAsset](HtmlAsset.md)</li><li>[\Shotstack\Client\Model\AudioAsset](AudioAsset.md)</li><li>[\Shotstack\Client\Model\LumaAsset](LumaAsset.md)</li></ul>  | Y
setStart(float $start) | The start position of the Clip on the timeline, in seconds. | Y
setLength(float $length) | The length, in seconds, the Clip should play for. | Y
setFit(string $fit) | Set how the asset should be scaled to fit the viewport using one of the following options [default to `crop`]: <ul><li>`cover` - stretch the asset to fill the viewport without maintaining the aspect ratio.</li><li>`contain` - fit the entire asset within the viewport while maintaining the original aspect ratio.</li><li>`crop` - scale the asset to fill the viewport while maintaining the aspect ratio. The asset will be cropped if it exceeds the bounds of the viewport.</li><li>`none` - preserves the original asset dimensions and does not apply any scaling.</li></ul>| -
setScale(float $scale) | Scale the asset to a fraction of the viewport size - i.e. setting the scale to 0.5 will scale asset to half the size of the viewport. This is useful for picture-in-picture video and  scaling images such as logos and watermarks. | -
setPosition(string $position) | Place the asset in one of nine predefined positions of the viewport. This is most effective for when the asset is scaled and you want to position the element to a specific position [default to `center`].<ul><li>`top` - top (center)</li><li>`topRight` - top right</li><li>`right` - right (center)</li><li>`bottomRight` - bottom right</li><li>`bottom` - bottom (center)</li><li>`bottomLeft` - bottom left</li><li>`left` - left (center)</li><li>`topLeft` - top left</li><li>`center` - center</li></ul> | -
stOffset([\Shotstack\Client\Model\Offset](Offset.md) $offset) | Offset the location of the asset relative to its position on the viewport. The offset distance is relative to the width of the viewport - for example an x offset of 0.5 will move the asset half the viewport width to the right. | -
setTransition([\Shotstack\Client\Model\Transition](Transition.md) $transition) | In and out transitions for a clip - i.e. fade in and fade out | -
setEffect(string $effect) | A motion effect to apply to the Clip. <ul><li>`zoomIn` - slow zoom in</li><li>`zoomOut` - slow zoom out</li><li>`slideLeft` - slow slide (pan) left</li><li>`slideRight` - slow slide (pan) right</li><li>`slideUp` - slow slide (pan) up</li><li>`slideDown` - slow slide (pan) down</li></ul>| -
setFilter(string $filter) | A filter effect to apply to the Clip. <ul><li>`boost` - boost contrast and saturation</li><li>`contrast` - increase contrast</li><li>`darken` - darken the scene</li><li>`greyscale` - remove colour</li><li>`lighten` - lighten the scene</li><li>`muted` - reduce saturation and contrast</li><li>`invert` - invert colors</li></ul> | -
setOpacity(float $opacity) | Sets the opacity of the Clip where 1 is opaque and 0 is transparent. [default to `1`] | -
setTransform([\Shotstack\Client\Model\Transformation](Transformation.md) $transformation) | A transformation lets you modify the visual properties of a clip. Available transformations are [\Shotstack\Client\Model\RotateTransformation](RotateTransformation.md), [\Shotstack\Client\Model\SkewTransformation.md](SkewTransformation.md) and [\Shotstack\Client\Model\FlipTransformation](FlipTransformation.md). Transformations can be combined to create interesting new shapes and effects. | -
