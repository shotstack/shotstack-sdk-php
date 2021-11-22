# HtmlAsset()

The **HtmlAsset** clip type lets you create text based layout and formatting using HTML and CSS. You can also set the height and width of a bounding box for the HTML content to sit within. Text and elements will wrap within the bounding box.

### Example:

```php
use Shotstack\Client\Model\HtmlAsset;

$htmlAsset = new HtmlAsset();
$htmlAsset
  ->setHtml('<p>Hello <b>World</b></p>')
  ->setCss('p { color: #ffffff; } b { color: #ffff00; }')
  ->setWidth(400)
  ->setHeight(200)
  ->setBackground('transparent')
  ->setPosition('center);
```

### Methods:

Method | Description | Required
:--- | :--- | :---:
setHtml(string $html) | The HTML text string. See list of [supported HTML tags](https://shotstack.io/docs/guide/architecting-an-application/html-support/#supported-html-tags). | Y
setCss(string $css) | The CSS text string to apply styling to the HTML. See list of  [support CSS properties](https://shotstack.io/docs/guide/architecting-an-application/html-support/#supported-css-properties). | -
setWidth(int $width) | Set the width of the HTML asset bounding box in pixels. Text will wrap to fill the bounding box. | -
setHeight(int $height) | Set the height of the HTML asset bounding box in pixels. Text and elements will be masked if they exceed the  height of the bounding box. | -
setBackground(string $background) | Apply a background color behind the HTML bounding box using. Set the text color using hexadecimal  color notation. Transparency is supported by setting the first two characters of the hex string  (opposite to HTML), i.e. #80ffffff will be white with 80% transparency [default to `transparent`]. | - 
setPosition(string $position) | Place the HTML in one of nine predefined positions within the HTML area [default to `center`]. <ul><li>`top` - top (center)</li><li>`topRight` - top right</li><li>`right` - right (center)</li><li>`bottomRight` - bottom right</li><li>`bottom` - bottom (center)</li><li>`bottomLeft` - bottom left</li><li>`left` - left (center)</li><li>`topLeft` - top left</li><li>`center` - center</li></ul> | -