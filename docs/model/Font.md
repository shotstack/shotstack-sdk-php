# Font()

Download a custom font to use with the HTML asset type, using the font name in the CSS or font tag. See our [custom fonts](https://shotstack.io/learn/html-custom-fonts/) getting started guide for more details.

### Example:

```php
use Shotstack\Client\Model\Font;

$font = new Font();
$font
  ->setSrc('https://shotstack-assets.s3-ap-southeast-2.amazonaws.com/fonts/OpenSans-Regular.ttf');
```

### Methods:

Method | Description | Required
:--- | :--- | :---: 
setSrc(string $src) | The URL of the font file. The URL must be publicly accessible or include credentials. | Y