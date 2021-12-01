# TitleAsset()

The **TitleAsset** clip type lets you create video titles from a text string and apply styling and positioning.

### Example:

```php
use Shotstack\Client\Model\TitleAsset;

$titleAsset = new TitleAsset();
$titleAsset
  ->setText('My Title')
  ->setStyle('minimal')
  ->setColor('#ffffff')
  ->setSize('medium')
  ->setBackground('#000000')
  ->setPosition('center')
  ->setOffset($offset);
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setText(string $text) | The title text string. | Y
setStyle(string $style) | Uses a preset to apply font properties and styling to the title. <ul><li>`minimal`</li><li>`blockbuster`</li><li>`vogue`</li><li>`sketchy`</li><li>`skinny`</li><li>`chunk`</li><li>`chunkLight`</li><li>`marker`</li><li>`future`</li><li>`subtitle`</li></ul> | -
setColor(string $color) | Set the text color using hexadecimal color notation. Transparency is supported by setting the first two characters of the hex string (opposite to HTML),  i.e. #80ffffff will be white with  50% transparency [default to `#ffffff`]. | - 
setSize(string $zize) | Set the relative size of the text using predefined sizes from xx-small to xx-large [default to 'medium']. <ul><li>`xx-small`</li><li>`x-small`</li><li>`small`</li><li>`medium`</li><li>`large`</li><li>`x-large`</li><li>`xx-large`</li></ul> | -
setBackground(string $background) | Apply a background color behind the text. Set the text color using hexadecimal color notation. Transparency is supported by setting the first two characters of the hex string (opposite to HTML),  i.e. #80ffffff will be white with 50% transparency. Omit to use transparent background. | -
setPosition(string $position) | Place the title in one of nine predefined positions of the viewport [default to `center`. <ul><li>`top` - top (center)</li><li>`topRight` - top right</li><li>`right` - right (center)</li><li>`bottomRight` - bottom right</li><li>`bottom` - bottom (center)</li><li>`bottomLeft` - bottom left</li><li>`left` - left (center)</li><li>`topLeft` - top left</li><li>`center` - center</li></ul> | -
setOffset([\Shotstack\Client\Model\Offset](Offset.md) $offset) | Offset the location of the title relative to its position on the screen. | -
